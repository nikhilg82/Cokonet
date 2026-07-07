<?php
require __DIR__.'/includes/config.php';
$page = [
  'title' => 'Scholarships | Up to 80% Off, Need-Based | Cokonet Academy',
  'description' => 'Four need-based scholarships up to 80% off: household need, women career-restart, defence families and accessibility. Humans review every application.',
  'path' => '/scholarships',
  'nav' => '',
  'css' => '/assets/css/pages/scholarships.css',
  'course_css' => false,
  'jsonld' => [
  '{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "All courses + SAP FICO · MM · ABAP · SuccessFactors Data Analytics · Data Science and AI AI and Generative AI Full Stack · Python · Testing · Salesforce DevOps on AWS · Cyber Security Finance Package · Advanced Excel Digital Marketing · Design · UI UX · Video Browse all 78 courses → Placements + PlacementsAlumni storiesInternships (FYUGP)Hire from us Internships Enterprises More + Free course videosFree masterclassScholarshipRefer and earnAbout CokonetCareersJoin as trainerContact us Free courses Free counselling Chat on WhatsApp ● Up to 80% off · 20 awarded in 2025 Do not let cost be the reason you do not apply. Four scholarships, all need-based and category-specific, none merit-based: your marksheet is not your story. Twenty were awarded last year, decided by humans in conversation, not by forms alone. Apply for a scholarship →See the four types 80%Maximum fee waiver20Awarded in 202570%Need-based approval rate0Sales pressure The scholarships Four scholarships. No merit-based ones. We fund circumstances, not toppers. Find the one that fits yours. MOST AWARDED Need-based Need-based Scholarship 60–80% off Household income assessed20-minute private conversationLargest share: 70% of awardsAny course, any batch Women returners Career Restart for Women 40–60% off Career break of 1+ yearsDocument-based, no interview15% of last year\'s awardsFlexible batch scheduling Defence families Defence Family Scholarship 25% off Serving or veteran householdsDocument-based, no interviewStacks with EMI plansAll courses eligible Differently-abled Accessibility Scholarship 50–70% off Self-declared, privately verified20-minute conversationAccessible batch supportAny course, any mode[ counsellor photo ]Not sure which fits?One counsellor call sorts it in ten minutes, privately.Ask privately How it works Four steps. No surprises. The whole process runs in under a week, and a decline is never a wall. 1Apply in five minutesPick your course, pick the scholarship, tell us your situation in your own words.2A human reads itEvery application is reviewed by a person. Need-based and accessibility include a 20-minute private conversation; women-restart and defence are document-only.3Decision within 5 daysA clear yes with your exact fee, or a no with the reason and an EMI alternative.4Join your batchScholarship fees lock for 60 days, so you can plan the start date that works. Our promises Four things we promise when you apply. Written down so you can hold us to them. Humans review every applicationNo scoring algorithm decides your circumstances. A person reads, then talks to you.Your story stays privateFinancial details never leave the review team. Published outcomes use first names only.Decline is not a wallEvery no comes with the reason and an EMI or deferral path that still gets you trained.Zero sales pressureApplying creates no obligation and triggers no call-centre chase. One decision email, that is all.70%Need-based approvals60–80%Typical need-based waiver5 daysMedian decision time20Awarded last year FAQ Questions before you apply. Straight answers to the ones we hear most. Why are there no merit scholarships?", "acceptedAnswer": {"@type": "Answer", "text": "Because toppers already have options. Our seats-with-support go to people whose circumstances, not marks, are the barrier. That is a deliberate policy, not an oversight."}}, {"@type": "Question", "name": "What does the 20-minute conversation involve?", "acceptedAnswer": {"@type": "Answer", "text": "A private, judgment-free chat about your situation with one reviewer. No documents are demanded beyond basics; honesty matters more than paperwork."}}, {"@type": "Question", "name": "Can I combine a scholarship with EMI?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Most awardees pay their reduced fee on a standard EMI plan. Defence Family explicitly stacks with EMI."}}, {"@type": "Question", "name": "What if my application is declined?", "acceptedAnswer": {"@type": "Answer", "text": "You get the reason and an alternative: EMI restructuring, a deferral, or a smaller-course pathway. Last year most declines still enrolled through one of these."}}, {"@type": "Question", "name": "Will my financial details be shared or published?", "acceptedAnswer": {"@type": "Answer", "text": "Never. Published stories use first names and outcomes only, with consent. Your file is visible to the review team alone."}}, {"@type": "Question", "name": "Which courses do scholarships cover?", "acceptedAnswer": {"@type": "Answer", "text": "All of them, every batch and mode. The waiver applies to the course fee; certification exam fees remain with the certifying bodies."}}]}'
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
<span class="eyebrow">● Up to 80% off · 20 awarded in 2025</span>
<h1>Do not let cost be the reason <span class="serif">you do not apply.</span></h1>
<p>Four scholarships, all need-based and category-specific, none merit-based: your marksheet is not your story. Twenty were awarded last year, decided by humans in conversation, not by forms alone.</p>
<div style="display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="#" onclick="openModal(event)">Apply for a scholarship <span class="arr">→</span></a><a class="btn btn-navy" href="#types">See the four types</a></div>
<div class="a-stats"><div><b>80%</b><span>Maximum fee waiver</span></div><div><b>20</b><span>Awarded in 2025</span></div><div><b>70%</b><span>Need-based approval rate</span></div><div><b>0</b><span>Sales pressure</span></div></div>
</div>
</div>
</section><section class="sec" id="types">
<div class="wrap">
<span class="eyebrow reveal">The scholarships</span>
<h2 class="st reveal">Four scholarships. No <span class="serif">merit-based ones.</span></h2>
<p class="lede reveal">We fund circumstances, not toppers. Find the one that fits yours.</p>
<div class="tier-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px"><div class="tier reveal" style="position:relative;border-radius:var(--r-lg);padding:26px 22px;box-shadow:var(--sh1)"><span class="tag" style="position:absolute;top:-13px;right:18px;background:var(--orange);color:#fff;font-size:.66rem;font-weight:800;letter-spacing:.08em;padding:6px 14px;border-radius:99px">MOST AWARDED</span>
<span class="k" style="font-size:.68rem;font-weight:800;letter-spacing:.11em;text-transform:uppercase;color:var(--orange)">Need-based</span>
<b style="display:block;color:var(--navy);font-size:1.08rem;margin:6px 0 2px">Need-based Scholarship</b>
<div style="font-weight:900;color:var(--navy);font-size:1.5rem;margin:6px 0 10px">60–80% off</div>
<ul style="list-style:none;display:grid;gap:7px;font-size:.85rem;color:var(--text-soft)"><li>Household income assessed</li><li>20-minute private conversation</li><li>Largest share: 70% of awards</li><li>Any course, any batch</li></ul></div><div class="tier reveal" style="position:relative;border-radius:var(--r-lg);padding:26px 22px;box-shadow:var(--sh1)">
<span class="k" style="font-size:.68rem;font-weight:800;letter-spacing:.11em;text-transform:uppercase;color:var(--orange)">Women returners</span>
<b style="display:block;color:var(--navy);font-size:1.08rem;margin:6px 0 2px">Career Restart for Women</b>
<div style="font-weight:900;color:var(--navy);font-size:1.5rem;margin:6px 0 10px">40–60% off</div>
<ul style="list-style:none;display:grid;gap:7px;font-size:.85rem;color:var(--text-soft)"><li>Career break of 1+ years</li><li>Document-based, no interview</li><li>15% of last year's awards</li><li>Flexible batch scheduling</li></ul></div><div class="tier reveal" style="position:relative;border-radius:var(--r-lg);padding:26px 22px;box-shadow:var(--sh1)">
<span class="k" style="font-size:.68rem;font-weight:800;letter-spacing:.11em;text-transform:uppercase;color:var(--orange)">Defence families</span>
<b style="display:block;color:var(--navy);font-size:1.08rem;margin:6px 0 2px">Defence Family Scholarship</b>
<div style="font-weight:900;color:var(--navy);font-size:1.5rem;margin:6px 0 10px">25% off</div>
<ul style="list-style:none;display:grid;gap:7px;font-size:.85rem;color:var(--text-soft)"><li>Serving or veteran households</li><li>Document-based, no interview</li><li>Stacks with EMI plans</li><li>All courses eligible</li></ul></div><div class="tier reveal" style="position:relative;border-radius:var(--r-lg);padding:26px 22px;box-shadow:var(--sh1)">
<span class="k" style="font-size:.68rem;font-weight:800;letter-spacing:.11em;text-transform:uppercase;color:var(--orange)">Differently-abled</span>
<b style="display:block;color:var(--navy);font-size:1.08rem;margin:6px 0 2px">Accessibility Scholarship</b>
<div style="font-weight:900;color:var(--navy);font-size:1.5rem;margin:6px 0 10px">50–70% off</div>
<ul style="list-style:none;display:grid;gap:7px;font-size:.85rem;color:var(--text-soft)"><li>Self-declared, privately verified</li><li>20-minute conversation</li><li>Accessible batch support</li><li>Any course, any mode</li></ul></div></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Not sure which fits?</b><span>One counsellor call sorts it in ten minutes, privately.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Ask privately</a></div>
</div>
</section><section class="sec" id="steps" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">How it works</span>
<h2 class="st reveal">Four steps. No <span class="serif">surprises.</span></h2>
<p class="lede reveal">The whole process runs in under a week, and a decline is never a wall.</p>
<div class="steps"><div class="step reveal"><span class="n">1</span><h4>Apply in five minutes</h4><p>Pick your course, pick the scholarship, tell us your situation in your own words.</p></div><div class="step reveal"><span class="n">2</span><h4>A human reads it</h4><p>Every application is reviewed by a person. Need-based and accessibility include a 20-minute private conversation; women-restart and defence are document-only.</p></div><div class="step reveal"><span class="n">3</span><h4>Decision within 5 days</h4><p>A clear yes with your exact fee, or a no with the reason and an EMI alternative.</p></div><div class="step reveal"><span class="n">4</span><h4>Join your batch</h4><p>Scholarship fees lock for 60 days, so you can plan the start date that works.</p></div></div>
</div>
</section><section class="sec" id="promise">
<div class="wrap">
<span class="eyebrow reveal">Our promises</span>
<h2 class="st reveal">Four things we promise <span class="serif">when you apply.</span></h2>
<p class="lede reveal">Written down so you can hold us to them.</p>
<div class="diff-grid"><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-cap"></use></svg></span><b>Humans review every application</b><p>No scoring algorithm decides your circumstances. A person reads, then talks to you.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-chart"></use></svg></span><b>Your story stays private</b><p>Financial details never leave the review team. Published outcomes use first names only.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-globe"></use></svg></span><b>Decline is not a wall</b><p>Every no comes with the reason and an EMI or deferral path that still gets you trained.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-shield"></use></svg></span><b>Zero sales pressure</b><p>Applying creates no obligation and triggers no call-centre chase. One decision email, that is all.</p></div></div><div class="rec-row reveal" style="grid-template-columns:repeat(4,1fr);margin-top:36px"><div><b>70%</b><span>Need-based approvals</span></div><div><b>60–80%</b><span>Typical need-based waiver</span></div><div><b>5 days</b><span>Median decision time</span></div><div><b>20</b><span>Awarded last year</span></div></div>
</div>
</section><section class="sec" id="faq" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">FAQ</span>
<h2 class="st reveal">Questions before you <span class="serif">apply.</span></h2>
<p class="lede reveal">Straight answers to the ones we hear most.</p>
<div class="acc reveal" style="max-width:860px"><details open=""><summary>Why are there no merit scholarships? <span class="plus">+</span></summary><div class="ab">Because toppers already have options. Our seats-with-support go to people whose circumstances, not marks, are the barrier. That is a deliberate policy, not an oversight.</div></details><details><summary>What does the 20-minute conversation involve? <span class="plus">+</span></summary><div class="ab">A private, judgment-free chat about your situation with one reviewer. No documents are demanded beyond basics; honesty matters more than paperwork.</div></details><details><summary>Can I combine a scholarship with EMI? <span class="plus">+</span></summary><div class="ab">Yes. Most awardees pay their reduced fee on a standard EMI plan. Defence Family explicitly stacks with EMI.</div></details><details><summary>What if my application is declined? <span class="plus">+</span></summary><div class="ab">You get the reason and an alternative: EMI restructuring, a deferral, or a smaller-course pathway. Last year most declines still enrolled through one of these.</div></details><details><summary>Will my financial details be shared or published? <span class="plus">+</span></summary><div class="ab">Never. Published stories use first names and outcomes only, with consent. Your file is visible to the review team alone.</div></details><details><summary>Which courses do scholarships cover? <span class="plus">+</span></summary><div class="ab">All of them, every batch and mode. The waiver applies to the course fee; certification exam fees remain with the certifying bodies.</div></details></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Twenty people got trained last year who thought they could not afford it.</b><span>You lose nothing by applying. The form takes five minutes.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Apply now</a></div>
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
