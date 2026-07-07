<?php
require __DIR__.'/includes/config.php';
$page = [
  'title' => 'Join as a Trainer | Teach Evenings or Weekends | Cokonet Academy',
  'description' => 'Senior professionals with 8+ years of practice teach Cokonet batches live or recorded, evenings and weekends, paid per cohort or on royalties.',
  'path' => '/join-as-trainer',
  'nav' => '',
  'css' => '/assets/css/pages/join-as-trainer.css',
  'course_css' => false,
  'jsonld' => [
  '{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "All courses + SAP FICO · MM · ABAP · SuccessFactors Data Analytics · Data Science and AI AI and Generative AI Full Stack · Python · Testing · Salesforce DevOps on AWS · Cyber Security Finance Package · Advanced Excel Digital Marketing · Design · UI UX · Video Browse all 78 courses → Placements + PlacementsAlumni storiesInternships (FYUGP)Hire from us Internships Enterprises More + Free course videosFree masterclassScholarshipRefer and earnAbout CokonetCareersJoin as trainerContact us Free courses Free counselling Chat on WhatsApp ● Part-time · Evenings and weekends · Paid Teach what you do. Get paid for it. Senior professionals from companies you would recognise teach our evening and weekend batches, live or recorded. Eight-plus years in your domain is the bar; we handle everything else, from curriculum frames to classrooms to payments. Apply to teach →See open roles 200+Working pros teaching8+ yrsExperience bar2Formats: live or recorded25Max learners per batch Why teach Three reasons senior pros spend an evening with us. Money is one of them. It is rarely the one that keeps them. Share what 12 years taught youYour hard-won judgment becomes someone\'s career head start. Alumni messages prove it monthly.Your calendar, your callEvenings, weekends, or record-once: teaching fits around your job, never against it.Teach live, or record and earn ongoingLive batches pay per cohort; recorded tracks pay on enrolment, for as long as they run.A serious room25 capped, screened, motivated adults. No crowd control, no empty seats, no scripts. Formats Live or recorded. Pick what fits your week. Both formats carry the same quality bar and the same Cokonet support team behind you. [ live class frame ]Live batchesEvening or weekend cohortsTwo to three sessions a week for a course cycle. A full-time Cokonet mentor handles doubts between your sessions, admin handles everything else.Per-cohort payMentor support25 cap[ recording studio ]Recorded tracksRecord once, earn ongoingStudio-supported recording of your course. You update modules on your schedule; royalties follow enrolments.Royalty modelStudio supportOwn pace[ masterclass stage ]MasterclassesOne-off 90-minute sessionsA lighter first step: teach one free masterclass, feel the room, decide the rest afterwards.Zero commitmentPaid honorariumGreat trial[ counsellor photo ]Not sure which format suits you?A 15-minute call with our academic head settles it.Book the call The bar 8+ years in your domain. The rest is style. We screen for practice depth, not teaching certificates. Style is coachable; experience is not. 1Apply this weekA short form plus your LinkedIn. No lesson plans demanded at this stage.2A working-session interviewYou walk us through one topic as you would teach it. We are listening for clarity, not polish.3Curriculum fit and demoWe map your depth onto a course frame, and you run one paid demo session with real learners.4Teach next monthContract, calendar, and a mentor assigned to your batch. First cohort typically starts within four weeks. FAQ Trainer FAQs. What senior professionals ask before applying. Do I need prior teaching experience?", "acceptedAnswer": {"@type": "Answer", "text": "No. Eight-plus years of real practice in your domain is the requirement. We coach delivery style; we cannot coach experience."}}, {"@type": "Question", "name": "How much time does a live batch take?", "acceptedAnswer": {"@type": "Answer", "text": "Typically two to three evening or weekend sessions weekly for the course duration, plus light prep. A full-time mentor absorbs between-session doubts."}}, {"@type": "Question", "name": "How does payment work?", "acceptedAnswer": {"@type": "Answer", "text": "Live batches pay per cohort at rates set by course and seniority. Recorded tracks pay royalties on every enrolment. Both are contracted in writing before you start."}}, {"@type": "Question", "name": "Can I teach while employed full-time?", "acceptedAnswer": {"@type": "Answer", "text": "Most of our 200+ trainers do exactly that. Sessions sit outside office hours, and we never ask for exclusivity."}}, {"@type": "Question", "name": "What subjects are you currently hiring for?", "acceptedAnswer": {"@type": "Answer", "text": "SAP tracks, data and AI, cloud, cyber security, full stack, testing, Salesforce and the creative tracks. The open-roles page lists live requirements, including a SAP FICO trainer role now."}}, {"@type": "Question", "name": "What support do I get as a trainer?", "acceptedAnswer": {"@type": "Answer", "text": "Curriculum frames, a batch mentor, classroom or studio logistics, learner screening and all payments and paperwork. You bring the expertise; we run the machine."}}]}'
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
<span class="eyebrow">● Part-time · Evenings and weekends · Paid</span>
<h1>Teach what you do. <span class="serif">Get paid for it.</span></h1>
<p>Senior professionals from companies you would recognise teach our evening and weekend batches, live or recorded. Eight-plus years in your domain is the bar; we handle everything else, from curriculum frames to classrooms to payments.</p>
<div style="display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="#" onclick="openModal(event)">Apply to teach <span class="arr">→</span></a><a class="btn btn-navy" href="/sap-fico-trainer-job">See open roles</a></div>
<div class="a-stats"><div><b>200+</b><span>Working pros teaching</span></div><div><b>8+ <em>yrs</em></b><span>Experience bar</span></div><div><b>2</b><span>Formats: live or recorded</span></div><div><b>25</b><span>Max learners per batch</span></div></div>
</div>
</div>
</section><section class="sec" id="why">
<div class="wrap">
<span class="eyebrow reveal">Why teach</span>
<h2 class="st reveal">Three reasons senior pros spend <span class="serif">an evening with us.</span></h2>
<p class="lede reveal">Money is one of them. It is rarely the one that keeps them.</p>
<div class="diff-grid"><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-cap"></use></svg></span><b>Share what 12 years taught you</b><p>Your hard-won judgment becomes someone's career head start. Alumni messages prove it monthly.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-chart"></use></svg></span><b>Your calendar, your call</b><p>Evenings, weekends, or record-once: teaching fits around your job, never against it.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-globe"></use></svg></span><b>Teach live, or record and earn ongoing</b><p>Live batches pay per cohort; recorded tracks pay on enrolment, for as long as they run.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-shield"></use></svg></span><b>A serious room</b><p>25 capped, screened, motivated adults. No crowd control, no empty seats, no scripts.</p></div></div>
</div>
</section><section class="sec" id="formats" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">Formats</span>
<h2 class="st reveal">Live or recorded. Pick what <span class="serif">fits your week.</span></h2>
<p class="lede reveal">Both formats carry the same quality bar and the same Cokonet support team behind you.</p>
<div class="cap-grid"><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#173a86,#26417f 60%,#5b7bb5)">[ live class frame ]</div><span class="k">Live batches</span><b>Evening or weekend cohorts</b><p>Two to three sessions a week for a course cycle. A full-time Cokonet mentor handles doubts between your sessions, admin handles everything else.</p><div class="chips"><span>Per-cohort pay</span><span>Mentor support</span><span>25 cap</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#26417f,#0a3a9e)">[ recording studio ]</div><span class="k">Recorded tracks</span><b>Record once, earn ongoing</b><p>Studio-supported recording of your course. You update modules on your schedule; royalties follow enrolments.</p><div class="chips"><span>Royalty model</span><span>Studio support</span><span>Own pace</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#8a6a4d,#c99a63)">[ masterclass stage ]</div><span class="k">Masterclasses</span><b>One-off 90-minute sessions</b><p>A lighter first step: teach one free masterclass, feel the room, decide the rest afterwards.</p><div class="chips"><span>Zero commitment</span><span>Paid honorarium</span><span>Great trial</span></div></div></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Not sure which format suits you?</b><span>A 15-minute call with our academic head settles it.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Book the call</a></div>
</div>
</section><section class="sec" id="bar">
<div class="wrap">
<span class="eyebrow reveal">The bar</span>
<h2 class="st reveal">8+ years in your domain. <span class="serif">The rest is style.</span></h2>
<p class="lede reveal">We screen for practice depth, not teaching certificates. Style is coachable; experience is not.</p>
<div class="steps"><div class="step reveal"><span class="n">1</span><h4>Apply this week</h4><p>A short form plus your LinkedIn. No lesson plans demanded at this stage.</p></div><div class="step reveal"><span class="n">2</span><h4>A working-session interview</h4><p>You walk us through one topic as you would teach it. We are listening for clarity, not polish.</p></div><div class="step reveal"><span class="n">3</span><h4>Curriculum fit and demo</h4><p>We map your depth onto a course frame, and you run one paid demo session with real learners.</p></div><div class="step reveal"><span class="n">4</span><h4>Teach next month</h4><p>Contract, calendar, and a mentor assigned to your batch. First cohort typically starts within four weeks.</p></div></div>
</div>
</section><section class="sec" id="faq" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">FAQ</span>
<h2 class="st reveal">Trainer <span class="serif">FAQs.</span></h2>
<p class="lede reveal">What senior professionals ask before applying.</p>
<div class="acc reveal" style="max-width:860px"><details open=""><summary>Do I need prior teaching experience? <span class="plus">+</span></summary><div class="ab">No. Eight-plus years of real practice in your domain is the requirement. We coach delivery style; we cannot coach experience.</div></details><details><summary>How much time does a live batch take? <span class="plus">+</span></summary><div class="ab">Typically two to three evening or weekend sessions weekly for the course duration, plus light prep. A full-time mentor absorbs between-session doubts.</div></details><details><summary>How does payment work? <span class="plus">+</span></summary><div class="ab">Live batches pay per cohort at rates set by course and seniority. Recorded tracks pay royalties on every enrolment. Both are contracted in writing before you start.</div></details><details><summary>Can I teach while employed full-time? <span class="plus">+</span></summary><div class="ab">Most of our 200+ trainers do exactly that. Sessions sit outside office hours, and we never ask for exclusivity.</div></details><details><summary>What subjects are you currently hiring for? <span class="plus">+</span></summary><div class="ab">SAP tracks, data and AI, cloud, cyber security, full stack, testing, Salesforce and the creative tracks. The open-roles page lists live requirements, including a SAP FICO trainer role now.</div></details><details><summary>What support do I get as a trainer? <span class="plus">+</span></summary><div class="ab">Curriculum frames, a batch mentor, classroom or studio logistics, learner screening and all payments and paperwork. You bring the expertise; we run the machine.</div></details></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Teach what you do. Get paid for it.</b><span>The application takes ten minutes. Teaching starts next month.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Apply to teach</a></div>
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
