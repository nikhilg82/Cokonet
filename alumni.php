<?php
require __DIR__.'/includes/config.php';
$page = [
  'title' => 'Alumni Stories | Verified Careers, Real Salaries | Cokonet Academy',
  'description' => 'Verified alumni stories with real names, salaries and employers: 6,000+ alumni across 400+ companies from Technopark to the Gulf. Talk to an alumnus before you enrol.',
  'path' => '/alumni',
  'nav' => 'placements',
  'css' => '/assets/css/pages/alumni.css',
  'course_css' => false,
  'jsonld' => [
  '{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "All courses + SAP FICO · MM · ABAP · SuccessFactors Data Analytics · Data Science and AI AI and Generative AI Full Stack · Python · Testing · Salesforce DevOps on AWS · Cyber Security Finance Package · Advanced Excel Digital Marketing · Design · UI UX · Video Browse all 78 courses → Placements + PlacementsAlumni storiesInternships (FYUGP)Hire from us Internships Enterprises More + Free course videosFree masterclassScholarshipRefer and earnAbout CokonetCareersJoin as trainerContact us Free courses Free counselling Chat on WhatsApp ● 6,000+ alumni · 400+ companies Real people. Real careers. Real proof. Sixteen stories below, hundreds more behind them. Every name, salary and company here was verified before publishing, and many alumni will take your call before you enrol. Do not trust marketing copy; trust the people who lived it. Talk to an alumnus →Read the stories 6,000+Alumni worldwide400+Companies they work at58%Avg hike for switchers16Featured this quarter Featured stories Sixteen alumni. Hundreds more. A rotating quarterly feature. Salaries are what they were actually paid on joining. [ alumni portrait: Aparna ]SAP FICO · 2024Aparna: B.Com fresher to AllianzFrom a Trivandrum commerce classroom to an SAP FICO consultant seat at Allianz at ₹5.2 LPA, in seven months end to end.Fresher₹5.2 LPAAllianz[ alumni portrait: Nithin ]Cloud · 2023Nithin: support desk to Senior DevOpsFour years of support tickets, one course, and a product-company platform seat at ₹11 LPA. The full interview is on the shorts wall.Switcher₹11 LPAProduct co.[ alumni portrait: Rohit ]Data · 2024Rohit: MIS executive to BI DeveloperThe classic Kerala jump: Excel reports to Power BI ownership at UST, with a 157% hike he still calls \\"undramatic, just earned\\".MIS to BI₹9 LPAUST[ counsellor photo ]Want to talk to one before you enrol?We arrange alumni calls weekly. Ask for someone from your background.Request an alumni call Where they are 6,000+ alumni. 400+ companies. Around the globe. Trivandrum to Technopark to Dubai to Dallas: the alumni map tracks every verified placement. IndiaTCS · Infosys · UST · IBSGCCDubai · Doha · RiyadhGlobalUS · UK · Australia8/10Partners are Fortune 500Verified before publishedOffer letters checked, employers confirmed. No screenshots-of-screenshots economy here.Mixed reviews stay upIncluding the critical ones. Credibility beats curation, and always will.Reachable, not decorativeAlumni volunteer for pre-enrolment calls, mock interviews and referrals monthly.A network, not a WhatsApp graveyardCity chapters, an annual meet and a live referral board keep it breathing. For alumni Already a Cokonet alumnus? Four ways to stay involved. The network is worth what its members put in. Pick your lane. 1Submit your storyTen minutes with our team, verified and published, and your LinkedIn gets its proudest post.2Join the alumni networkCity chapters, the referral board and the annual meet. Free, forever.3Join as a Cokonet trainerEight-plus years in your domain now? Teach an evening batch. Alumni trainers are our favourite hires.4Refer a friend, earn cash₹2,000 to ₹5,000 per successful referral, and your friend gets a fee discount too. FAQ Questions about our alumni. Asked by sceptics, answered with receipts. Are these stories real and verifiable?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Every published story is verified against offer letters and employers, uses real first names with consent, and many alumni take live calls with prospects. Ask for one."}}, {"@type": "Question", "name": "Can I speak to an alumnus from my background before enrolling?", "acceptedAnswer": {"@type": "Answer", "text": "Yes, and you should. Tell the counsellor your background and target track; we match you with someone who made the same jump."}}, {"@type": "Question", "name": "Do you publish only success stories?", "acceptedAnswer": {"@type": "Answer", "text": "No. Mixed and critical reviews stay up on the site, because a testimonial wall nobody doubts is worth more than a perfect one nobody believes."}}, {"@type": "Question", "name": "How do I join the alumni network?", "acceptedAnswer": {"@type": "Answer", "text": "Completion makes you a member automatically. The welcome email carries chapter links, the referral board and the annual meet calendar."}}, {"@type": "Question", "name": "I am an alumnus. How do I refer someone?", "acceptedAnswer": {"@type": "Answer", "text": "Through the refer-and-earn page: register, share your code, and payouts of ₹2,000 to ₹5,000 land after your friend enrols and stays past the refund window."}}, {"@type": "Question", "name": "Can alumni come back as trainers?", "acceptedAnswer": {"@type": "Answer", "text": "Enthusiastically yes, once you cross eight years of practice. Alumni trainers already run several of our evening batches."}}]}'
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
<span class="eyebrow">● 6,000+ alumni · 400+ companies</span>
<h1>Real people. Real careers. <span class="serif">Real proof.</span></h1>
<p>Sixteen stories below, hundreds more behind them. Every name, salary and company here was verified before publishing, and many alumni will take your call before you enrol. Do not trust marketing copy; trust the people who lived it.</p>
<div style="display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="#" onclick="openModal(event)">Talk to an alumnus <span class="arr">→</span></a><a class="btn btn-navy" href="#stories">Read the stories</a></div>
<div class="a-stats"><div><b>6,000+</b><span>Alumni worldwide</span></div><div><b>400+</b><span>Companies they work at</span></div><div><b>58%</b><span>Avg hike for switchers</span></div><div><b>16</b><span>Featured this quarter</span></div></div>
</div>
</div>
</section><section class="sec" id="stories">
<div class="wrap">
<span class="eyebrow reveal">Featured stories</span>
<h2 class="st reveal">Sixteen alumni. <span class="serif">Hundreds more.</span></h2>
<p class="lede reveal">A rotating quarterly feature. Salaries are what they were actually paid on joining.</p>
<div class="cap-grid"><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#173a86,#26417f 60%,#5b7bb5)">[ alumni portrait: Aparna ]</div><span class="k">SAP FICO · 2024</span><b>Aparna: B.Com fresher to Allianz</b><p>From a Trivandrum commerce classroom to an SAP FICO consultant seat at Allianz at ₹5.2 LPA, in seven months end to end.</p><div class="chips"><span>Fresher</span><span>₹5.2 LPA</span><span>Allianz</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#26417f,#0a3a9e)">[ alumni portrait: Nithin ]</div><span class="k">Cloud · 2023</span><b>Nithin: support desk to Senior DevOps</b><p>Four years of support tickets, one course, and a product-company platform seat at ₹11 LPA. The full interview is on the shorts wall.</p><div class="chips"><span>Switcher</span><span>₹11 LPA</span><span>Product co.</span></div></div><div class="capstone reveal"><div class="cap-visual" style="background:linear-gradient(120deg,#8a6a4d,#c99a63)">[ alumni portrait: Rohit ]</div><span class="k">Data · 2024</span><b>Rohit: MIS executive to BI Developer</b><p>The classic Kerala jump: Excel reports to Power BI ownership at UST, with a 157% hike he still calls "undramatic, just earned".</p><div class="chips"><span>MIS to BI</span><span>₹9 LPA</span><span>UST</span></div></div></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Want to talk to one before you enrol?</b><span>We arrange alumni calls weekly. Ask for someone from your background.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Request an alumni call</a></div>
</div>
</section><section class="sec" id="map" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">Where they are</span>
<h2 class="st reveal">6,000+ alumni. 400+ companies. <span class="serif">Around the globe.</span></h2>
<p class="lede reveal">Trivandrum to Technopark to Dubai to Dallas: the alumni map tracks every verified placement.</p>
<div class="rec-row reveal" style="grid-template-columns:repeat(4,1fr);margin-top:36px"><div><b>India</b><span>TCS · Infosys · UST · IBS</span></div><div><b>GCC</b><span>Dubai · Doha · Riyadh</span></div><div><b>Global</b><span>US · UK · Australia</span></div><div><b>8/10</b><span>Partners are Fortune 500</span></div></div><div class="diff-grid"><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-cap"></use></svg></span><b>Verified before published</b><p>Offer letters checked, employers confirmed. No screenshots-of-screenshots economy here.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-chart"></use></svg></span><b>Mixed reviews stay up</b><p>Including the critical ones. Credibility beats curation, and always will.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-globe"></use></svg></span><b>Reachable, not decorative</b><p>Alumni volunteer for pre-enrolment calls, mock interviews and referrals monthly.</p></div><div class="diff reveal"><span class="ic-badge"><svg class="ic"><use href="#i-shield"></use></svg></span><b>A network, not a WhatsApp graveyard</b><p>City chapters, an annual meet and a live referral board keep it breathing.</p></div></div>
</div>
</section><section class="sec" id="involve">
<div class="wrap">
<span class="eyebrow reveal">For alumni</span>
<h2 class="st reveal">Already a Cokonet alumnus? <span class="serif">Four ways to stay involved.</span></h2>
<p class="lede reveal">The network is worth what its members put in. Pick your lane.</p>
<div class="steps"><div class="step reveal"><span class="n">1</span><h4>Submit your story</h4><p>Ten minutes with our team, verified and published, and your LinkedIn gets its proudest post.</p></div><div class="step reveal"><span class="n">2</span><h4>Join the alumni network</h4><p>City chapters, the referral board and the annual meet. Free, forever.</p></div><div class="step reveal"><span class="n">3</span><h4>Join as a Cokonet trainer</h4><p>Eight-plus years in your domain now? Teach an evening batch. Alumni trainers are our favourite hires.</p></div><div class="step reveal"><span class="n">4</span><h4>Refer a friend, earn cash</h4><p>₹2,000 to ₹5,000 per successful referral, and your friend gets a fee discount too.</p></div></div>
</div>
</section><section class="sec" id="faq" style="background:#fff">
<div class="wrap">
<span class="eyebrow reveal">FAQ</span>
<h2 class="st reveal">Questions about <span class="serif">our alumni.</span></h2>
<p class="lede reveal">Asked by sceptics, answered with receipts.</p>
<div class="acc reveal" style="max-width:860px"><details open=""><summary>Are these stories real and verifiable? <span class="plus">+</span></summary><div class="ab">Yes. Every published story is verified against offer letters and employers, uses real first names with consent, and many alumni take live calls with prospects. Ask for one.</div></details><details><summary>Can I speak to an alumnus from my background before enrolling? <span class="plus">+</span></summary><div class="ab">Yes, and you should. Tell the counsellor your background and target track; we match you with someone who made the same jump.</div></details><details><summary>Do you publish only success stories? <span class="plus">+</span></summary><div class="ab">No. Mixed and critical reviews stay up on the site, because a testimonial wall nobody doubts is worth more than a perfect one nobody believes.</div></details><details><summary>How do I join the alumni network? <span class="plus">+</span></summary><div class="ab">Completion makes you a member automatically. The welcome email carries chapter links, the referral board and the annual meet calendar.</div></details><details><summary>I am an alumnus. How do I refer someone? <span class="plus">+</span></summary><div class="ab">Through the refer-and-earn page: register, share your code, and payouts of ₹2,000 to ₹5,000 land after your friend enrols and stays past the refund window.</div></details><details><summary>Can alumni come back as trainers? <span class="plus">+</span></summary><div class="ab">Enthusiastically yes, once you cross eight years of practice. Alumni trainers already run several of our evening batches.</div></details></div><div class="counsel-strip reveal"><div><span class="c-face">[ counsellor photo ]</span><div class="ct"><b>Do not trust marketing copy.</b><span>Trust the people who lived it. We will connect you this week.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Talk to an alumnus</a></div>
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
