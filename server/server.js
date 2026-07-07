/* ============================================================================
   Cokonet Academy — Razorpay backend (minimal, production-shaped)
   ----------------------------------------------------------------------------
   Two endpoints the front-end (assets/cokonet-enroll.js, MODE:"SERVER") calls:
     POST /api/orders  -> creates an enrolment record + a Razorpay order
     POST /api/verify  -> verifies the payment signature after checkout
   Plus an optional Razorpay webhook receiver for server-authoritative capture.

   The secret key NEVER leaves this server. Do not ship it to the browser.

   Run:
     cp .env.example .env      # then fill in your keys
     npm install
     npm start
   ========================================================================== */
require("dotenv").config();
const express = require("express");
const cors = require("cors");
const crypto = require("crypto");
const Razorpay = require("razorpay");

const {
  RZP_KEY_ID,
  RZP_KEY_SECRET,
  RZP_WEBHOOK_SECRET,
  PORT = 4000,
  ALLOW_ORIGIN = "*"
} = process.env;

if (!RZP_KEY_ID || !RZP_KEY_SECRET) {
  console.error("Missing RZP_KEY_ID / RZP_KEY_SECRET. Copy .env.example to .env and fill them in.");
  process.exit(1);
}

const razorpay = new Razorpay({ key_id: RZP_KEY_ID, key_secret: RZP_KEY_SECRET });
const app = express();
app.use(cors({ origin: ALLOW_ORIGIN }));

// Webhook must read the RAW body to verify its signature — mount it before express.json().
app.post("/api/webhook", express.raw({ type: "application/json" }), (req, res) => {
  const signature = req.headers["x-razorpay-signature"];
  const expected = crypto.createHmac("sha256", RZP_WEBHOOK_SECRET || "")
    .update(req.body).digest("hex");
  if (!RZP_WEBHOOK_SECRET || signature !== expected) return res.status(400).send("invalid signature");
  const event = JSON.parse(req.body.toString());
  // e.g. event.event === "payment.captured" -> mark enrolment paid in your DB
  console.log("[webhook]", event.event);
  res.json({ received: true });
});

app.use(express.json());

/* --------------------------------------------------------------------------
   In-memory store — REPLACE with your real database (Postgres/Mongo/etc).
   Keyed by enrolment reference.
--------------------------------------------------------------------------- */
const enrolments = new Map();

function newRef() {
  return "CKN-" + new Date().getFullYear() + "-" +
    crypto.randomBytes(3).toString("hex").toUpperCase();
}

/* --------------------------------------------------------------------------
   POST /api/orders
   Body: { amount (paise), currency, enrolment:{name,email,contact,course,city,reference} }

   IMPORTANT — the fee is agreed over the phone, not shown on the site.
   For real security you should NOT trust the amount the browser sends. Instead:
     • look up the counsellor-agreed amount by enrolment.reference (or phone), OR
     • generate Razorpay Payment Links from the counsellor's dashboard/API
       (see README "Payment Links" — the best fit for phone-agreed fees).
   The lookup below shows where to enforce that.
--------------------------------------------------------------------------- */
app.post("/api/orders", async (req, res) => {
  try {
    const { amount, currency = "INR", enrolment = {} } = req.body || {};

    // --- authoritative amount check (recommended) -------------------------
    // const agreed = await db.getAgreedAmount(enrolment.reference || enrolment.contact);
    // if (agreed && agreed !== amount) return res.status(409).json({ error: "amount_mismatch", agreed });
    // const finalAmount = agreed || amount;
    const finalAmount = amount;                 // demo: trust the client (replace above)

    if (!Number.isInteger(finalAmount) || finalAmount < 10000) { // < ₹100
      return res.status(400).json({ error: "invalid_amount" });
    }

    const reference = enrolment.reference || newRef();
    const order = await razorpay.orders.create({
      amount: finalAmount,
      currency,
      receipt: reference,
      notes: { course: enrolment.course || "", reference }
    });

    enrolments.set(reference, {
      ...enrolment, reference, amount: finalAmount, currency,
      order_id: order.id, status: "created", created_at: Date.now()
    });

    res.json({ id: order.id, amount: order.amount, currency: order.currency, reference });
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: "order_failed" });
  }
});

/* --------------------------------------------------------------------------
   POST /api/verify
   Body: { razorpay_order_id, razorpay_payment_id, razorpay_signature }
   Verifies the checkout signature with your secret key.
--------------------------------------------------------------------------- */
app.post("/api/verify", (req, res) => {
  const { razorpay_order_id, razorpay_payment_id, razorpay_signature } = req.body || {};
  if (!razorpay_order_id || !razorpay_payment_id || !razorpay_signature) {
    return res.status(400).json({ valid: false, error: "missing_fields" });
  }
  const expected = crypto.createHmac("sha256", RZP_KEY_SECRET)
    .update(razorpay_order_id + "|" + razorpay_payment_id).digest("hex");

  // Constant-time compare, but only when lengths match (timingSafeEqual throws otherwise).
  const a = Buffer.from(expected, "utf8");
  const b = Buffer.from(String(razorpay_signature), "utf8");
  const valid = a.length === b.length && crypto.timingSafeEqual(a, b);
  if (valid) {
    for (const rec of enrolments.values()) {
      if (rec.order_id === razorpay_order_id) {
        rec.status = "paid"; rec.payment_id = razorpay_payment_id; rec.paid_at = Date.now();
        // TODO: send receipt email, notify counsellor, grant LMS access, etc.
        break;
      }
    }
  }
  res.json({ valid });
});

app.get("/api/health", (_req, res) => res.json({ ok: true }));

app.listen(PORT, () => console.log(`Cokonet payment server on :${PORT} (${RZP_KEY_ID.startsWith("rzp_live") ? "LIVE" : "TEST"} keys)`));
