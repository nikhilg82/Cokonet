# Cokonet — Enrol + Razorpay flow

This adds a **Enrol → details → Razorpay payment → confirmation** flow to any
page. The course fee is *not* shown on the site; it's confirmed by the
counsellor over the phone, and the learner enters that agreed amount on the
payment step.

There are two files:

- `assets/js/cokonet-enroll.js` — the front-end (drop-in, no dependencies)
- `server/` — a tiny Node/Express backend for the secure production mode

---

## 1. Add the flow to a page

Include the script once, before `</body>`:

```html
<script src="assets/js/cokonet-enroll.js" defer></script>
```

Then mark any button or link to open it. The `data-course` is optional and
just pre-selects the course:

```html
<a data-enroll data-course="SAP FICO" class="btn btn-primary">Enrol now</a>
```

Or trigger it from your own JavaScript:

```js
CokonetEnroll.open({ course: "SAP FICO" });
```

That's the whole front-end. It injects its own styles and modal, adapts to the
site's dark mode, and fires a `cokonet:enrolled` DOM event on success (handy for
analytics/CRM).

---

## 2. The three modes

Open `assets/js/cokonet-enroll.js` and set `CONFIG.MODE` at the top.

| Mode | Keys? | Backend? | What happens |
|------|-------|----------|--------------|
| `DEMO` (default) | none | none | Simulates the payment so you can see the full flow. No real charge. Great for design review. |
| `CLIENT` | `rzp_test_*` `key_id` | none | Opens the **real** Razorpay screen (UPI QR, cards, net-banking, wallets) in test mode, amount-only. Good for trying the real UI. Not for production. |
| `SERVER` | `rzp_live_*` `key_id` | yes | **Production.** The backend creates the order with your secret key and verifies the signature. Secure. |

Only the **public** `key_id` ever goes in the browser. The **secret** stays on the server.

### Going live (SERVER mode)

```js
MODE:     "SERVER",
KEY_ID:   "rzp_live_xxxxxxxx",              // public key id
API_BASE: "https://api.cokonet.com",        // where server/ is deployed
```

---

## 3. Run the backend

```bash
cd server
cp .env.example .env        # paste your RZP_KEY_ID and RZP_KEY_SECRET
npm install
npm start                   # -> http://localhost:4000
```

Endpoints the front-end uses:

- `POST /api/orders` → creates an enrolment record + Razorpay order
- `POST /api/verify` → verifies the payment signature after checkout
- `POST /api/webhook` → optional, for server-authoritative capture

The store is in-memory for the demo — swap it for your real database where the
`enrolments` Map is used.

---

## 4. Testing (test mode)

Use Razorpay **test** keys, then on the checkout screen:

- **UPI:** enter `success@razorpay` (or `failure@razorpay` to test a failure)
- **Card:** `4111 1111 1111 1111`, any future expiry, any CVV, any name
- No real money moves in test mode.

---

## 5. Security notes (please read)

- **Never** put the Razorpay *secret* key in front-end JS. Only `key_id` is public.
- **Don't trust the amount from the browser.** Because the fee is agreed over the
  phone, the safest pattern is to make the amount authoritative on the server:
  in `POST /api/orders`, look up the counsellor-agreed amount by the enrolment
  reference (or phone) and use that — there's a marked spot in `server/server.js`.
- Always **verify the signature** server-side (`/api/verify`) before treating a
  payment as complete. The demo does this.
- Lock `ALLOW_ORIGIN` to your real domain in production.

---

## 6. Recommended alternative for phone-agreed fees — Razorpay Payment Links

Because your fee is negotiated per learner, **Razorpay Payment Links / Payment
Pages** are often the cleanest fit and need *no* custom amount handling:

1. After the call, the counsellor creates a Payment Link for the agreed amount
   (Razorpay Dashboard → Payment Links, or the Payment Links API).
2. Razorpay sends the learner a link/QR by SMS, WhatsApp, or email.
3. The learner pays; you get a webhook / dashboard confirmation.

In this model the website's **Enrol** button just captures the learner's details
and notifies the counsellor — the amount can never be tampered with because it's
set by the counsellor, not the browser. You can wire the front-end's
`cokonet:enrolled` event to your CRM to kick that off automatically.

Both approaches are valid; Payment Links trade a bit of on-site polish for
simpler, safer amount handling.
