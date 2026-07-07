<?php
require __DIR__.'/includes/config.php';
$page = [
  'title' => 'Hire From Us | Trained Tech Talent, Zero Fees | Cokonet Academy',
  'description' => 'Hire course-certified, capstone-assessed specialists in SAP, cloud, data, cyber, full stack and QA, or screened fresh graduates. Zero employer fees, 90-day support.',
  'path' => '/hire-from-us',
  'nav' => 'placements',
  'css' => '/assets/css/pages/hire-from-us.css',
  'course_css' => false,
  'jsonld' => [
  '{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "All courses + SAP FICO · MM · ABAP · SuccessFactors Data Analytics · Data Science and AI AI and Generative AI Full Stack · Python · Testing · Salesforce DevOps on AWS · Cyber Security Finance Package · Advanced Excel Digital Marketing · Design · UI UX · Video Browse all 78 courses → Placements + PlacementsAlumni storiesInternships (FYUGP)Hire from us Internships Enterprises More + Free course videosFree masterclassScholarshipRefer and earnAbout CokonetCareersJoin as trainerContact us Free courses Free counselling Chat on WhatsApp ● For employers · Zero hiring fees Hire trained tech talent. Or fresh college talent. Two pools, one pipeline: certified, project-assessed specialists across six domains, and screened fresh graduates across eight branches. 400+ companies hire from us; 8 in 10 are Fortune 500. This month: 847 trained candidates and 2,400 fresh applicants. Request candidates →How it works 847Trained candidates now2,400Fresh applicants now400+Hiring partners0Fees to employers Two pools Which pool you want depends on the role. Specialists for immediate productivity, fresh talent for volume and trainability. [ specialist profiles wall ]Pool oneTrained specialists, six domainsSAP consultants, cloud and DevOps engineers, data and AI engineers, full stack developers, cybersecurity analysts and QA. Course-certified, capstone-assessed, interview-drilled.SAPCloudData + AI[ campus drive photo ]Pool twoFresh college talent, eight branchesScreened final-year and passed-out graduates from partner colleges across Kerala, aptitude-tested and communication-graded, ready for your training track.8 branchesScreenedVolume[ HTT flow diagram ]Hire, train, transferYour stack, our trainingPick raw talent, we train them on your exact stack and tools, you absorb them on completion. The de-risked campus model.Custom trackYour toolsAbsorb on completion[ counsellor photo ]Day-1 productive is the bar.\\"SAP consultants from Cokonet over three years. Day-1 productive,\\" said an L&D head who kept coming back.Request candidates Process From requirement to joined, in four steps. No fees, no exclusivity, no drama. We are paid by outcomes on the learner side. 1Send the requirementRole, stack, count and location. A dedicated partner manager owns your account the same day.2Get a matched shortlistProfiles with capstone evidence and assessment scores, not keyword-matched CVs. Typically within 5 working days.3Interview directlyYour process, your panel. We coordinate schedules and keep candidates warm.4Offer and onboardWe support negotiation and joining logistics. Post-joining check-ins run for 90 days. Track record The numbers behind the pipeline. Published, and repeated because they are true. 11,400+Placed since 2010₹18 LPATop package recorded76%Verified placement rate90 daysPost-joining supportAssessed, not just certifiedEvery specialist carries scored capstones you can inspect before the interview.Kerala + GCC reachTalent pools in Trivandrum, Kochi and Bengaluru, with Gulf-ready candidates flagged.Zero employer feesOur model is funded on the learner side. Hiring from us never bills you.One accountable humanA named partner manager, not a portal, owns your requirement end to end. FAQ Questions before you submit. From hiring managers and L&D teams. What does hiring from Cokonet cost?", "acceptedAnswer": {"@type": "Answer", "text": "Nothing. Employers pay no sourcing, placement or success fees. Our revenue is on the training side, which keeps our incentive on candidate quality."}}, {"@type": "Question", "name": "How are trained candidates assessed?", "acceptedAnswer": {"@type": "Answer", "text": "Course completion plus scored capstone projects, mock-interview grades and a Career Readiness Index. You see the evidence, not just a certificate line."}}, {"@type": "Question", "name": "How fast can we get a shortlist?", "acceptedAnswer": {"@type": "Answer", "text": "Typically within five working days for common stacks; same-week for urgent SAP, data and testing roles when the pool has matches."}}, {"@type": "Question", "name": "Can you train candidates on our specific stack?", "acceptedAnswer": {"@type": "Answer", "text": "Yes, that is the hire-train-transfer model: you select the cohort, we build a custom track on your tools, you absorb them on completion."}}, {"@type": "Question", "name": "Do you support bulk and campus hiring?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. The fresh-talent pool spans partner colleges across eight branches, and we run coordinated campus drives with screening done before your panel arrives."}}, {"@type": "Question", "name": "What happens after a candidate joins?", "acceptedAnswer": {"@type": "Answer", "text": "Ninety days of structured check-ins on both sides. If a joining fails early, we refill the position on priority, without fees, as always."}}]}'
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
<span class="eyebrow">● For employers · Zero hiring fees</span>
<h1>Hire trained tech talent. <span class="serif">Or fresh college talent.</span></h1>
<p>Two pools, one pipeline: certified, project-assessed specialists across six domains, and screened fresh graduates across eight branches. 400+ companies hire from us; 8 in 10 are Fortune 500. This month: 847 trained candidates and 2,400 fresh applicants.</p>
<div style="display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="#" onclick="openModal(event)">Request candidates <span class="arr">→</span></a><a class="btn btn-navy" href="#how">How it works</a></div>
<div class="a-stats"><div><b>847</b><span>Trained candidates now</span></div><div><b>2,400</b><span>Fresh applicants now</span></div><div><b>400+</b><span>Hiring partners</span></div><div><b>0</b><span>Fees to employers</span></div></div>
</div>
</div>
</section><section class="sec" id="pools">
<div class="wrap">
<span class="eyebrow reveal">Two pools</span>
<h2 class="st reveal">Which pool you want <span class="serif">depends on the role.</span></h2>
<p class="lede reveal">Specialists for immediate productivity, fresh talent for volume and trainability.</p>
<div class="cap-grid"><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#173a86,#26417f 60%,#5b7bb5)">[ specialist profiles wall ]</div><span class="k">Pool one</span><b>Trained specialists, six domains</b><p>SAP consultants, cloud and DevOps engineers, data and AI engineers, full stack developers, cybersecurity analysts and QA. Course-certified, capstone-assessed, interview-drilled.</p><div class="chips"><span>SAP</span><span>Cloud</span><span>Data + AI</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#26417f,#0a3a9e)">[ campus drive photo ]</div><span class="k">Pool two</span><b>Fresh college talent, eight branches</b><p>Screened final-year and passed-out graduates from partner colleges across Kerala, aptitude-tested and communication-graded, ready for your training track.</p><div class="chips"><span>8 branches</span><span>Screened</span><span>Volume</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#8a6a4d,#c99a63)">[ HTT flow diagram ]</div><span class="k">Hire, train, transfer</span><b>Your stack, our training</b><p>Pick raw talent, we train them on your exact stack and tools, you absorb them on completion. The de-risked campus model.</p><div class="chips"><span>Custom track</span><span>Your tools</span><span>Absorb on completion</span></div></div></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Day-1 productive is the bar.</b><span>"SAP consultants from Cokonet over three years. Day-1 productive," said an L&amp;D head who kept coming back.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Request candidates</a></div>
</div>
</section><section class="sec" id="how" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">Process</span>
<h2 class="st reveal">From requirement to <span class="serif">joined, in four steps.</span></h2>
<p class="lede reveal">No fees, no exclusivity, no drama. We are paid by outcomes on the learner side.</p>
<div class="steps"><div class="step reveal"><span class="n">1</span><h4>Send the requirement</h4><p>Role, stack, count and location. A dedicated partner manager owns your account the same day.</p></div><div class="step reveal"><span class="n">2</span><h4>Get a matched shortlist</h4><p>Profiles with capstone evidence and assessment scores, not keyword-matched CVs. Typically within 5 working days.</p></div><div class="step reveal"><span class="n">3</span><h4>Interview directly</h4><p>Your process, your panel. We coordinate schedules and keep candidates warm.</p></div><div class="step reveal"><span class="n">4</span><h4>Offer and onboard</h4><p>We support negotiation and joining logistics. Post-joining check-ins run for 90 days.</p></div></div>
</div>
</section><section class="sec" id="numbers">
<div class="wrap">
<span class="eyebrow reveal">Track record</span>
<h2 class="st reveal">The numbers behind <span class="serif">the pipeline.</span></h2>
<p class="lede reveal">Published, and repeated because they are true.</p>
<div class="rec-row reveal" style="grid-template-columns:repeat(4,1fr);margin-top:36px"><div><b>11,400+</b><span>Placed since 2010</span></div><div><b>₹18 LPA</b><span>Top package recorded</span></div><div><b>76%</b><span>Verified placement rate</span></div><div><b>90 <em>days</em></b><span>Post-joining support</span></div></div><div class="diff-grid"><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-cap"></use></svg></span><b>Assessed, not just certified</b><p>Every specialist carries scored capstones you can inspect before the interview.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-chart"></use></svg></span><b>Kerala + GCC reach</b><p>Talent pools in Trivandrum, Kochi and Bengaluru, with Gulf-ready candidates flagged.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-globe"></use></svg></span><b>Zero employer fees</b><p>Our model is funded on the learner side. Hiring from us never bills you.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-shield"></use></svg></span><b>One accountable human</b><p>A named partner manager, not a portal, owns your requirement end to end.</p></div></div>
</div>
</section><section class="sec" id="faq" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">FAQ</span>
<h2 class="st reveal">Questions before you <span class="serif">submit.</span></h2>
<p class="lede reveal">From hiring managers and L&amp;D teams.</p>
<div class="acc reveal" style="max-width:860px"><details open=""><summary>What does hiring from Cokonet cost? <span class="plus">+</span></summary><div class="ab">Nothing. Employers pay no sourcing, placement or success fees. Our revenue is on the training side, which keeps our incentive on candidate quality.</div></details><details><summary>How are trained candidates assessed? <span class="plus">+</span></summary><div class="ab">Course completion plus scored capstone projects, mock-interview grades and a Career Readiness Index. You see the evidence, not just a certificate line.</div></details><details><summary>How fast can we get a shortlist? <span class="plus">+</span></summary><div class="ab">Typically within five working days for common stacks; same-week for urgent SAP, data and testing roles when the pool has matches.</div></details><details><summary>Can you train candidates on our specific stack? <span class="plus">+</span></summary><div class="ab">Yes, that is the hire-train-transfer model: you select the cohort, we build a custom track on your tools, you absorb them on completion.</div></details><details><summary>Do you support bulk and campus hiring? <span class="plus">+</span></summary><div class="ab">Yes. The fresh-talent pool spans partner colleges across eight branches, and we run coordinated campus drives with screening done before your panel arrives.</div></details><details><summary>What happens after a candidate joins? <span class="plus">+</span></summary><div class="ab">Ninety days of structured check-ins on both sides. If a joining fails early, we refill the position on priority, without fees, as always.</div></details></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>847 trained candidates and 2,400 fresh applicants, this month.</b><span>Send one requirement and judge the shortlist yourself.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Request candidates</a></div>
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
