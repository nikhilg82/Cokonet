<?php
require __DIR__.'/includes/config.php';
$page = [
  'title' => 'Free Live Masterclass | 90 Minutes, Real Content | Cokonet Academy',
  'description' => 'A free 90-minute live masterclass every month, taught by working professionals from SAP Labs, Microsoft, Allianz and IBM. Register free and judge our teaching first.',
  'path' => '/masterclass',
  'nav' => '',
  'css' => '/assets/css/pages/masterclass.css',
  'course_css' => false,
  'jsonld' => [
  '{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "All courses + SAP FICO · MM · ABAP · SuccessFactors Data Analytics · Data Science and AI AI and Generative AI Full Stack · Python · Testing · Salesforce DevOps on AWS · Cyber Security Finance Package · Advanced Excel Digital Marketing · Design · UI UX · Video Browse all 78 courses → Placements + PlacementsAlumni storiesInternships (FYUGP)Hire from us Internships Enterprises More + Free course videosFree masterclassScholarshipRefer and earnAbout CokonetCareersJoin as trainerContact us Free courses Free counselling Chat on WhatsApp ● Free · Live · 90 minutes Sit in on the kind of session you would normally pay for. Every month, working professionals from SAP Labs, Microsoft, Allianz and IBM teach a free 90-minute live masterclass. Real content, real Q&A, no recording-and-run. Register free and judge our teaching before you spend a rupee. Register free →See how it works 90 minOf actual content0Cost, ever412Registered this month4.8★Attendee rating Upcoming Three sessions you can register for now. Live on Zoom, Saturday mornings IST. Seats capped so Q&A stays real. [ session cover: S/4HANA ]SAP · Sat, May 16SAP S/4HANA: From Classic ECC to Modern FinanceRajan Pillai (SAP Labs) walks the ECC-to-S/4HANA shift finance teams are living through, with a live system demo.S/4HANALive demoQ&A[ session cover: AI at work ]Data + AI · Sat, May 23AI for Working Professionals: Beyond ChatGPTWhat AI actually changes in analyst and manager workflows, shown on real tasks, not slideware.GenAIWorkflowsLive[ session cover: career map ]Careers · Sat, May 30Switching to Tech After 30: The Honest MapWhich tracks reward which backgrounds, real salary math and the mistakes that cost switchers a year.Career switchSalariesAMA[ counsellor photo ]Seats cap at 200 per session.Registration takes 30 seconds. Joining link lands on WhatsApp.Register free How it works 90 minutes of actual content. No hour-long sales pitch wearing a webinar costume. The structure is fixed and public. 1Register in 30 secondsName and WhatsApp number. The joining link and a calendar invite arrive instantly.270 minutes of teachingA working professional teaches one real topic with live demos, the same way our paid batches run.320 minutes of open Q&AAsk anything, including about careers and courses. Blunt answers, no scripts.4Optional next stepIf you want the full course, a counsellor call is offered. If not, come back next month anyway. Who teaches Working professionals. Not full-time educators. The same trainer bench that runs our paid batches: practitioners from SAP Labs, Microsoft, Allianz and IBM lineages who teach what they did at work this week. Practitioners onlyEvery speaker currently works in the domain they teach. War stories included.The paid-batch standardMasterclasses run at the same depth as course sessions, deliberately.Real Q&ARecording-and-run is banned. Twenty minutes of open questions, every time.Judge us firstThis is our audition for your fees. That is the entire business logic. FAQ Questions before you register. Short answers, honestly. Is it really free, or is there a catch?", "acceptedAnswer": {"@type": "Answer", "text": "Really free. The masterclass is how we prove teaching quality before you consider a paid course. One optional counselling offer at the end, and that is the entire pitch."}}, {"@type": "Question", "name": "Will I get a recording?", "acceptedAnswer": {"@type": "Answer", "text": "Registered attendees get a 7-day replay link. Live attendance is better for the Q&A, which is not fully published."}}, {"@type": "Question", "name": "Do I need any background to attend?", "acceptedAnswer": {"@type": "Answer", "text": "Sessions are pitched at motivated beginners and adjacent professionals. Prereqs, when any, are stated on the session card."}}, {"@type": "Question", "name": "Is it a sales webinar in disguise?", "acceptedAnswer": {"@type": "Answer", "text": "No, and the fixed 70/20 structure exists to keep us honest. If a session ever feels like a pitch, tell us and we will make it right."}}, {"@type": "Question", "name": "How do I join on the day?", "acceptedAnswer": {"@type": "Answer", "text": "A Zoom link arrives on WhatsApp and email the evening before, with a reminder 30 minutes prior."}}, {"@type": "Question", "name": "Can I ask career questions, not just topic questions?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. The Q&A regularly turns into blunt career counselling, which attendees tell us is half the value."}}]}'
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
<span class="eyebrow">● Free · Live · 90 minutes</span>
<h1>Sit in on the kind of session <span class="serif">you would normally pay for.</span></h1>
<p>Every month, working professionals from SAP Labs, Microsoft, Allianz and IBM teach a free 90-minute live masterclass. Real content, real Q&amp;A, no recording-and-run. Register free and judge our teaching before you spend a rupee.</p>
<div style="display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="#" onclick="openModal(event)">Register free <span class="arr">→</span></a><a class="btn btn-navy" href="#how">See how it works</a></div>
<div class="a-stats"><div><b>90 <em>min</em></b><span>Of actual content</span></div><div><b>0</b><span>Cost, ever</span></div><div><b>412</b><span>Registered this month</span></div><div><b>4.8★</b><span>Attendee rating</span></div></div>
</div>
</div>
</section><section class="sec" id="sessions">
<div class="wrap">
<span class="eyebrow reveal">Upcoming</span>
<h2 class="st reveal">Three sessions you can <span class="serif">register for now.</span></h2>
<p class="lede reveal">Live on Zoom, Saturday mornings IST. Seats capped so Q&amp;A stays real.</p>
<div class="cap-grid"><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#173a86,#26417f 60%,#5b7bb5)">[ session cover: S/4HANA ]</div><span class="k">SAP · Sat, May 16</span><b>SAP S/4HANA: From Classic ECC to Modern Finance</b><p>Rajan Pillai (SAP Labs) walks the ECC-to-S/4HANA shift finance teams are living through, with a live system demo.</p><div class="chips"><span>S/4HANA</span><span>Live demo</span><span>Q&amp;A</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#26417f,#0a3a9e)">[ session cover: AI at work ]</div><span class="k">Data + AI · Sat, May 23</span><b>AI for Working Professionals: Beyond ChatGPT</b><p>What AI actually changes in analyst and manager workflows, shown on real tasks, not slideware.</p><div class="chips"><span>GenAI</span><span>Workflows</span><span>Live</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#8a6a4d,#c99a63)">[ session cover: career map ]</div><span class="k">Careers · Sat, May 30</span><b>Switching to Tech After 30: The Honest Map</b><p>Which tracks reward which backgrounds, real salary math and the mistakes that cost switchers a year.</p><div class="chips"><span>Career switch</span><span>Salaries</span><span>AMA</span></div></div></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Seats cap at 200 per session.</b><span>Registration takes 30 seconds. Joining link lands on WhatsApp.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Register free</a></div>
</div>
</section><section class="sec" id="how" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">How it works</span>
<h2 class="st reveal">90 minutes of <span class="serif">actual content.</span></h2>
<p class="lede reveal">No hour-long sales pitch wearing a webinar costume. The structure is fixed and public.</p>
<div class="steps"><div class="step reveal"><span class="n">1</span><h4>Register in 30 seconds</h4><p>Name and WhatsApp number. The joining link and a calendar invite arrive instantly.</p></div><div class="step reveal"><span class="n">2</span><h4>70 minutes of teaching</h4><p>A working professional teaches one real topic with live demos, the same way our paid batches run.</p></div><div class="step reveal"><span class="n">3</span><h4>20 minutes of open Q&amp;A</h4><p>Ask anything, including about careers and courses. Blunt answers, no scripts.</p></div><div class="step reveal"><span class="n">4</span><h4>Optional next step</h4><p>If you want the full course, a counsellor call is offered. If not, come back next month anyway.</p></div></div>
</div>
</section><section class="sec" id="speakers">
<div class="wrap">
<span class="eyebrow reveal">Who teaches</span>
<h2 class="st reveal">Working professionals. Not <span class="serif">full-time educators.</span></h2>
<p class="lede reveal">The same trainer bench that runs our paid batches: practitioners from SAP Labs, Microsoft, Allianz and IBM lineages who teach what they did at work this week.</p>
<div class="diff-grid"><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-cap"></use></svg></span><b>Practitioners only</b><p>Every speaker currently works in the domain they teach. War stories included.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-chart"></use></svg></span><b>The paid-batch standard</b><p>Masterclasses run at the same depth as course sessions, deliberately.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-globe"></use></svg></span><b>Real Q&amp;A</b><p>Recording-and-run is banned. Twenty minutes of open questions, every time.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-shield"></use></svg></span><b>Judge us first</b><p>This is our audition for your fees. That is the entire business logic.</p></div></div>
</div>
</section><section class="sec" id="faq" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">FAQ</span>
<h2 class="st reveal">Questions before you <span class="serif">register.</span></h2>
<p class="lede reveal">Short answers, honestly.</p>
<div class="acc reveal" style="max-width:860px"><details open=""><summary>Is it really free, or is there a catch? <span class="plus">+</span></summary><div class="ab">Really free. The masterclass is how we prove teaching quality before you consider a paid course. One optional counselling offer at the end, and that is the entire pitch.</div></details><details><summary>Will I get a recording? <span class="plus">+</span></summary><div class="ab">Registered attendees get a 7-day replay link. Live attendance is better for the Q&amp;A, which is not fully published.</div></details><details><summary>Do I need any background to attend? <span class="plus">+</span></summary><div class="ab">Sessions are pitched at motivated beginners and adjacent professionals. Prereqs, when any, are stated on the session card.</div></details><details><summary>Is it a sales webinar in disguise? <span class="plus">+</span></summary><div class="ab">No, and the fixed 70/20 structure exists to keep us honest. If a session ever feels like a pitch, tell us and we will make it right.</div></details><details><summary>How do I join on the day? <span class="plus">+</span></summary><div class="ab">A Zoom link arrives on WhatsApp and email the evening before, with a reminder 30 minutes prior.</div></details><details><summary>Can I ask career questions, not just topic questions? <span class="plus">+</span></summary><div class="ab">Yes. The Q&amp;A regularly turns into blunt career counselling, which attendees tell us is half the value.</div></details></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Don't miss Saturday, May 16.</b><span>SAP S/4HANA with Rajan Pillai. 412 already registered.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Save my seat</a></div>
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
