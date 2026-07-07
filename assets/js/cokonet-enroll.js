/* ============================================================================
   Cokonet Academy - Enroll + Razorpay flow  (drop-in, no dependencies)
   ----------------------------------------------------------------------------
   Adds an "Enroll → details → Razorpay payment → done" flow to any page.

   HOW TO USE
   ----------
   1) Include once, before </body>:
        <script src="assets/cokonet-enroll.js" defer></script>
   2) Mark any button/link to open it (course name optional):
        <a data-enroll data-course="SAP FICO">Enrol now</a>
      ...or call it from your own code:
        CokonetEnroll.open({ course: "SAP FICO" });

   MODES (see CONFIG below)
   ------------------------
   • DEMO      : no keys, no backend - simulates the payment so you can see the
                 whole flow locally. (default, so this works out of the box)
   • CLIENT    : real Razorpay overlay using a TEST key_id, amount-only, no
                 backend. Good for trying the real UPI-QR / card screen.
   • SERVER    : production. Backend creates the order (secret key) and verifies
                 the signature. This is the secure, go-live mode.

   The course fee is NOT shown on the site; it is confirmed by the counsellor
   over the phone. The learner enters that agreed amount (and optional
   enrolment reference) on the payment step. In SERVER mode the backend should
   validate that amount against the counsellor-agreed record - see server/.
   ========================================================================== */
(function () {
  "use strict";

  /* ------------------------------- CONFIG -------------------------------- */
  const CONFIG = {
    MODE: "DEMO",                       // "DEMO" | "CLIENT" | "SERVER"
    KEY_ID: "",                         // "rzp_test_xxx" or "rzp_live_xxx" (public key id only!)
    API_BASE: "",                       // e.g. "https://api.cokonet.com" (SERVER mode)
    BUSINESS_NAME: "Cokonet Academy",
    CURRENCY: "INR",
    THEME_COLOR: "#FF5F00",
    LOGO: "",                           // optional absolute URL for the Razorpay modal logo
    SUPPORT_PHONE: "+91 90482 06140",
    COUNSELLING_URL: "cokonet-contact.html",
    MIN_AMOUNT: 100,                    // ₹ - guard against obvious typos
    COURSES: [
      "SAP FICO","SAP MM","SAP ABAP","SAP SuccessFactors",
      "Data Analytics","Data Science & AI","AI & Generative AI","Advanced Excel & MIS",
      "Full-Stack Web Development","Python Programming","Software Testing / QA",
      "Cloud & DevOps","Cyber Security","Salesforce",
      "Digital Marketing & AI","Graphic Design & AI","UI/UX Design","Video Editing & AI Film",
      "Accounting & Finance","Other / not sure yet"
    ]
  };

  const RZP_SDK = "https://checkout.razorpay.com/v1/checkout.js";
  const $ = (sel, root) => (root || document).querySelector(sel);

  /* --------------------------- one-time styles --------------------------- */
  function injectStyles() {
    if ($("#ckn-enroll-css")) return;
    const css = `
    .ckn-scrim{position:fixed;inset:0;background:rgba(0,20,67,.55);z-index:1000;display:none;align-items:center;justify-content:center;padding:20px;font-family:'Manrope',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif}
    .ckn-scrim.open{display:flex}
    .ckn-modal{background:#fff;border-radius:22px;box-shadow:0 18px 48px rgba(0,20,67,.28);max-width:460px;width:100%;max-height:92vh;overflow:auto;animation:cknPop .45s cubic-bezier(.22,.61,.36,1)}
    @keyframes cknPop{from{opacity:0;transform:translateY(24px) scale(.97)}to{opacity:1;transform:none}}
    .ckn-top{background:linear-gradient(135deg,#002169,#0a3a9e);color:#fff;padding:24px 28px;position:relative}
    .ckn-x{position:absolute;top:14px;right:14px;width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.15);border:none;color:#fff;font-size:1rem;cursor:pointer;transition:background .18s}
    .ckn-x:hover{background:rgba(255,255,255,.3)}
    .ckn-top h4{font-size:1.25rem;font-weight:800;line-height:1.25;margin:0}
    .ckn-top p{font-size:.84rem;color:#B8C6E2;margin:6px 0 0}
    .ckn-steps{display:flex;gap:6px;margin-top:16px}
    .ckn-steps span{flex:1;height:4px;border-radius:99px;background:rgba(255,255,255,.22)}
    .ckn-steps span.on{background:#FF5F00}
    .ckn-body{padding:24px 28px}
    .ckn-field{margin-bottom:15px}
    .ckn-field label{display:block;font-size:.8rem;font-weight:700;color:#002169;margin-bottom:7px}
    .ckn-field input,.ckn-field select,.ckn-field textarea{width:100%;font-family:inherit;font-size:1rem;padding:12px 14px;border:1.5px solid #C5D4E2;border-radius:8px;background:#F7F9FC;color:#0B1B3F;transition:all .18s;box-sizing:border-box}
    .ckn-field textarea{resize:vertical;min-height:64px}
    .ckn-field input:focus,.ckn-field select:focus,.ckn-field textarea:focus{outline:none;border-color:#002169;box-shadow:0 0 0 4px rgba(0,33,105,.12);background:#fff}
    .ckn-field .err{display:none;color:#D33;font-size:.72rem;font-weight:700;margin-top:5px}
    .ckn-field.bad input,.ckn-field.bad select{border-color:#E5484D}
    .ckn-field.bad .err{display:block}
    .ckn-row{display:flex;gap:8px}
    .ckn-row .cc{width:104px;flex-shrink:0}
    .ckn-amt{position:relative}
    .ckn-amt .cur{position:absolute;left:14px;top:50%;transform:translateY(-50%);font-weight:800;color:#4A5878;pointer-events:none}
    .ckn-amt input{padding-left:30px;font-weight:800;font-size:1.15rem}
    .ckn-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;width:100%;font-family:inherit;font-weight:800;font-size:.98rem;padding:14px 20px;border-radius:999px;border:none;cursor:pointer;transition:transform .16s,box-shadow .16s,background .16s;min-height:50px}
    .ckn-btn-primary{background:#FF5F00;color:#fff}
    .ckn-btn-primary:hover{background:#E65500;transform:translateY(-2px);box-shadow:0 8px 22px rgba(255,95,0,.30)}
    .ckn-btn-ghost{background:transparent;color:#002169;border:1.5px solid #C5D4E2;margin-top:10px}
    .ckn-btn-ghost:hover{border-color:#002169}
    .ckn-btn[disabled]{opacity:.5;pointer-events:none}
    .ckn-note{font-size:.76rem;color:#4A5878;line-height:1.5;background:#F0F3F8;border-radius:10px;padding:11px 13px;margin:2px 0 15px}
    .ckn-note b{color:#002169}
    .ckn-fine{font-size:.72rem;color:#4A5878;text-align:center;margin-top:12px;line-height:1.5}
    .ckn-secure{display:flex;align-items:center;justify-content:center;gap:6px;font-size:.72rem;font-weight:700;color:#4A5878;margin-top:10px}
    .ckn-secure svg{width:14px;height:14px}
    .ckn-summary{background:#F7F9FC;border:1px solid #E4EBF2;border-radius:12px;padding:14px 16px;margin-bottom:16px}
    .ckn-summary .r{display:flex;justify-content:space-between;gap:12px;font-size:.84rem;padding:4px 0}
    .ckn-summary .r span:first-child{color:#4A5878}
    .ckn-summary .r span:last-child{color:#002169;font-weight:700;text-align:right}
    .ckn-link{color:#FF5F00;font-weight:800;cursor:pointer;text-decoration:none}
    .ckn-link:hover{text-decoration:underline}
    .ckn-badge{display:inline-block;font-size:.62rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:#FF5F00;background:#FFEFE5;border-radius:99px;padding:3px 9px;margin-top:10px}
    .ckn-done{text-align:center;padding:8px 4px}
    .ckn-tick{width:64px;height:64px;border-radius:50%;background:#10B981;color:#fff;font-size:1.8rem;display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
    .ckn-done h5{color:#002169;font-size:1.25rem;font-weight:800;margin:0}
    .ckn-done p{font-size:.88rem;color:#4A5878;margin:8px 0 0;line-height:1.55}
    .ckn-done .ref{display:inline-block;font-family:ui-monospace,Menlo,monospace;background:#F0F3F8;border-radius:8px;padding:6px 12px;font-weight:800;color:#002169;margin-top:12px}
    .ckn-spin{width:20px;height:20px;border:2.5px solid rgba(255,255,255,.4);border-top-color:#fff;border-radius:50%;animation:cknSpin .7s linear infinite;display:inline-block}
    @keyframes cknSpin{to{transform:rotate(360deg)}}
    .ckn-hide{display:none!important}
    /* dark mode (site toggles html.dark) */
    html.dark .ckn-modal{background:#13233E}
    html.dark .ckn-field label{color:#DCE7FB}
    html.dark .ckn-field input,html.dark .ckn-field select,html.dark .ckn-field textarea{background:#0C1626;border-color:#33476B;color:#E8EEF9}
    html.dark .ckn-field input:focus,html.dark .ckn-field select:focus,html.dark .ckn-field textarea:focus{background:#0C1626;border-color:#9DB4E8;box-shadow:0 0 0 4px rgba(157,180,232,.18)}
    html.dark .ckn-note{background:#0E1B31;color:#A9B7D6}
    html.dark .ckn-note b{color:#DCE7FB}
    html.dark .ckn-summary{background:#0E1B31;border-color:#1E3050}
    html.dark .ckn-summary .r span:last-child,html.dark .ckn-done h5{color:#DCE7FB}
    html.dark .ckn-done .ref{background:#0E1B31;color:#DCE7FB}
    html.dark .ckn-btn-ghost{color:#DCE7FB;border-color:#33476B}
    @media(prefers-reduced-motion:reduce){.ckn-modal,.ckn-spin{animation:none}}
    `;
    const s = document.createElement("style");
    s.id = "ckn-enroll-css";
    s.textContent = css;
    document.head.appendChild(s);
  }

  /* ------------------------------- markup -------------------------------- */
  const CC = ["🇮🇳 +91","🇦🇪 +971","🇸🇦 +966","🇶🇦 +974","🇴🇲 +968","🇧🇭 +973","🇰🇼 +965","🇺🇸 +1","🇬🇧 +44","🇸🇬 +65","🇦🇺 +61","🇲🇾 +60"];

  function buildModal() {
    if ($("#ckn-scrim")) return;
    const courseOpts = CONFIG.COURSES.map(c => `<option>${c}</option>`).join("");
    const ccOpts = CC.map((c,i) => `<option${i===0?" selected":""}>${c}</option>`).join("");
    const el = document.createElement("div");
    el.className = "ckn-scrim";
    el.id = "ckn-scrim";
    el.innerHTML = `
      <div class="ckn-modal" role="dialog" aria-modal="true" aria-labelledby="ckn-title">
        <div class="ckn-top">
          <button class="ckn-x" aria-label="Close" data-ckn-close>✕</button>
          <h4 id="ckn-title">Enrol at Cokonet</h4>
          <p id="ckn-sub">A few details, then secure payment.</p>
          <div class="ckn-steps"><span class="on" data-s="1"></span><span data-s="2"></span><span data-s="3"></span></div>
        </div>
        <div class="ckn-body">

          <!-- STEP 1: details -->
          <div id="ckn-step1">
            <div class="ckn-field"><label for="ckn-name">Full name *</label>
              <input id="ckn-name" type="text" placeholder="As it should appear on your certificate" autocomplete="name">
              <div class="err">Please enter your name.</div></div>
            <div class="ckn-field"><label for="ckn-email">Email *</label>
              <input id="ckn-email" type="email" placeholder="you@example.com" autocomplete="email">
              <div class="err">Enter a valid email.</div></div>
            <div class="ckn-field"><label for="ckn-phone">Mobile *</label>
              <div class="ckn-row">
                <select id="ckn-cc" class="cc" aria-label="Country code">${ccOpts}</select>
                <input id="ckn-phone" type="tel" inputmode="numeric" placeholder="Mobile number" style="flex:1" autocomplete="tel">
              </div>
              <div class="err">Enter a valid mobile number.</div></div>
            <div class="ckn-field"><label for="ckn-course">Course *</label>
              <select id="ckn-course">${courseOpts}</select></div>
            <div class="ckn-field"><label for="ckn-city">City</label>
              <input id="ckn-city" type="text" placeholder="Your city" autocomplete="address-level2"></div>
            <button class="ckn-btn ckn-btn-primary" data-ckn-next>Continue to payment →</button>
            <div class="ckn-secure">${lockSvg()} Your details stay private - never sold or shared.</div>
          </div>

          <!-- STEP 2: payment -->
          <div id="ckn-step2" class="ckn-hide">
            <div class="ckn-summary" id="ckn-summary"></div>
            <div class="ckn-note">The course fee is <b>confirmed by your counsellor over the phone</b> - it is not listed on the site. Enter the exact amount they agreed with you. Not sure? <a class="ckn-link" data-ckn-counsel>Talk to a counsellor first →</a></div>
            <div class="ckn-field"><label for="ckn-amount">Course fee confirmed by counsellor *</label>
              <div class="ckn-amt"><span class="cur">₹</span><input id="ckn-amount" type="number" min="1" step="1" inputmode="numeric" placeholder="0"></div>
              <div class="err">Enter the amount your counsellor confirmed.</div></div>
            <div class="ckn-field"><label for="ckn-ref">Enrolment reference <span style="font-weight:600;color:#7C8AA8">(optional - if your counsellor gave one)</span></label>
              <input id="ckn-ref" type="text" placeholder="e.g. CKN-2026-00123"></div>
            <button class="ckn-btn ckn-btn-primary" data-ckn-pay><span class="lbl">Pay securely with Razorpay</span></button>
            <button class="ckn-btn ckn-btn-ghost" data-ckn-back>← Back to details</button>
            <div class="ckn-secure">${lockSvg()} Payments processed by Razorpay · UPI, cards, net-banking &amp; wallets</div>
            <div id="ckn-mode-badge"></div>
          </div>

          <!-- STEP 3: done -->
          <div id="ckn-step3" class="ckn-hide">
            <div class="ckn-done">
              <div class="ckn-tick">✓</div>
              <h5>Payment successful!</h5>
              <p id="ckn-done-msg"></p>
              <div class="ref" id="ckn-done-ref"></div>
              <button class="ckn-btn ckn-btn-primary" style="margin-top:20px" data-ckn-close>Done</button>
            </div>
          </div>

        </div>
      </div>`;
    document.body.appendChild(el);

    // wiring
    el.addEventListener("click", (e) => { if (e.target === el) close(); });
    el.querySelectorAll("[data-ckn-close]").forEach(b => b.addEventListener("click", close));
    $("[data-ckn-next]", el).addEventListener("click", goToPayment);
    $("[data-ckn-back]", el).addEventListener("click", () => showStep(1));
    $("[data-ckn-pay]", el).addEventListener("click", pay);
    el.querySelectorAll("[data-ckn-counsel]").forEach(a => a.addEventListener("click", () => { window.location.href = CONFIG.COUNSELLING_URL; }));
  }

  function lockSvg() {
    return `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>`;
  }

  /* ------------------------------- state --------------------------------- */
  let data = {};

  function open(opts) {
    injectStyles(); buildModal();
    opts = opts || {};
    data = {};
    // reset fields
    ["ckn-name","ckn-email","ckn-phone","ckn-city","ckn-amount","ckn-ref"].forEach(id => { const f = document.getElementById(id); if (f) f.value = ""; });
    document.querySelectorAll("#ckn-scrim .ckn-field").forEach(f => f.classList.remove("bad"));
    if (opts.course) {
      const sel = $("#ckn-course");
      const match = [...sel.options].find(o => o.value.toLowerCase() === String(opts.course).toLowerCase());
      if (match) sel.value = match.value;
      else { const o = document.createElement("option"); o.textContent = opts.course; sel.insertBefore(o, sel.firstChild); sel.value = opts.course; }
    }
    showStep(1);
    $("#ckn-scrim").classList.add("open");
    document.body.style.overflow = "hidden";
    setTimeout(() => { const n = $("#ckn-name"); if (n) n.focus(); }, 60);
  }

  function close() {
    const s = $("#ckn-scrim");
    if (s) s.classList.remove("open");
    document.body.style.overflow = "";
  }

  function showStep(n) {
    [1,2,3].forEach(i => $("#ckn-step" + i).classList.toggle("ckn-hide", i !== n));
    document.querySelectorAll("#ckn-scrim .ckn-steps span").forEach(s => s.classList.toggle("on", +s.dataset.s <= n));
    const sub = $("#ckn-sub");
    sub.textContent = n === 1 ? "A few details, then secure payment."
                    : n === 2 ? "Confirm the fee agreed with your counsellor."
                    : "You're enrolled - see you in class.";
  }

  /* ---------------------------- validation ------------------------------- */
  function mark(id, ok) { document.getElementById(id).closest(".ckn-field").classList.toggle("bad", !ok); return ok; }

  function goToPayment() {
    const name = $("#ckn-name").value.trim();
    const email = $("#ckn-email").value.trim();
    const phone = $("#ckn-phone").value.trim();
    const okName = mark("ckn-name", name.length >= 2);
    const okEmail = mark("ckn-email", /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email));
    const okPhone = mark("ckn-phone", /^\d{7,15}$/.test(phone.replace(/\D/g, "")));
    if (!(okName && okEmail && okPhone)) return;

    data.name = name; data.email = email;
    data.cc = $("#ckn-cc").value.replace(/[^\d+]/g, "");
    data.phone = phone.replace(/\D/g, "");
    data.contact = data.cc + data.phone;
    data.course = $("#ckn-course").value;
    data.city = $("#ckn-city").value.trim();

    $("#ckn-summary").innerHTML =
      `<div class="r"><span>Name</span><span>${esc(data.name)}</span></div>` +
      `<div class="r"><span>Course</span><span>${esc(data.course)}</span></div>` +
      `<div class="r"><span>Mobile</span><span>${esc(data.contact)}</span></div>` +
      `<div class="r"><span>Email</span><span>${esc(data.email)}</span></div>`;

    // mode hint badge
    const badge = $("#ckn-mode-badge");
    badge.innerHTML = CONFIG.MODE === "DEMO"
      ? `<div style="text-align:center"><span class="ckn-badge">Demo mode - no real charge</span></div>` : "";
    showStep(2);
    setTimeout(() => $("#ckn-amount").focus(), 60);
  }

  /* ------------------------------ payment -------------------------------- */
  async function pay() {
    const amtRaw = $("#ckn-amount").value.trim();
    const amount = Math.round(parseFloat(amtRaw));
    if (!mark("ckn-amount", amount >= CONFIG.MIN_AMOUNT)) return;
    data.amount = amount;                       // rupees
    data.paise = amount * 100;                  // Razorpay works in paise
    data.ref = $("#ckn-ref").value.trim() || genRef();

    const btn = $("[data-ckn-pay]");
    setBtnBusy(btn, true);

    try {
      if (CONFIG.MODE === "DEMO") { await demoPay(); }
      else { await razorpayPay(); }             // CLIENT or SERVER
    } catch (err) {
      console.error("[CokonetEnroll]", err);
      alert("Sorry, we couldn't start the payment. Please try again, or call " + CONFIG.SUPPORT_PHONE + ".");
    } finally {
      setBtnBusy(btn, false);
    }
  }

  function setBtnBusy(btn, busy) {
    btn.disabled = busy;
    btn.querySelector(".lbl") && (btn.querySelector(".lbl").style.display = busy ? "none" : "");
    let sp = btn.querySelector(".ckn-spin");
    if (busy && !sp) { sp = document.createElement("span"); sp.className = "ckn-spin"; btn.appendChild(sp); }
    if (!busy && sp) sp.remove();
  }

  // ---- DEMO: no keys, no backend, simulate a Razorpay success ----
  function demoPay() {
    return new Promise(res => setTimeout(() => {
      succeed({ payment_id: "pay_demo_" + rand(14), order_id: "order_demo_" + rand(14), simulated: true });
      res();
    }, 1300));
  }

  // ---- CLIENT / SERVER: real Razorpay overlay (UPI QR, cards, etc.) ----
  async function razorpayPay() {
    if (!CONFIG.KEY_ID) throw new Error("CONFIG.KEY_ID is not set. Add your Razorpay key_id for CLIENT/SERVER mode.");
    await loadRazorpay();

    let order = null;
    if (CONFIG.MODE === "SERVER") {
      // 1) create the enrolment record + order on the backend (secret key lives there)
      const r = await fetch(CONFIG.API_BASE + "/api/orders", {
        method: "POST", headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          amount: data.paise, currency: CONFIG.CURRENCY,
          enrolment: { name: data.name, email: data.email, contact: data.contact,
                       course: data.course, city: data.city, reference: data.ref }
        })
      });
      if (!r.ok) throw new Error("Order creation failed (" + r.status + ")");
      order = await r.json();                     // { id, amount, currency }
    }

    const options = {
      key: CONFIG.KEY_ID,
      name: CONFIG.BUSINESS_NAME,
      description: data.course + " enrolment",
      currency: CONFIG.CURRENCY,
      amount: order ? order.amount : data.paise,  // paise
      order_id: order ? order.id : undefined,     // SERVER mode passes the order (secure)
      image: CONFIG.LOGO || undefined,
      prefill: { name: data.name, email: data.email, contact: data.contact },
      notes: { course: data.course, reference: data.ref, city: data.city },
      theme: { color: CONFIG.THEME_COLOR },
      handler: async function (resp) {
        // resp: razorpay_payment_id, razorpay_order_id, razorpay_signature
        if (CONFIG.MODE === "SERVER") {
          try {
            const v = await fetch(CONFIG.API_BASE + "/api/verify", {
              method: "POST", headers: { "Content-Type": "application/json" },
              body: JSON.stringify(resp)
            });
            const out = await v.json();
            if (!out.valid) { alert("Payment could not be verified. If money was debited, it will be refunded. Ref: " + data.ref); return; }
          } catch (e) { console.error(e); }
        }
        succeed({ payment_id: resp.razorpay_payment_id, order_id: resp.razorpay_order_id });
      },
      modal: { ondismiss: function () { setBtnBusy($("[data-ckn-pay]"), false); } }
    };
    const rzp = new window.Razorpay(options);
    rzp.on("payment.failed", function (r) {
      alert("Payment failed: " + (r.error && r.error.description ? r.error.description : "please try again."));
    });
    rzp.open();
  }

  function loadRazorpay() {
    return new Promise((res, rej) => {
      if (window.Razorpay) return res();
      const s = document.createElement("script");
      s.src = RZP_SDK; s.onload = res; s.onerror = () => rej(new Error("Could not load Razorpay SDK"));
      document.head.appendChild(s);
    });
  }

  function succeed(info) {
    data.payment = info;
    $("#ckn-done-msg").innerHTML =
      `Thank you, <b>${esc(data.name.split(" ")[0])}</b>. Your seat in <b>${esc(data.course)}</b> is confirmed. ` +
      `A receipt and onboarding details are on their way to <b>${esc(data.email)}</b>` +
      (info.simulated ? ` <br><span style="font-size:.76rem;color:#7C8AA8">(demo - no real payment was made)</span>` : ``) + `.`;
    $("#ckn-done-ref").textContent = "Ref " + data.ref;
    showStep(3);
    // Fire an event so analytics / CRM hooks can listen
    document.dispatchEvent(new CustomEvent("cokonet:enrolled", { detail: { ...data } }));
  }

  /* ------------------------------- utils --------------------------------- */
  function esc(s){ return String(s == null ? "" : s).replace(/[&<>"']/g, c => ({ "&":"&amp;","<":"&lt;",">":"&gt;","\"":"&quot;","'":"&#39;" }[c])); }
  function rand(n){ let s=""; while(s.length<n) s+=Math.random().toString(36).slice(2); return s.slice(0,n); }
  function genRef(){ const d=new Date(); return "CKN-"+d.getFullYear()+"-"+rand(6).toUpperCase(); }

  /* ---------------------------- auto-binding ----------------------------- */
  function bind() {
    document.addEventListener("click", (e) => {
      const t = e.target.closest("[data-enroll]");
      if (!t) return;
      e.preventDefault();
      open({ course: t.getAttribute("data-course") || "" });
    });
    document.addEventListener("keydown", (e) => { if (e.key === "Escape") close(); });
  }

  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", bind);
  else bind();

  /* ------------------------------ public API ----------------------------- */
  window.CokonetEnroll = { open, close, config: CONFIG };
})();
