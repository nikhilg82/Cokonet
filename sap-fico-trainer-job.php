<?php
require __DIR__.'/includes/config.php';
$page = [
  'title' => 'SAP FICO Trainer Role | Trivandrum / Remote | Cokonet Academy',
  'description' => 'Open role: SAP FICO trainer with 5+ years of implementation experience. Evening and weekend batches on live S/4HANA, Trivandrum or remote, per-cohort pay.',
  'path' => '/sap-fico-trainer-job',
  'nav' => '',
  'css' => '/assets/css/pages/sap-fico-trainer-job.css',
  'course_css' => false,
  'jsonld' => [
  '{"@context": "https://schema.org", "@type": "JobPosting", "title": "SAP FICO Trainer", "datePosted": "2026-07-01", "validThrough": "2026-09-30", "employmentType": "FULL_TIME", "hiringOrganization": {"@type": "Organization", "name": "Cokonet Academy", "sameAs": "https://www.cokonet.com"}, "jobLocation": {"@type": "Place", "address": {"@type": "PostalAddress", "addressLocality": "Thiruvananthapuram", "addressRegion": "KL", "addressCountry": "IN"}}, "description": "Open role: SAP FICO trainer with 5+ years of implementation experience. Evening and weekend batches on live S/4HANA, Trivandrum or remote, per-cohort pay."}'
],
  'page_js' => 'window.CKN_MODAL_FINE_OK=\'One-to-one career mapping · Verified by OTP · Never sold or shared.\';
// sticky subnav scrollspy
(function(){
  var links=document.querySelectorAll(\'.sn-links a\');
  var ids=[].map.call(links,function(a){return a.getAttribute(\'href\').slice(1)});
  function spy(){
    var y=window.scrollY+170, cur=ids[0];
    ids.forEach(function(id){var el=document.getElementById(id); if(el && el.offsetTop<=y) cur=id;});
    links.forEach(function(a){a.classList.toggle(\'on\', a.getAttribute(\'href\')===\'#\'+cur);});
  }
  window.addEventListener(\'scroll\', spy, {passive:true}); spy();
})();
// market switcher
(function(){
  var data={
    in:[\'Certified + portfolio\',\'Rs 4-7 L\',\'Rs 8-12 L\',\'Rs 13-20 L\',\'Rs 20-30 L\',\'Rs 30-45 L\'],
    us:[\'Certified + portfolio\',\'$70-90K\',\'$95-120K\',\'$120-150K\',\'$150-190K\',\'$190-230K\'],
    uk:[\'Certified + portfolio\',\'£35-45K\',\'£50-65K\',\'£65-85K\',\'£85-110K\',\'£110-140K\'],
    ae:[\'Certified + portfolio\',\'AED 120-180K\',\'AED 200-280K\',\'AED 280-380K\',\'AED 380-520K\',\'AED 520-700K\'],
    au:[\'Certified + portfolio\',\'A$70-90K\',\'A$95-120K\',\'A$125-160K\',\'A$160-200K\',\'A$200-250K\']
  };
  var names={in:\'India\',us:\'US\',uk:\'UK\',ae:\'UAE\',au:\'Australia\'};
  document.querySelectorAll(\'.mkt\').forEach(function(btn){
    btn.addEventListener(\'click\',function(){
      document.querySelectorAll(\'.mkt\').forEach(function(b){b.classList.remove(\'on\')});
      btn.classList.add(\'on\');
      var m=btn.dataset.mkt;
      document.getElementById(\'mktName\').textContent=names[m];
      document.querySelectorAll(\'.ctc\').forEach(function(c){c.textContent=data[m][+c.dataset.i]});
    });
  });
})();
// click-to-load YouTube Shorts
document.querySelectorAll(\'.short\').forEach(function(card){
  card.addEventListener(\'click\', function(){
    var vid = card.dataset.vid;
    if(!vid || vid.indexOf(\'YOUTUBE_ID\') === 0) return;
    var t = card.querySelector(\'.thumb\');
    var f = document.createElement(\'iframe\');
    f.src = \'https://www.youtube.com/embed/\' + vid + \'?autoplay=1&playsinline=1\';
    f.allow = \'autoplay; encrypted-media; picture-in-picture\';
    f.allowFullscreen = true;
    t.appendChild(f);
  });
});

// curriculum tabs
document.querySelectorAll(\'.ctab\').forEach(function(t){
  t.addEventListener(\'click\', function(){
    document.querySelectorAll(\'.ctab\').forEach(function(b){b.classList.remove(\'on\'); b.setAttribute(\'aria-selected\',\'false\');});
    document.querySelectorAll(\'.cpanel\').forEach(function(p){p.classList.remove(\'on\')});
    t.classList.add(\'on\'); t.setAttribute(\'aria-selected\',\'true\');
    document.getElementById(t.dataset.tab).classList.add(\'on\');
  });
});

// success story deck: fanned hand, front card flies off every 5s
(function(){
  var cards=[].slice.call(document.querySelectorAll(\'#deck .scard\'));
  if(!cards.length) return;
  var dotsWrap=document.getElementById(\'deckDots\');
  cards.forEach(function(_,i){var d=document.createElement(\'span\'); if(i===0)d.className=\'on\';
    d.addEventListener(\'click\',function(){cur=i; paint(); restart();}); dotsWrap.appendChild(d);});
  var dots=[].slice.call(dotsWrap.children), cur=0, timer=null, busy=false;
  function paint(){
    cards.forEach(function(c,i){
      c.className=\'scard f\'+((i-cur+cards.length)%cards.length);
    });
    dots.forEach(function(d,i){d.classList.toggle(\'on\',i===cur)});
  }
  function tick(){
    if(busy) return; busy=true;
    var front=cards[cur];
    front.classList.add(\'fly\');
    setTimeout(function(){
      cur=(cur+1)%cards.length; paint(); busy=false;
    },420);
  }
  function restart(){clearInterval(timer); if(!matchMedia(\'(prefers-reduced-motion: reduce)\').matches) timer=setInterval(tick,2000);}
  var deck=document.getElementById(\'deck\');
  deck.addEventListener(\'mouseenter\',function(){clearInterval(timer)});
  deck.addEventListener(\'mouseleave\',restart);
  paint(); restart();
})();',
];
require __DIR__.'/includes/head.php';
require __DIR__.'/includes/header.php';
?>
<!-- Mobile menu -->
<nav aria-label="Mobile" class="mob-menu" id="mobMenu">
<!-- mob theme -->
<div class="mob-top">
<svg style="height:26px;filter:brightness(0) invert(1)" viewbox="0 0 135.47 41.47"><use href="#ck-logo-blue"></use></svg>
<button aria-label="Close menu" class="mob-x" onclick="closeMob()">✕</button>
</div>
<div class="mob-body">
<details open="">
<summary>All courses <i>+</i></summary>
<div class="mob-sub">
<a href="/courses/sap-fico">SAP FICO · MM · ABAP · SuccessFactors</a>
<a href="/courses/data-analytics">Data Analytics · Data Science and AI</a>
<a href="/courses/ai-generative-ai">AI and Generative AI</a>
<a href="/courses/full-stack-web-development">Full Stack · Python · Testing · Salesforce</a>
<a href="/courses/cloud-devops">DevOps on AWS · Cyber Security</a>
<a href="/courses/accounting-finance">Finance Package · Advanced Excel</a>
<a href="/courses/digital-marketing-ai">Digital Marketing · Design · UI UX · Video</a>
<a href="/#courses" onclick="closeMob()" style="color:var(--orange);font-weight:800">Browse all 78 courses →</a>
</div>
</details>
<details>
<summary>Placements <i>+</i></summary>
<div class="mob-sub"><a href="/placements">Placements</a><a href="/alumni">Alumni stories</a><a href="/internships">Internships (FYUGP)</a><a href="/hire-from-us">Hire from us</a></div>
</details>
<a class="mob-link" href="/internships">Internships</a>
<a class="mob-link" href="/corporate-training">Enterprises</a>
<details>
<summary>More <i>+</i></summary>
<div class="mob-sub"><a href="https://www.youtube.com/channel/UCJ0NHVhOkDZH9vPdVrjmLWQ" target="_blank" rel="noopener">Free course videos</a><a href="/masterclass">Free masterclass</a><a href="/scholarships">Scholarship</a><a href="/refer-and-earn">Refer and earn</a><a href="/about">About Cokonet</a><a href="/careers">Careers</a><a href="/join-as-trainer">Join as trainer</a><a href="/contact">Contact us</a></div>
</details>
<a class="mob-link" href="/masterclass">Free courses</a>
</div>
<div class="mob-cta">
<a class="btn btn-primary" href="#" onclick="closeMob();openModal(event)">Free counselling</a>
<a class="wa" href="https://wa.me/918075400500" target="_blank" rel="noopener">Chat on WhatsApp</a>
</div>
</nav>
<section class="a-hero">
<div class="wrap inner" style="grid-template-columns:minmax(0,860px)">
<div class="reveal">
<span class="eyebrow">● Open role · Trivandrum / Remote · Full-time or part-time</span>
<h1>SAP Trainer, <span class="serif">Finance and Controlling (FICO).</span></h1>
<p>Five-plus years of SAP FICO implementation on real enterprise projects, not training experience, actual configuration work. Teach evening and weekend batches from Trivandrum or fully remote, on a live S/4HANA system, to 25-capped rooms of screened adults. Apply by 20 June.</p>
<div style="display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="#" onclick="openModal(event)">Apply for this role <span class="arr">→</span></a><a class="btn btn-navy" href="/join-as-trainer">All trainer info</a></div>
<div class="a-stats"><div><b>5+ <em>yrs</em></b><span>FICO implementation</span></div><div><b>25</b><span>Max learners per batch</span></div><div><b>2</b><span>Formats: live or recorded</span></div><div><b>20 Jun</b><span>Application deadline</span></div></div>
</div>
</div>
</section><section class="sec" id="work">
<div class="wrap">
<span class="eyebrow reveal">The role</span>
<h2 class="st reveal">What you will spend your <span class="serif">time doing.</span></h2>
<p class="lede reveal">Teaching is the headline. Here is the honest breakdown.</p>
<div class="steps"><div class="step reveal"><span class="n">1</span><h4>Teach the FICO batch</h4><p>Two to three evening or weekend sessions weekly on our live S/4HANA system: GL, AP/AR, asset accounting, controlling and the FI-MM/SD integration learners get grilled on.</p></div><div class="step reveal"><span class="n">2</span><h4>Bring your projects into the room</h4><p>War stories, real configuration decisions and cutover scars are the syllabus behind the syllabus.</p></div><div class="step reveal"><span class="n">3</span><h4>Review capstones</h4><p>Grade the three capstone projects against implementation standards, with written feedback.</p></div><div class="step reveal"><span class="n">4</span><h4>Run certification prep</h4><p>Steer the C_TS4FI mock-exam sprints; a full-time mentor handles between-session doubts for you.</p></div></div>
</div>
</section><section class="sec" id="bar" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">Requirements</span>
<h2 class="st reveal">What we are <span class="serif">looking for.</span></h2>
<p class="lede reveal">Non-negotiables first, style second.</p>
<div class="diff-grid"><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-cap"></use></svg></span><b>5+ years of FICO implementation</b><p>Real enterprise configuration: end-to-end or support-plus-enhancement cycles. Training-only backgrounds do not clear this bar.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-chart"></use></svg></span><b>S/4HANA fluency</b><p>Current Universal Journal era finance, not ECC memories alone. Migration experience is a strong plus.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-globe"></use></svg></span><b>Explains without jargon armour</b><p>You can teach OBYC to a B.Com graduate. We interview exactly this, live.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-shield"></use></svg></span><b>Evenings or weekends available</b><p>Sessions sit outside office hours; most of our 200+ trainers keep their day jobs.</p></div></div>
</div>
</section><section class="sec" id="worth">
<div class="wrap">
<span class="eyebrow reveal">The offer</span>
<h2 class="st reveal">What makes this role <span class="serif">worth your time.</span></h2>
<p class="lede reveal">Compensation and logistics, stated plainly.</p>
<div class="diff-grid"><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-cap"></use></svg></span><b>Per-cohort pay, senior rates</b><p>Contracted in writing per batch, at rates that respect a 5-plus-year consultant's evening.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-chart"></use></svg></span><b>Trivandrum office or fully remote</b><p>In Trivandrum: office or home. Outside: fully remote with a working SAP session setup on us.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-globe"></use></svg></span><b>Recorded-track royalties</b><p>Record the course once with studio support and earn on every enrolment, ongoing.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-shield"></use></svg></span><b>A machine behind you</b><p>Curriculum frames, batch mentor, screening, logistics and payments handled. You teach; we run everything else.</p></div></div><div class="rec-row reveal" style="grid-template-columns:repeat(4,1fr);margin-top:36px"><div><b>90 <em>days</em></b><span>Structured first-quarter plan</span></div><div><b>25</b><span>Learner cap, always</span></div><div><b>2-3</b><span>Sessions weekly</span></div><div><b>₹5,000</b><span>Referral bonus if you refer a trainer</span></div></div>
</div>
</section><section class="sec" id="apply" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">Apply</span>
<h2 class="st reveal">How to <span class="serif">apply.</span></h2>
<p class="lede reveal">Ten minutes now; teaching next month if we match.</p>
<div class="steps"><div class="step reveal"><span class="n">1</span><h4>Send the short form</h4><p>LinkedIn plus three lines on your FICO project history. No lesson plans at this stage.</p></div><div class="step reveal"><span class="n">2</span><h4>Working-session interview</h4><p>Walk us through one FICO topic as you would teach it. Clarity over polish.</p></div><div class="step reveal"><span class="n">3</span><h4>Paid demo session</h4><p>One real session with a live batch, paid regardless of outcome.</p></div><div class="step reveal"><span class="n">4</span><h4>First cohort within 4 weeks</h4><p>Contract, calendar, mentor assigned, and your 90-day plan agreed on paper.</p></div></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Apply by 20 June.</b><span>Trivandrum / Bengaluru / Remote. The form takes ten minutes.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Apply for this role</a></div>
</div>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>
<div class="scrim" id="scrim" onclick="if(event.target===this)closeModal()">
<div aria-labelledby="mTitle" aria-modal="true" class="modal" role="dialog">
<div class="modal-top"><span class="c-face">[ counsellor photo ]</span><div>
<button aria-label="Close" class="x" onclick="closeModal()">✕</button>
<h4 id="mTitle">Book Free Career Counselling</h4>
<p>A counsellor maps your background to SAP FICO, or a better-fit course. If we're not the fit, they'll say so. Verified by OTP. Never sold or shared.</p></div>
</div>
<div class="modal-body">
<div id="mForm">
<div class="field"><label for="mn">Your name *</label><input id="mn" placeholder="Your name" type="text"/></div>
<div class="field"><label for="mp">Mobile *</label>
<div class="phone-row">
<select aria-label="Country code" id="mcc"><option>🇮🇳 +91</option><option>🇦🇪 +971</option><option>🇸🇦 +966</option><option>🇶🇦 +974</option><option>🇴🇲 +968</option><option>🇧🇭 +973</option><option>🇰🇼 +965</option><option>🇺🇸 +1</option><option>🇬🇧 +44</option><option>🇸🇬 +65</option><option>🇦🇺 +61</option><option>🇩🇪 +49</option><option>🇲🇾 +60</option><option>🇨🇦 +1</option><option>🇮🇪 +353</option><option>🇳🇿 +64</option><option>🌍 Other</option></select>
<input id="mp" placeholder="Mobile number" style="flex:1" type="tel"/>
<button class="btn btn-navy sm" id="otpBtn" onclick="sendOtp()" style="flex-shrink:0">Get OTP</button>
</div>
</div>
<div class="wa-check"><input checked="" id="waOtp" type="checkbox"/><label for="waOtp">Also text the OTP to my WhatsApp, in case my mobile is unreachable</label></div>
<div class="field otp-row" id="otpRow"><input aria-label="6-digit OTP" id="otp" inputmode="numeric" maxlength="6" placeholder="••••••" style="flex:1" type="text"/><button class="btn btn-primary sm" onclick="verifyOtp()" style="flex-shrink:0">Verify</button></div>
<div class="otp-note" id="otpNote"><span>OTP sent to your WhatsApp. <span class="timer" id="otpTimer">05:00</span></span><a onclick="sendOtp()">Resend</a></div>
<div class="verified" id="verified">✓ Mobile verified <a onclick="resetOtp()">Change</a></div>
<div class="field"><label for="mi">Course you're interested in</label>
<select id="mi"><option>SAP FICO (this course)</option><option>Another SAP module</option><option>Not sure, recommend for me</option><option>Download syllabus only</option><option>Alumni call request</option></select>
</div>
<button class="btn btn-primary" disabled="" id="mSubmit" onclick="submitLead()" style="width:100%">Book Free Counselling</button>
<p class="fine" id="mFine">Verify your number to continue. Your details stay private, verified by OTP and never sold or shared.</p>
</div>
<div class="m-success" id="mSuccess">
<div class="tick">✓</div>
<h5>You're all set!</h5>
<p>Thanks, our team will be in touch within 24 hours. Keep an eye on your inbox and WhatsApp.</p>
<button class="btn btn-navy sm" onclick="closeModal()" style="margin-top:18px">Done</button>
</div>
</div>
</div>
</div>
<?php require __DIR__.'/includes/scripts.php'; ?>
