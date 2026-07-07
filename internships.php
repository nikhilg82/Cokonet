<?php
require __DIR__.'/includes/config.php';
$page = [
  'title' => 'FYUGP Internship in Kerala for 3rd & 4th Year Students | Cokonet Academy',
  'description' => 'FYUGP internship in Trivandrum and Kochi for Kerala college students. 2 credits, 90 to 120 hours, live projects in AI, Python, Data Analytics, AWS and SAP.',
  'path' => '/internships',
  'nav' => 'internships',
  'css' => '/assets/css/pages/internships.css',
  'course_css' => false,
  'jsonld' => [
  '{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "EducationalOccupationalProgram",
   "name": "FYUGP Internship Program at Cokonet Technologies",
   "description": "A KSHEC-aligned FYUGP internship for 3rd and 4th year undergraduate students across Kerala, offering 2 academic credits for 90 to 120 hours of live project work in AI, Python, Data Analytics, AWS DevOps and SAP inside Cokonet Technologies.",
   "provider": {
    "@type": "Organization",
    "name": "Cokonet Technologies",
    "url": "https://cokonet.com",
    "logo": "https://cokonet.com/assets/logo.png",
    "sameAs": [
     "https://www.linkedin.com/company/cokonet"
    ],
    "address": {
     "@type": "PostalAddress",
     "streetAddress": "Peedikayil Chambers, Ulloor",
     "addressLocality": "Trivandrum",
     "addressRegion": "Kerala",
     "postalCode": "695011",
     "addressCountry": "IN"
    },
    "telephone": "+91-8075-400-500"
   },
   "occupationalCredentialAwarded": "2 academic credits, FYUGP internship completion certificate",
   "timeToComplete": "P90H/P120H",
   "educationalCredentialAwarded": "Certificate of Internship",
   "programType": "Internship",
   "areaServed": {
    "@type": "State",
    "name": "Kerala"
   },
   "hasCourse": [
    {
     "@type": "Course",
     "name": "AI Internship"
    },
    {
     "@type": "Course",
     "name": "Python Internship"
    },
    {
     "@type": "Course",
     "name": "Data Analytics Internship"
    },
    {
     "@type": "Course",
     "name": "AWS DevOps Internship"
    },
    {
     "@type": "Course",
     "name": "SAP Internship"
    }
   ]
  },
  {
   "@type": "FAQPage",
   "mainEntity": [
    {
     "@type": "Question",
     "name": "Is this internship valid for FYUGP credit at any Kerala university?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. The programme is aligned with the Kerala State Higher Education Council (KSHEC) internship mandate that applies statewide, across the University of Kerala, MG University, Calicut University, Kannur University, CUSAT, KTU and other FYUGP-affiliated institutions. Confirm your college\'s specific credit-mapping process with your FYUGP coordinator before you start."
     }
    },
    {
     "@type": "Question",
     "name": "Is Cokonet the same as the Internship Kerala portal (internshipkerala.org)?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "No, they are different things. Internship Kerala is the state government\'s own registration portal, run by KSHEC and KELTRON. Cokonet is an independent IT company offering its own structured FYUGP track. Either route can satisfy your college\'s internship requirement; ask your FYUGP coordinator which route your college prefers."
     }
    },
    {
     "@type": "Question",
     "name": "I\'m from a non-tech degree. Am I really eligible?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. FYUGP applies to every graduate programme, arts, science, commerce and engineering, and so do we. Tracks are matched to your background during onboarding, and Academy training brings you to project level before live work starts. No prior coding is assumed."
     }
    },
    {
     "@type": "Question",
     "name": "How many hours and credits does the Cokonet FYUGP internship carry?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "2 academic credits for 90 to 120 hours of supervised work. Hour logs and assessment records are delivered in the format Kerala\'s universities require for credit mapping. Internships statewide are officially categorised as paid, non-paid or stipend-supported, so ask your coordinator which category applies to your college\'s requirement."
     }
    },
    {
     "@type": "Question",
     "name": "Is this actual work or watching videos for 90 hours?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Actual work, in the right order. Training on live tools first, then real tasks inside Cokonet Technologies, an IT company based in Trivandrum with operations in Kochi and Bengaluru that has served enterprise clients for 16 years. Weekly assignments, mentor reviews and a final project you present yourself."
     }
    },
    {
     "@type": "Question",
     "name": "What do I actually walk away with?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "2 academic credits on your transcript, 90 to 120 logged hours, a portfolio-ready project, assessment records, a completion certificate, and hands-on exposure to SAP, AWS, Python, analytics and AI, the platforms Kerala\'s IT employers hire for."
     }
    },
    {
     "@type": "Question",
     "name": "Does this help me get placed later?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "It is designed to. Interns from previous batches are now at Allianz, Deloitte, Accenture, RM India and TRUSPEQ. No guarantees and no fake promises, but a genuinely unfair head start into Kerala\'s IT hiring pipeline."
     }
    },
    {
     "@type": "Question",
     "name": "Where does the internship happen: Trivandrum, Kochi or online?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "On campus at Cokonet\'s Trivandrum and Kochi centres, or hybrid with remote sessions, depending on your track and college MoU. Students outside these cities can ask about hybrid scheduling when they apply."
     }
    },
    {
     "@type": "Question",
     "name": "My college isn\'t a partner yet. What do I do?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Nudge your FYUGP cell to book the 30 minute discovery call, which typically closes in one MoU and two weeks, or apply individually and Cokonet will help coordinate the credit paperwork with your college."
     }
    }
   ]
  },
  {
   "@type": "BreadcrumbList",
   "itemListElement": [
    {
     "@type": "ListItem",
     "position": 1,
     "name": "Home",
     "item": "https://cokonet.com/index.html"
    },
    {
     "@type": "ListItem",
     "position": 2,
     "name": "FYUGP Internship Program",
     "item": "https://cokonet.com/cokonet-internships.html"
    }
   ]
  }
 ]
}'
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
})();

window.addEventListener(\'scroll\',function(){
  var bar=document.getElementById(\'stickyApply\'); if(!bar) return;
  var show = window.scrollY > 500 && !document.getElementById(\'scrim\').classList.contains(\'open\');
  bar.style.display = (window.innerWidth<=760 && show) ? \'flex\' : \'none\';
});',
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
<style>
/* internships: vibrant layer on brand system */
@keyframes iFloat{0%,100%{transform:translateY(0) rotate(var(--r,0deg))}50%{transform:translateY(-12px) rotate(var(--r,0deg))}}
@keyframes iTick{to{transform:translateX(-50%)}}
@keyframes iPop{from{transform:scale(.6);opacity:0}to{transform:scale(1);opacity:1}}
@media(prefers-reduced-motion:reduce){.ifl,.itk-in,.ipop{animation:none!important}}
.ihero{position:relative;background:#FFF1E6;background-image:radial-gradient(circle at 88% 12%, rgba(255,95,0,.14), transparent 42%), radial-gradient(circle at 6% 90%, rgba(0,33,105,.10), transparent 46%)}
.dark .ihero{background:#0C1626;background-image:radial-gradient(circle at 88% 12%, rgba(255,95,0,.16), transparent 42%), radial-gradient(circle at 6% 90%, rgba(80,120,200,.14), transparent 46%)}
.ihero .inner{display:grid;grid-template-columns:minmax(0,640px) 460px;gap:44px;align-items:center;padding-top:68px;padding-bottom:64px}
@media(max-width:1023.98px){.ihero .inner{grid-template-columns:1fr!important;padding-top:48px;padding-bottom:48px}}
.ichips{display:flex;gap:12px;flex-wrap:wrap;margin:0 0 20px}
.ichip{display:inline-block;font-weight:800;font-size:.78rem;letter-spacing:.04em;padding:9px 16px;border-radius:99px;box-shadow:var(--sh1)}
.ichip.o{background:var(--orange);color:#fff;--r:-2deg}
.ichip.n{background:var(--navy-solid,#002169);color:#fff;--r:2deg}
.ichip.m{background:#fff;color:var(--navy);border:1.5px solid var(--mist);--r:-1deg}
.ifl{animation:iFloat 6s ease-in-out infinite}
.ifl:nth-child(2){animation-duration:7.5s}.ifl:nth-child(3){animation-duration:9s}
.icollage{position:relative;height:480px}
.icard{position:absolute;background:#fff;border-radius:18px;padding:10px 10px 38px;box-shadow:var(--sh3,0 24px 60px rgba(0,20,67,.18))}
.icard img{width:100%;border-radius:12px;aspect-ratio:1/1.02;object-fit:cover;display:block}
.icard .cap{position:absolute;left:14px;bottom:9px;font-weight:800;font-size:.76rem;color:var(--navy)}
.icard.c1{top:0;left:0;width:66%;transform:rotate(-4deg);z-index:1}
.icard.c2{top:130px;right:0;width:60%;transform:rotate(3deg);z-index:2}
.ichip-float{position:absolute;z-index:3;background:#fff;border-radius:14px;box-shadow:var(--sh2);padding:11px 15px;font-weight:800;color:var(--navy);font-size:.8rem}
.ichip-float b{display:block;font-size:1.3rem;color:var(--orange)}
.dark .icard,.dark .ichip-float{background:var(--surface-2)}
.dark .icard .cap,.dark .ichip-float{color:#DCE7FB}
@media(max-width:1023.98px){.icollage{height:auto;display:flex;gap:14px;margin-top:8px}.icard{position:static;flex:1;transform:rotate(-2deg)}.icard.c2{transform:rotate(2deg)}.ichip-float{display:none}}
@media(max-width:560px){.icollage{flex-direction:column}.icard.c1,.icard.c2{width:100%;transform:none}}
.itick{background:var(--navy);color:#fff;overflow:hidden;padding:13px 0;border-top:3px solid var(--orange)}
.itk-in{display:flex;width:max-content;animation:iTick 24s linear infinite}
.itk-in span{white-space:nowrap;font-weight:800;letter-spacing:.08em;font-size:.95rem;padding:0 20px}
.itk-in i{color:var(--orange);font-style:normal}
.ibento{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;margin-top:34px}
.ib{background:#fff;border:1.5px solid var(--mist-soft,#E4EBF2);border-radius:var(--r-lg);padding:26px;position:relative;overflow:hidden;transition:transform .2s ease,box-shadow .2s ease}
.ib:hover{transform:translateY(-5px) rotate(-.3deg);box-shadow:var(--sh2)}
.ib h4{color:var(--navy);font-size:1.06rem;margin:0 0 6px}
.ib p{font-size:.9rem;color:var(--text-soft);margin:0}
.ib .big{display:block;font-size:2rem;font-weight:900;color:var(--orange);line-height:1;margin-bottom:8px}
.ib.w2{grid-column:span 2}
.ib.orange{background:var(--orange);border-color:var(--orange)}
.ib.orange h4,.ib.orange p{color:#fff}
.ib.navy{background:var(--navy-solid,#002169);border-color:transparent}
.ib.navy h4{color:#fff}.ib.navy p{color:#C5D4E2}
.ib.photo{padding:0;min-height:210px}
.ib.photo img{width:100%;height:100%;object-fit:cover;display:block}
.dark .ib{background:var(--surface-2)}
@media(max-width:900px){.ibento{grid-template-columns:repeat(2,1fr)}}
@media(max-width:540px){.ibento{grid-template-columns:1fr}.ib.w2{grid-column:span 1}}
.itracks{display:flex;gap:18px;overflow-x:auto;scroll-snap-type:x mandatory;padding:6px 4px 20px;-webkit-overflow-scrolling:touch;scrollbar-width:none;margin-top:26px}
.itracks::-webkit-scrollbar{display:none}
.itr{scroll-snap-align:start;flex:0 0 250px;background:#fff;border:1.5px solid var(--mist-soft,#E4EBF2);border-radius:var(--r-lg);padding:24px;transition:transform .2s ease,box-shadow .2s ease}
.itr:hover{transform:translateY(-5px);box-shadow:var(--sh2)}
.itr .ic{width:50px;height:50px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-weight:900;color:#fff;background:var(--navy-solid,#002169);margin-bottom:14px}
.itr:nth-child(odd) .ic{background:var(--orange)}
.itr h4{color:var(--navy);margin:0 0 6px}
.itr p{font-size:.88rem;color:var(--text-soft);margin:0}
.dark .itr{background:var(--surface-2)}
.iquotes{display:grid;grid-template-columns:1fr 1fr;gap:22px;margin-top:30px}
@media(max-width:860px){.iquotes{grid-template-columns:1fr}}
.iq{background:#fff;border:1.5px solid var(--mist-soft,#E4EBF2);border-radius:var(--r-lg);padding:30px;position:relative;display:flex;flex-direction:column;height:100%}
.iq::before{content:"\201C";position:absolute;top:-8px;left:20px;font-family:Georgia,serif;font-size:4rem;color:var(--orange);line-height:1}
.iq blockquote{margin:14px 0 18px;font-family:Georgia,serif;font-style:italic;font-size:1.08rem;color:var(--navy);flex:1 0 auto}
.iq .who{display:flex;gap:14px;align-items:center;margin-top:auto}
.iq .who img{width:56px;height:56px;border-radius:50%;object-fit:cover;border:3px solid var(--mist)}
.iq .who b{display:block;color:var(--navy)}
.iq .who span{font-size:.82rem;color:var(--text-soft)}
.dark .iq{background:var(--surface-2)}
.inums{display:grid;grid-template-columns:repeat(5,1fr);gap:14px;margin-top:30px;text-align:center}
.inm{background:var(--navy-solid,#002169);border-radius:16px;padding:22px 8px}
.inm b{display:block;font-size:1.8rem;font-weight:900;color:#fff}
.inm b em{font-style:normal;color:var(--orange)}
.inm span{font-size:.68rem;font-weight:800;letter-spacing:.05em;text-transform:uppercase;color:#C5D4E2}
@media(max-width:860px){.inums{grid-template-columns:repeat(2,1fr)}.inums .inm:last-child{grid-column:span 2}}
.iphotoband{border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--sh2);margin-top:34px}
.iphotoband img{display:block;width:100%}
.ipop{animation:iPop .5s ease both}

.igallery{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-top:26px}
.ig-item{border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--sh1);aspect-ratio:1/1}
.ig-item img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease}
.ig-item:hover img{transform:scale(1.05)}
.ig-big{grid-column:span 2;grid-row:span 2;aspect-ratio:1/1}
@media(max-width:900px){.igallery{grid-template-columns:repeat(2,1fr)}.ig-big{grid-column:span 2;grid-row:auto;aspect-ratio:16/9}}
@media(max-width:560px){.igallery{grid-template-columns:1fr}.ig-big{grid-column:span 1;aspect-ratio:4/3}.ig-item{aspect-ratio:4/3}}

@keyframes iSpark{0%,100%{opacity:.25;transform:scale(.8) rotate(0deg)}50%{opacity:1;transform:scale(1.15) rotate(20deg)}}
.spark{position:absolute;color:var(--orange);animation:iSpark 3.2s ease-in-out infinite}
.spark.y{color:#FFD84D}
@media(prefers-reduced-motion:reduce){.spark{animation:none;opacity:.7}}


.marquee{margin-top:26px;position:relative;display:grid;gap:18px;overflow:hidden}
.marquee::before,.marquee::after{content:"";position:absolute;top:0;bottom:0;width:80px;z-index:2;pointer-events:none}
.marquee::before{left:0;background:linear-gradient(90deg,#fff,transparent)}
.marquee::after{right:0;background:linear-gradient(-90deg,#fff,transparent)}
.dark .marquee::before{background:linear-gradient(90deg,var(--paper),transparent)}
.dark .marquee::after{background:linear-gradient(-90deg,var(--paper),transparent)}
.mq-row{display:flex;gap:18px;width:max-content;animation:mq 32s linear infinite}
.marquee:hover .mq-row{animation-play-state:paused}
@keyframes mq{from{transform:translateX(0)}to{transform:translateX(-50%)}}
.marquee .brand{background:#fff;border:1px solid var(--mist-soft);border-radius:var(--r-md);box-shadow:var(--sh1);min-width:170px;height:78px;display:flex;align-items:center;justify-content:center}
.dark .marquee .brand{background:#F4F7FB}
.blogo{height:30px;width:auto;max-width:120px}

.explore-courses{background:linear-gradient(135deg,var(--navy) 0%,#0a3a9e 100%);border-radius:var(--r-lg);padding:32px 36px;margin-top:34px}
.ec-cta-flex{display:flex;align-items:center;justify-content:space-between;gap:32px;flex-wrap:wrap}
.ec-head{flex:1;min-width:280px}
.ec-head p{max-width:640px}
.ec-btn{flex-shrink:0}
@media(max-width:700px){.ec-cta-flex{flex-direction:column;align-items:flex-start}.ec-btn{width:100%;justify-content:center}}

.testi-split{display:grid;grid-template-columns:1.15fr 1fr;gap:22px;margin-top:26px;align-items:stretch}
.testi-stories{display:grid;grid-template-columns:1fr 1fr;grid-template-rows:1fr 1fr;gap:16px}
.tstory{background:#fff;border:1.5px solid var(--mist-soft,#E4EBF2);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--sh1);display:flex;flex-direction:row;transition:transform .22s ease,box-shadow .22s ease}
.tstory:hover{transform:translateY(-4px);box-shadow:var(--sh2)}
.dark .tstory{background:var(--surface-2)}
.tstory-photo{position:relative;width:40%;flex-shrink:0;overflow:hidden;background:linear-gradient(160deg,#173a86,#0a3a9e)}
.tstory-photo img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease}
.tstory:hover .tstory-photo img{transform:scale(1.05)}
.tstory-tag{position:absolute;top:8px;left:8px;background:rgba(255,255,255,.94);color:var(--navy);font-weight:800;font-size:.62rem;padding:4px 9px;border-radius:99px;box-shadow:var(--sh1)}
.tstory-body{padding:14px 15px;display:flex;flex-direction:column;flex:1;justify-content:center}
.tstory-body h4{color:var(--navy);font-size:.88rem;margin:0 0 5px;line-height:1.25}
.dark .tstory-body h4{color:#fff}
.tstory-body blockquote{font-size:.76rem;color:var(--text-soft);margin:0 0 9px;line-height:1.45;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
.tstory-body b{font-size:.8rem;color:var(--navy)}
.dark .tstory-body b{color:#fff}
.tstory-body span{font-size:.7rem;color:var(--text-soft);display:block}
.testi-video-wide{background:#fff;border:1.5px solid var(--mist-soft,#E4EBF2);border-radius:var(--r-lg);overflow:hidden;cursor:pointer;display:flex;flex-direction:column;transition:transform .22s ease,box-shadow .22s ease;box-shadow:var(--sh1)}
.testi-video-wide:hover{transform:translateY(-4px);box-shadow:var(--sh2)}
.dark .testi-video-wide{background:var(--surface-2)}
.tvw-thumb{position:relative;aspect-ratio:16/9;overflow:hidden;background:linear-gradient(160deg,#173a86,#0a3a9e)}
.tvw-thumb img{width:100%;height:100%;object-fit:cover;display:block}
.tvw-tag{position:absolute;top:14px;left:14px;background:rgba(16,30,66,.86);color:#fff;font-weight:800;font-size:.76rem;padding:7px 14px;border-radius:99px;display:inline-flex;align-items:center;gap:7px}
.tvw-tag i{width:0;height:0;border-left:9px solid #fff;border-top:6px solid transparent;border-bottom:6px solid transparent;display:inline-block}
.testi-video-wide .play{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:70px;height:70px;border-radius:50%;background:#ff2d2d;box-shadow:0 8px 26px rgba(0,0,0,.4)}
.testi-video-wide .play::after{content:"";position:absolute;top:50%;left:55%;transform:translate(-50%,-50%);width:0;height:0;border-left:22px solid #fff;border-top:14px solid transparent;border-bottom:14px solid transparent}
.tvw-body{padding:22px 22px 24px}
.tvw-body h4{color:var(--navy);font-size:1.12rem;margin:0 0 8px;line-height:1.35}
.dark .tvw-body h4{color:#fff}
.tvw-body p{font-size:.9rem;color:var(--text-soft);margin:0;line-height:1.55}
@media(max-width:1023.98px){.testi-split{grid-template-columns:1fr}.testi-video-wide{position:static}}
@media(max-width:520px){.testi-stories{grid-template-columns:1fr}}
</style>
<section class="a-hero ihero">
  <div class="wrap inner">
    <div class="reveal">
      <div class="ichips">
        <span class="ichip o ifl">2 ACADEMIC CREDITS</span>
        <span class="ichip n ifl">90–120 HOURS</span>
        <span class="ichip m ifl">FYUGP · NEP 2020</span>
      </div>
      <h1>Your FYUGP internship in Kerala, inside a company <span class="serif">doing real work.</span></h1>
      <p>FYUGP says every 3rd and 4th year student needs a credited internship with a real industry partner. Most end up at certificate mills. You could end up shipping live projects inside Cokonet Technologies, a 16-year-old IT company, and it goes on your transcript. Aligned with Internship Kerala and KSHEC.</p>
      <div style="display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="#" onclick="openModal(event)">Grab a seat <span class="arr">→</span></a><a class="btn btn-navy" href="#structure">See how it works</a></div>

    </div>
      <svg class="spark ifl" style="top:6%;left:44%;--r:0deg" viewBox="0 0 24 24" width="26" height="26" fill="currentColor"><path d="M12 0l2.2 7.8L22 10l-7.8 2.2L12 20l-2.2-7.8L2 10l7.8-2.2z"/></svg>
      <svg class="spark y" style="top:62%;left:2%;animation-delay:1s" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 0l2.2 7.8L22 10l-7.8 2.2L12 20l-2.2-7.8L2 10l7.8-2.2z"/></svg>
      <svg class="spark" style="top:2%;right:8%;animation-delay:1.8s" viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 0l2.2 7.8L22 10l-7.8 2.2L12 20l-2.2-7.8L2 10l7.8-2.2z"/></svg>
    <div class="icollage reveal">
      <div class="icard c1"><img src="/assets/img/interns-cover.jpg" alt="Last year's interns, now at Allianz, Deloitte, Accenture, RM India and TRUSPEQ" style="object-position:center 20%"><span class="cap">last year's batch · now at Allianz, Deloitte, Accenture…</span></div>
      <div class="icard c2"><img src="/assets/img/intern-thumbsup.jpg" alt="A Cokonet intern celebrating a presented project" style="object-position:center 12%"><span class="cap">portfolio project ✓ presented ✓</span></div>
      <div class="ichip-float ifl" style="top:6px;right:-4px"><b>2</b>credits, on transcript</div>
      <div class="ichip-float ifl" style="bottom:20px;left:-10px"><b>5</b>domains to pick</div>
    </div>
  </div>
</section>
<div class="itick" aria-hidden="true"><div class="itk-in">
  <span>AI <i>✦</i></span><span>PYTHON <i>✦</i></span><span>DATA ANALYTICS <i>✦</i></span><span>AWS DEVOPS <i>✦</i></span><span>SAP <i>✦</i></span><span>2 CREDITS <i>✦</i></span><span>LIVE PROJECTS <i>✦</i></span><span>ANY DEGREE <i>✦</i></span>
  <span>AI <i>✦</i></span><span>PYTHON <i>✦</i></span><span>DATA ANALYTICS <i>✦</i></span><span>AWS DEVOPS <i>✦</i></span><span>SAP <i>✦</i></span><span>2 CREDITS <i>✦</i></span><span>LIVE PROJECTS <i>✦</i></span><span>ANY DEGREE <i>✦</i></span>
</div></div>


<section class="sec" id="apply" style="background:linear-gradient(135deg,var(--navy) 0%,#0a3a9e 100%);padding:56px 0">
  <div class="wrap" style="display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap">
    <div>
      <h2 style="color:#fff;font-size:clamp(1.4rem,3vw,1.9rem);margin:0 0 6px">Ready to apply for a seat?</h2>
      <p style="color:#C5D4E2;margin:0;font-weight:600">Takes two minutes. A coordinator calls back within one working day.</p>
    </div>
    <div style="display:flex;gap:14px;flex-wrap:wrap">
      <a class="btn btn-primary" href="#" onclick="openModal(event)">Apply as a student <span class="arr">→</span></a>
      <a class="btn" href="#" onclick="openModal(event)" style="background:#fff;color:var(--navy)">Partner as a college</a>
    </div>
  </div>
</section>
<section class="sec" id="fyugp">
  <div class="wrap">
    <span class="eyebrow reveal">Okay, quick catch-up</span>
    <h2 class="st reveal">What is the FYUGP internship <span class="serif">requirement in Kerala?</span></h2>
    <p class="lede reveal">FYUGP, the Four Year Undergraduate Programme under NEP 2020, requires every undergraduate across Kerala's universities, including the University of Kerala, MG University, Calicut University, Kannur University, CUSAT and KTU, to complete a credited, structured internship with a recognised industry partner. Not a webinar. Not a certificate PDF. Actual supervised work that lands on your transcript. The only real question is where you do yours.</p>
    <div class="ibento">
      <div class="ib w2 orange reveal"><h4>The work is real, because the company is real</h4><p>Cokonet Technologies has delivered enterprise projects for 16 years: SAP systems, AWS cloud, Python apps and BI platforms for clients in banking, healthcare and manufacturing. You intern inside that, not next to it.</p></div>
      <div class="ib reveal"><span class="big">1→2</span><h4>Train first, then do</h4><p>Skills gap? Cokonet Academy levels you up first, then deploys you on live work. Nobody gets thrown in blind.</p></div>
      <div class="ib reveal"><span class="big">AI</span><h4>AI in everything</h4><p>Use AI like professionals do: research, debug, polish. Not banned here. Trained.</p></div>
      <div class="ib photo reveal"><img src="/assets/img/team-wide.jpg" alt="The Cokonet Technologies team"></div>
      <div class="ib navy reveal"><span class="big" style="color:var(--orange)">✓</span><h4>Credits, documented</h4><p>Hour logs, assessments and certificates in exactly the format Kerala University wants. Your FYUGP cell will love us.</p></div>
      <div class="ib w2 reveal"><h4>The people before you didn't stay interns</h4><p>Adharsh → RM India. Maneesha → Allianz. Gokul Raj → Deloitte. Geethu → Accenture. Alan → TRUSPEQ. The cover of our brochure is literally a placement board.</p></div>
    </div>
  </div>
</section>


<section class="sec" style="padding-top:0">
  <div class="wrap">
    <span class="eyebrow reveal">A peek inside</span>
    <h2 class="st reveal">What the internship <span class="serif">actually looks like.</span></h2>
    <div class="igallery">
      <div class="ig-item ig-big reveal"><img alt="Cokonet FYUGP interns" src="/assets/img/interns-group-wide.jpg" style="object-position:center 30%"/></div>
      <div class="ig-item reveal"><img alt="An intern presenting their final project" src="/assets/img/intern-thumbsup-tight.jpg" style="object-position:center 15%"/></div>
      <div class="ig-item reveal"><img alt="A Cokonet alumnus now working at a placement partner" src="/assets/img/alumni-portrait.jpg" style="object-position:center 12%"/></div>
      <div class="ig-item reveal"><img alt="The Cokonet Technologies team" src="/assets/img/team-wide.jpg"/></div>
      <div class="ig-item reveal"><img alt="Cokonet mentors guiding interns" src="/assets/img/mentors.jpg" style="object-position:center 30%"/></div>
    </div>
  </div>
</section>
<section class="sec" id="structure" style="background:#fff">
  <div class="wrap" style="display:grid;grid-template-columns:1.05fr .95fr;gap:40px;align-items:start" id="structgrid">
    <div>
      <span class="eyebrow reveal">The programme</span>
      <h2 class="st reveal">Five stages. Zero <span class="serif">passive learning.</span></h2>
<div class="reveal" style="display:grid;grid-template-columns:84px 1fr;gap:20px;padding:22px 0;border-bottom:2px dashed var(--mist);align-items:start">
      <span style="font-family:Georgia,serif;font-style:italic;font-size:2.9rem;font-weight:700;color:var(--orange);line-height:1">01</span>
      <div><h4 style="color:var(--navy);margin:0 0 4px;font-size:1.12rem">Technical training on live tools</h4><p style="margin:0;color:var(--text-soft)">Domain-specific, hands-on work on the same enterprise platforms our delivery teams use daily.</p></div></div><div class="reveal" style="display:grid;grid-template-columns:84px 1fr;gap:20px;padding:22px 0;border-bottom:2px dashed var(--mist);align-items:start">
      <span style="font-family:Georgia,serif;font-style:italic;font-size:2.9rem;font-weight:700;color:var(--orange);line-height:1">02</span>
      <div><h4 style="color:var(--navy);margin:0 0 4px;font-size:1.12rem">AI woven through everything</h4><p style="margin:0;color:var(--text-soft)">Use AI the way working professionals do: research, debugging, insight generation, output quality.</p></div></div><div class="reveal" style="display:grid;grid-template-columns:84px 1fr;gap:20px;padding:22px 0;border-bottom:2px dashed var(--mist);align-items:start">
      <span style="font-family:Georgia,serif;font-style:italic;font-size:2.9rem;font-weight:700;color:var(--orange);line-height:1">03</span>
      <div><h4 style="color:var(--navy);margin:0 0 4px;font-size:1.12rem">Personality and communication</h4><p style="margin:0;color:var(--text-soft)">Workplace behaviour, confidence, business English. Technical skills alone will not carry the interview.</p></div></div><div class="reveal" style="display:grid;grid-template-columns:84px 1fr;gap:20px;padding:22px 0;border-bottom:2px dashed var(--mist);align-items:start">
      <span style="font-family:Georgia,serif;font-style:italic;font-size:2.9rem;font-weight:700;color:var(--orange);line-height:1">04</span>
      <div><h4 style="color:var(--navy);margin:0 0 4px;font-size:1.12rem">Weekly assignments and reviews</h4><p style="margin:0;color:var(--text-soft)">Assignments, mid-programme assessments and mentor reviews keep it real and tracked, not passive.</p></div></div><div class="reveal" style="display:grid;grid-template-columns:84px 1fr;gap:20px;padding:22px 0;border-bottom:2px dashed var(--mist);align-items:start">
      <span style="font-family:Georgia,serif;font-style:italic;font-size:2.9rem;font-weight:700;color:var(--orange);line-height:1">05</span>
      <div><h4 style="color:var(--navy);margin:0 0 4px;font-size:1.12rem">Final project, presented by you</h4><p style="margin:0;color:var(--text-soft)">A portfolio-ready project you present yourself: the confidence of having actually done something.</p></div></div>
    </div>
    <div>
      <div class="iphotoband reveal" style="margin-top:60px;transform:rotate(1.5deg)"><img src="/assets/img/mentors.jpg" alt="Mentors: Shruthi Sreedhar, Aabid Sakir, Ampady Vamanan, Sreeja S Nair, Tonia Lawrence"></div>
      <div class="iphotoband reveal" style="transform:rotate(-1.5deg)"><img src="/assets/img/alumni-trio.jpg" alt="Cokonet alumni now at Allianz" style="max-height:420px;object-fit:cover;object-position:center 18%"></div>
      <p class="reveal" style="font-size:.85rem;color:var(--text-soft);margin-top:14px">↑ Your mentor bench: COO Shruthi Sreedhar (ex UST · Allianz), Aabid Sakir (ex Google Ads), Ampady Vamanan (ex BYJU'S), Sreeja S Nair and Tonia Lawrence, plus alumni who made it to Allianz.</p>
    </div>
  </div>
</section>

<section class="sec" id="tracks">
  <div class="wrap">
    <span class="eyebrow reveal">Pick your lane</span>
    <h2 class="st reveal">Five tracks. Thirty-plus <span class="serif">programmes.</span></h2>
    <p class="lede reveal">Any degree works: arts, science, commerce or engineering. Swipe →</p>
    <div class="itracks">
      <div class="itr reveal"><span class="ic">AI</span><h4>Artificial Intelligence</h4><p>Work with the AI tools professionals actually use, on tasks that matter to a live business.</p></div>
      <div class="itr reveal"><span class="ic">PY</span><h4>Python</h4><p>Ship Python applications alongside our engineering team, code review included.</p></div>
      <div class="itr reveal"><span class="ic">DA</span><h4>Data Analytics</h4><p>Build business intelligence dashboards that leadership actually reads.</p></div>
      <div class="itr reveal"><span class="ic">AW</span><h4>AWS DevOps</h4><p>Cloud infrastructure that stays up: deploys, pipelines and monitoring on real AWS.</p></div>
      <div class="itr reveal"><span class="ic">SAP</span><h4>SAP</h4><p>Finance and procurement configuration inside real SAP landscapes, one of Kerala's biggest-hiring enterprise platforms.</p></div>
    </div>
    <div class="explore-courses reveal">
      <div class="ec-cta-flex">
        <div class="ec-head">
          <span class="eyebrow" style="color:var(--orange)">Genuinely curious about one of these?</span>
          <h3 style="color:#fff;font-size:1.42rem;margin:6px 0 6px">The internship is a taste. The course goes deep.</h3>
          <p style="color:#C5D4E2;margin:0;font-size:.96rem">If 90 hours leaves you wanting more, our full courses cover AI, Python, Data Analytics, AWS DevOps, SAP and more in real depth, with certification prep and placement support.</p>
        </div>
        <a class="btn btn-primary ec-btn" href="/#courses">Explore all courses <span class="arr">→</span></a>
      </div>
    </div>

    <div class="iquotes">
      <div class="iq reveal"><blockquote>I carry the dreams of thousands who deserve a better career than what the system offers today.</blockquote>
        <div class="who"><img src="/assets/img/nikhil.jpg" alt="Nikhil Gopalan" style="object-position:center 8%"><div><b>Nikhil Gopalan</b><span>Founder &amp; CEO · Ex TCS, UST, SAP</span></div></div></div>
      <div class="iq reveal"><blockquote>Students learn and then actually do the work, under the same roof, before they graduate. That is not a training programme. That is a career head start.</blockquote>
        <div class="who"><img src="/assets/img/yogarajan.jpg" alt="P.G. Yogarajan" style="object-position:center 10%"><div><b>P.G. Yogarajan</b><span>Chairman · Ex Sub-Registrar, Kerala University</span></div></div></div>
    </div>
    <div class="inums">
      <div class="inm reveal"><b data-count="16">0</b><span>years in enterprise tech</span></div>
      <div class="inm reveal"><b data-count="6000" data-suffix="+">0</b><span>trained &amp; placed</span></div>
      <div class="inm reveal"><b data-count="200" data-suffix="+">0</b><span>hiring companies</span></div>
      <div class="inm reveal"><b data-count="500" data-suffix="+">0</b><span>alumni in MNCs</span></div>
      <div class="inm reveal"><b data-count="50" data-suffix="+">0</b><span>college partnerships</span></div>
    </div>
    </div>
  </div>
</section>


<section class="sec" id="testimonials">
  <div class="wrap">
    <span class="eyebrow reveal">In their own words</span>
    <h2 class="st reveal">Hear it from students, <span class="serif">not just from us.</span></h2>
    <div class="testi-split">
      <div class="testi-stories">
        <div class="tstory reveal">
          <div class="tstory-photo"><img alt="Anjali, Cokonet FYUGP intern" src="/assets/img/alumni-portrait-2.jpg"/><span class="tstory-tag">Data Analytics</span></div>
          <div class="tstory-body"><h4>From Excel to dashboards</h4><blockquote>I walked in knowing Excel and nothing else. Six weeks later I was building dashboards our trainer said clients would actually use.</blockquote><b>Anjali S.</b><span>B.Com, MG University</span></div>
        </div>
        <div class="tstory reveal">
          <div class="tstory-photo"><img alt="Rahul, Cokonet FYUGP intern" src="/assets/img/alumni-portrait.jpg"/><span class="tstory-tag">SAP</span></div>
          <div class="tstory-body"><h4>A project, not just credits</h4><blockquote>My college FYUGP cell just wanted the credits done. I got a portfolio project I still show in interviews.</blockquote><b>Rahul K.</b><span>BBA, University of Kerala</span></div>
        </div>
        <div class="tstory reveal">
          <div class="tstory-photo"><img alt="Fathima, Cokonet FYUGP intern" src="/assets/img/intern-thumbsup-tight.jpg" style="object-position:center 12%"/><span class="tstory-tag">AI</span></div>
          <div class="tstory-body"><h4>Not scared of coding anymore</h4><blockquote>I was scared of coding. The AI track met me where I was and by the final project I was not scared anymore.</blockquote><b>Fathima N.</b><span>B.Sc, Calicut University</span></div>
        </div>
        <div class="tstory reveal">
          <div class="tstory-photo"><img alt="Devika, Cokonet FYUGP intern" src="/assets/img/alumni-portrait-3.jpg"/><span class="tstory-tag">Python</span></div>
          <div class="tstory-body"><h4>Placed before I graduated</h4><blockquote>The internship became a conversation, and the conversation became an offer. I had a job lined up before my final semester.</blockquote><b>Devika R.</b><span>B.Sc, University of Kerala</span></div>
        </div>
      </div>
      <div class="testi-video-wide reveal ivideo" data-vid="YOUTUBE_ID_INTERNSHIP_1">
        <div class="tvw-thumb"><img alt="Video testimonial: why students choose Cokonet" src="/assets/img/team-wide.jpg"/><span class="tvw-tag"><i></i>Watch · 2 min</span><span class="play"></span></div>
        <div class="tvw-body"><h4>"Why I chose Cokonet over a certificate-only internship"</h4><p>Hear directly from a student about doing real project work inside an IT company, and what that meant when interviews came around.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="sec" id="alumni-companies" style="background:#fff">
  <div class="wrap">
    <span class="eyebrow reveal">Where they work now</span>
    <h2 class="st reveal">Cokonet alumni and interns, <span class="serif">out in the field.</span></h2>
    <p class="lede reveal">A sample of the enterprises Cokonet-trained talent works at today, across SAP, cloud and data teams.</p>
    <div aria-label="Companies where Cokonet alumni and interns work" class="marquee reveal">
      <div class="mq-row"><div class="brand"><svg aria-label="TCS" class="blogo" role="img" viewbox="0 0 24 24"><path d="M24 16.262c0-1.305-.522-2.174-1.827-3.088l-1.785-1.24c-.033-.022-.06-.045-.092-.068-.629-.473-.91-.912-.91-1.43 0-.696.567-1.13 1.371-1.13 1.022 0 1.503.477 2.111.477.479 0 .805-.326.805-.804 0-.348-.174-.631-.631-.848-.718-.348-1.503-.48-2.35-.48-.892 0-1.676.262-2.241.697a.984.984 0 0 0 0-.001 3.64 3.64 0 0 0-.326.283l-.008.01c-.65.695-1.19 1.714-1.623 3.145l-.501 1.652c-.893 2.912-2.306 4.304-4.504 4.304-2.415 0-3.938-1.675-3.938-4.153v.026-.025c0-2.468 1.509-4.159 3.69-4.174l.03-.002a4.857 4.857 0 0 1 2.089.457c.282.13.522.174.74.174.1 0 .192-.017.279-.041.362-.103.592-.408.592-.83 0-.326-.196-.653-.653-.87-.827-.414-1.894-.653-3.046-.653-.86 0-1.653.152-2.359.436-2.117.851-3.452 2.886-3.452 5.545l.002-.024-.001.024c0 .931.169 1.783.479 2.536-.452.985-1.143 1.509-2.046 1.509-1.087 0-1.804-.63-1.806-2.06V9.477h2.546c.588 0 .979-.348.979-.848s-.39-.848-.98-.848H2.09V5.563c0-.653-.435-1.088-1.044-1.088C.435 4.475 0 4.911 0 5.563v10.285c0 2.393 1.37 3.655 3.7 3.655.486.001.97-.08 1.43-.24h.005a3.49 3.49 0 0 0 1.81-1.514c1.034 1.117 2.565 1.775 4.48 1.775.999 0 1.868-.195 2.65-.607h.003c1.588-.827 2.72-2.502 3.503-5.068l.457-1.5a2.984 2.984 0 0 1-.162-.234c.308.492.785.953 1.468 1.43l1.631 1.13c.244.17.463.34.668.51.289.322.378.67.378 1.078 0 .935-.74 1.566-1.807 1.566-1.022 0-1.893-.522-2.371-.522s-.806.325-.806.804c0 .348.174.63.632.848.631.304 1.653.566 2.567.566 1.153 0 2.111-.348 2.785-.957a1.59 1.59 0 0 0 .156-.161A3.104 3.104 0 0 0 24 16.262z" fill="#00549F"></path></svg></div><div class="brand"><svg aria-label="Accenture" class="blogo" role="img" viewbox="0 0 24 24"><path d="m.66 16.95 13.242-4.926L.66 6.852V0l22.68 9.132v5.682L.66 24Z" fill="#A100FF"></path></svg></div><div class="brand"><svg aria-label="Infosys" class="blogo" role="img" viewbox="0 0 24 24"><path d="M23.2734 7.5703c-.3984 0-.7246.3282-.7246.7266 0 .4013.3262.7246.7246.7246.3982 0 .7266-.3233.7266-.7246 0-.3984-.3284-.7266-.7266-.7266zm0 .1074c.3395 0 .6192.2795.6192.6192 0 .3396-.2797.6172-.6192.6172-.3397 0-.6171-.2776-.6171-.6172 0-.3397.2774-.6192.6171-.6192zm-15.1367.0547c-.9001 0-1.549.5917-1.6387 1.6406h-.6953v.5215h.6856c.0028 1.6664-.002 3.334-.002 4.998h.7774c-.0022-1.6659-.002-3.3319-.002-4.998h1.748c-.646.5242-1.0663 1.3739-1.0663 2.334 0 1.593 1.1564 2.8848 2.582 2.8848 1.4258 0 2.582-1.2918 2.582-2.8848 0-.1896-.0174-.3753-.0488-.5547.2565.4131.7488.6133 1.4082.8985.7784.329 1.2129.6165 1.2129 1.1074 0 .5885-.556.8955-1.1817.8906-.611 0-1.0883-.249-1.6191-.7305v.9239c.3239.2088.8256.3281 1.3691.3281.6844-.0023 2.0918-.249 2.0918-1.6758-.0044-.8557-.715-1.2239-1.4863-1.5586-.9383-.4653-1.2965-.5629-1.2871-1.0957 0-.7088.6178-.9219 1.0996-.9219.2099 0 .3891.0293.5586.086.3163.1194.4209.3553.5332.6113.5283 1.2356 1.0344 2.4811 1.5488 3.7227-.2464.5637-.526 1.1519-.7168 1.5273l-.0039.0098-.1601.2969-.1797.336h.7617c.3322-.7342 1.7436-4.1688 2.0469-4.9083.1995.533.6857.7467 1.4297 1.0684.7783.329 1.2148.6166 1.2148 1.1074 0 .5886-.5562.8936-1.1816.8887-.6348 0-1.1257-.2685-1.6817-.7871l-.0507-.041v.9413c.3115.259.8713.4102 1.4824.4102.6844-.0022 2.0918-.249 2.0918-1.6758-.0042-.8557-.7151-1.2258-1.4863-1.5605-.9384-.4654-1.2593-.563-1.25-1.0957 0-.709.5787-.9219 1.0605-.9219.5483 0 .8958.2037 1.379.5547V9.584c-.3923-.1381-.7212-.1915-1.1642-.1895-.8912-.0018-1.6966.3234-1.9004 1.0762l-1.1054 2.7344-.1153.3437-.1015-.3437c-.5022-1.2089-.9934-2.4236-1.4863-3.6309-.3154-.0828-.8307-.201-1.1934-.1953-.0377-.0007-.0758-.0002-.1152 0-1.0302-.002-2.0235.4332-2.0235 1.457 0 .0596.0022.1155.006.17-.412-.9813-1.3036-1.6602-2.338-1.6602-.1245 0-.2472.0085-.3672.0273H7.254c-.1194-.733.2228-1.1503.7383-1.1503.6472-.0006.9242.192 1.205.4511 0 0 .0195-.0007.0274 0 .0038-.2457.002-.5318.002-.7949-.185-.0857-.5061-.1465-1.0899-.1465zM0 7.756v7.1367h.8594V7.7559zm23 .1386v.7657h.1387v-.3086h.164l.1192.3086h.1543l-.1407-.3301c.0494-.0248.1329-.0518.1329-.1875 0-.2224-.1673-.248-.3125-.248zm.1387.1328h.1543c.0834 0 .1289.0337.1289.1016 0 .068-.0524.0996-.1172.0996h-.166zM4.1719 9.3555c-.945 0-1.3429.3359-1.6582.6738a.2474.2474 0 00-.0352.0644h-.0078v-.043l-.0098-.623H1.707v5.4649h.7754v-3.9961c.0226-.4905.7134-.9746 1.252-.9746.6477 0 1.1777.4364 1.1777 1.039v3.9317h.7754c-.0019-1.429-.002-2.858-.002-4.2871-.0234-.4835-.6094-1.25-1.5136-1.25zm6.2832.5566c.9741-.0175 1.7825 1.0214 1.8047 2.3184.022 1.297-.7504 2.3614-1.7246 2.3789-.9742.0171-1.7825-1.0195-1.8047-2.3164-.0221-1.2971.7503-2.3634 1.7246-2.3809Z" fill="#007CC3"></path></svg></div><div class="brand"><svg aria-label="Wipro" class="blogo" role="img" viewbox="0 0 24 24"><path d="M15.5415 12.0352c0-.8754-.69-1.5851-1.541-1.5851-.8513 0-1.5415.7097-1.5415 1.585 0 .8757.6902 1.5854 1.5416 1.5854.851 0 1.541-.7097 1.541-1.5853zm-1.541.837c-.4373 0-.7927-.3755-.7927-.837 0-.4611.3554-.8366.7928-.8366.437 0 .7923.3755.7923.8366 0 .4615-.3554.837-.7923.837zm-9.5842-2.2084l-.9272 2.8733c-.0148.046-.0665.0835-.1152.0835h-.084c-.0484 0-.1064-.0352-.1287-.078l-.95-1.8242-.9496 1.8243c-.0225.0427-.0803.0779-.1289.0779h-.0842c-.0483 0-.1002-.0374-.115-.0835L.006 10.6638c-.0222-.0693.019-.126.0915-.126h.5677c.0483 0 .1002.0379.115.084l.4688 1.452.8047-1.5458c.0223-.0428.0804-.0779.1289-.0779H2.24c.0485 0 .1063.0351.1289.0779l.805 1.5458.4685-1.452c.0148-.0461.0667-.084.1152-.084h.5672c.0727 0 .1138.0567.0915.126zm1.368 2.7367a.1323.1323 0 01-.1321.1322h-.5726a.1321.1321 0 01-.132-.1322v-2.7304c0-.0729.059-.1322.132-.1322h.5726a.1323.1323 0 01.1322.1322v2.7304zm.7409-2.7305v4.3155c0 .0733.059.1322.1321.1322h.5725a.1318.1318 0 00.132-.1322v-1.497c.2426.085.5106.132.7927.132.8024 0 1.4531-.7097 1.4531-1.5853 0-.8754-.6507-1.5851-1.4531-1.5851-.394 0-.751.171-1.0127.4487l-.0002-.0004-.1018-.2777c-.0167-.0453-.07-.0829-.1183-.0829h-.2642a.1321.1321 0 00-.1321.1322zm.8365.9c.1376-.2239.3713-.3714.6373-.3714.4235 0 .7667.3746.7667.8366 0 .4622-.3432.837-.7667.837-.2396 0-.4599-.063-.6373-.1694V11.57zm3.5755 1.9627h-.5723a.1321.1321 0 01-.1321-.1321V10.67c0-.0729.059-.1322.1321-.1322h.2642c.0483 0 .1016.0376.1183.0829l.1018.2777s.3195-.4483.87-.4483c.5507 0 .6172.1897.5712.2947-.0463.1047-.1714.3878-.197.4454-.0254.058-.0903.099-.1772.0657-.087-.0335-.5128-.1723-.8469.2329v1.9118a.1323.1323 0 01-.1321.1321zm4.6893-10.3422a.704.704 0 01.8628-.4977.7043.7043 0 11-.3647 1.3607.7046.7046 0 01-.498-.863zm1.8466 2.7892a.5286.5286 0 01.1935.722.528.528 0 01-.7218.193.5281.5281 0 01-.1935-.7215.5281.5281 0 01.7218-.1935zm.664 10.9686a.5727.5727 0 010-.8099.5722.5722 0 01.8096 0 .5727.5727 0 010 .81.573.573 0 01-.8095 0zm-2.4577-7.377a.2423.2423 0 01-.4196-.2423.2422.2422 0 11.4196.2422zm-.4196 5.1001a.2423.2423 0 01.4196-.2422.2425.2425 0 01-.0888.331.2426.2426 0 01-.3308-.0888zm3.7296-2.6713a.517.517 0 11-.5169-.5169.517.517 0 01.517.5169zM17.816 3.8893a.7485.7485 0 111.2962.749.7485.7485 0 01-1.2962-.749zm-5.43 10.5742a.154.154 0 11.2666.154.154.154 0 01-.2666-.154zm2.8037-8.7912a.4842.4842 0 11.9354.2502.4843.4843 0 01-.593.3428.4844.4844 0 01-.3424-.593zM13.993 7.8486a.308.308 0 110-.6162.308.308 0 110 .6162zm0 1.0129a.1982.1982 0 11.0002.3962.1982.1982 0 01-.0002-.3962zm0-2.84a.4404.4404 0 110-.881.4404.4404 0 010 .881zm-1.6072 3.5154a.154.154 0 11.2102.0564.1537.1537 0 01-.2102-.0564zm1.6072 5.602a.1982.1982 0 11-.0001-.3963.1982.1982 0 010 .3964zm0 1.0127a.3081.3081 0 010 .6165.3081.3081 0 110-.6165zm3.4944-2.1381a.4399.4399 0 01.6014-.161.44.44 0 01.161.6013.4402.4402 0 01-.7624-.4403zm-3.4944 3.9655a.4404.4404 0 11-.0002.8808.4404.4404 0 01.0002-.8808zm9.5772-8.5426c.1383.5164-.168 1.0476-.6848 1.186-.5165.1383-1.0478-.1684-1.1861-.6849-.1386-.5164.1682-1.0475.6847-1.186.5165-.1384 1.0476.168 1.1862.6849zm-6.694 6.0018a.3963.3963 0 01.5602-.5607.396.396 0 010 .5602.3958.3958 0 01-.5602.0005zm.9736-4.4694a.484.484 0 01.3424-.5928.4841.4841 0 11.2507.9353.484.484 0 01-.593-.3425zm1.4076-2.7157a.6165.6165 0 01.6166 1.0676.6165.6165 0 01-.6166-1.0676zm-.3108-.3913a.5722.5722 0 01-.8095 0 .5725.5725 0 010-.8097.5722.5722 0 01.8095 0 .5725.5725 0 010 .8097zm-1.0968 5.1692a.4842.4842 0 01.9355.2509.4842.4842 0 11-.9355-.251zm-3.0186-5.4263a.3303.3303 0 01.4041-.2336.3303.3303 0 01-.1706.6381.3303.3303 0 01-.2335-.4045zm6.4676-.835c.4213-.2434.96-.0992 1.2031.3218a.8806.8806 0 11-1.5254.8808c-.2429-.421-.0987-.9596.3223-1.2027zm-3.049 2.777a.4401.4401 0 11-.7624.4402.4401.4401 0 11.7624-.4402zm1.3227.9608a.6606.6606 0 01.4667-.8089.6605.6605 0 01.342 1.2758.6605.6605 0 01-.8087-.467zm0 2.9854a.6603.6603 0 111.2756.3416.6602.6602 0 11-1.2756-.3416zm.8594-.7354a.7574.7574 0 11-.0002-1.5146.7574.7574 0 01.0002 1.5146zm-.6756-6.5149a.7921.7921 0 010-1.1207c.3095-.3095.8115-.31 1.1209 0a.7926.7926 0 01-1.1209 1.1207zm-3.2223 2.068a.3522.3522 0 11-.61-.3523.3522.3522 0 01.61.3522zm-.6387 5.5862a.2642.2642 0 01.3738-.0004.2646.2646 0 010 .3738.2638.2638 0 01-.3738 0 .2637.2637 0 010-.3734zm0-4.1666a.2642.2642 0 01.3738-.0004.2642.2642 0 11-.3738.0004zm.5146 3.9917a.2868.2868 0 01-.105-.391.2862.2862 0 01.3912-.1046.2863.2863 0 01-.2862.4956zm-.486 2.3203a.352.352 0 01.129-.4811.352.352 0 01.4811.1288.352.352 0 01-.1289.4811.3521.3521 0 01-.4811-.1288zm.877-5.659a.286.286 0 01-.1048.3909.2867.2867 0 01-.3911-.1049.2862.2862 0 01.4958-.286zm-.2485.9334a.3082.3082 0 11.5955-.1596.3082.3082 0 01-.5955.1596zm0 1.3668a.3083.3083 0 11.5953.1602.3083.3083 0 01-.5953-.1602zm.4008-.3467a.3366.3366 0 11.0001-.6731.3366.3366 0 01-.0001.6731zm.4832-3.7744a.3963.3963 0 11-.5602.5608.3963.3963 0 01.5602-.5608zm-7.416 11.4507a.573.573 0 01-.782.2096.5726.5726 0 01.5725-.9916.5725.5725 0 01.2096.782zM14.814 8.945a.2202.2202 0 11-.114.4253.2202.2202 0 01.114-.4254zm-2.5387 11.8366a.6164.6164 0 11-1.1908-.3189.6164.6164 0 011.1908.319zm2.5387-5.726a.2203.2203 0 01-.1138-.4255.22.22 0 11.1138.4254zm-.1604 5.8739a.6603.6603 0 01-.6604.6602.6603.6603 0 01-.6606-.6602c0-.3649.2959-.6608.6606-.6608.3647 0 .6604.296.6604.6608zm-1.4693-5.9217a.1767.1767 0 01-.1247-.2158.1766.1766 0 01.216-.1245.1761.1761 0 01-.0913.3403zm-.0712 1.3712a.2863.2863 0 11-.5526-.1478.2863.2863 0 01.5526.1478zm-2.795-2.2726a.2202.2202 0 01-.3812.2202.2195.2195 0 01.0805-.3005.2198.2198 0 01.3007.0803zm1.6704 1.8817a.2642.2642 0 11-.4578-.2638.2642.2642 0 01.4578.2638zm.0148-1.8253a.1321.1321 0 11-.1869-.1869.1328.1328 0 01.187 0 .1325.1325 0 010 .187zm-.9966.81a.242.242 0 11-.3423.342.2418.2418 0 010-.342.2417.2417 0 01.3423 0zm.0783 2.7563a.3518.3518 0 01-.4811.1289.3522.3522 0 11.4811-.1289zm9.7924.0285a.7926.7926 0 010 1.121c-.3094.3097-.8114.3093-1.121 0-.3097-.3094-.3095-.8114 0-1.121a.793.793 0 011.121 0zm-1.6198-2.0103a.6169.6169 0 01-.2255-.8423.6168.6168 0 01.842-.2255.6165.6165 0 01-.6166 1.0678zm3.2445 1.1612c-.243.4214-.7818.5656-1.203.3223-.4211-.243-.5653-.7816-.3224-1.2026.2437-.4211.782-.5655 1.203-.3224.4213.2433.5657.7816.3224 1.2027zm-7.2666-.2796a.33.33 0 11-.1706-.638.3301.3301 0 01.1706.638zM24 12c0 .584-.4735 1.058-1.058 1.058-.5843 0-1.0578-.474-1.0578-1.058 0-.5842.4735-1.0579 1.0579-1.0579S24 11.4159 24 12.0001zm-.4297 2.564c-.1386.5164-.6697.8233-1.1862.685-.5165-.1387-.8233-.6698-.6847-1.1862.1383-.5169.6696-.8234 1.1861-.685.5169.1386.8231.6697.6848 1.1861zm-6.583 5.881a.7044.7044 0 11-1.3608.3643.7042.7042 0 01.4981-.8625.7043.7043 0 01.8628.4981zm2.1248-1.0825a.748.748 0 01-.274 1.0221.7482.7482 0 01-1.0222-.2738.748.748 0 01.2738-1.0224.7484.7484 0 011.0224.274zm-3.9225-1.0344a.4843.4843 0 11.9355-.2507.4843.4843 0 01-.9355.2507zm2.2835-.3077a.5284.5284 0 11-.5284-.9153.5284.5284 0 01.5284.9153zm-4.761.2798a.3963.3963 0 01-.7655-.205.396.396 0 01.4853-.2803.3964.3964 0 01.2802.4853zm-.8958-8.2762a.132.132 0 11.1868-.1869.132.132 0 01-.1868.1869zm.0754-1.651a.2643.2643 0 01-.2643-.4576.2642.2642 0 01.2643.4576zm-.8072-4.8355a.6164.6164 0 111.1905-.3188.6164.6164 0 01-1.1905.3188zm-.847 6.0555a.22.22 0 11-.2201.3812.2195.2195 0 01-.0806-.3004.22.22 0 01.3006-.0808zm.7691-.908a.2423.2423 0 01-.3423.3426.2423.2423 0 01.3423-.3426zm-.5319-2.0617a.3524.3524 0 01.6102-.352.3522.3522 0 01-.6102.352zm2.8578-3.5523c0-.3648.2959-.6608.6606-.6608.3647 0 .6604.296.6604.6608a.6606.6606 0 01-.6604.6607.6608.6608 0 01-.6606-.6607zm-.1483 5.9215a.1761.1761 0 11.091.3404.1761.1761 0 01-.091-.3404zm-.9575-3.5729a.3964.3964 0 01.2053.7657.3962.3962 0 01-.4854-.2802.3966.3966 0 01.28-.4855zm.5358 1.9992a.2863.2863 0 11.148.553.2863.2863 0 01-.148-.553zM9.0292 4.5596a.5724.5724 0 01.2094-.7818.5725.5725 0 01.5724.9914.572.572 0 01-.7818-.2096zm-.37 10.5048a.2643.2643 0 11-.458.264.2643.2643 0 01.458-.264zM4.9193 9.4585a.462.462 0 01.566-.3267.462.462 0 01.327.5658.4621.4621 0 01-.5661.3271.4624.4624 0 01-.327-.5662zm.9001-2.1691a.4843.4843 0 11.1772.6616.4845.4845 0 01-.1772-.6616zm2.2292 10.6412a.528.528 0 010 .7472.5286.5286 0 01-.7473 0 .5285.5285 0 010-.7472.5282.5282 0 01.7473 0zM6.676 16.2091a.4842.4842 0 11-.8386.4845.4842.4842 0 01.8386-.4845zm.6255-10.1393a.5285.5285 0 010-.7472.5286.5286 0 01.7473 0 .528.528 0 010 .7472.5282.5282 0 01-.7473 0zM9.6679 7.689a.3086.3086 0 01-.436 0 .3085.3085 0 010-.4362.3086.3086 0 01.436 0 .3085.3085 0 010 .4362zm0 8.6225a.3082.3082 0 11-.4359.4359.3082.3082 0 01.4359-.436zM8.2015 8.6719a.2642.2642 0 11.4574.2642.2642.2642 0 01-.4574-.2642z" fill="#341C53"></path></svg></div><div class="brand"><svg aria-label="HCLTech" class="blogo" role="img" viewbox="0 0 24 24"><path d="M21.3968 10.4013l-1.0971 2.4399H24l-.3435.7629H17.294l1.4331-3.2028zm-6.3985 1.0896h2.4633c-.0152-.5377-.5358-.911-1.5672-1.0592-2.0348-.2994-4.2354-.1718-5.802.6934-1.2346.6859-1.329 1.7176-.099 2.2232 1.0357.4218 3.2106.4656 4.767.201 1.0077-.1712 1.7776-.502 2.2093-.9974H14.454c-.3262.251-.7526.376-1.25.3804-1.4124.0094-1.5988-.4182-1.3525-.9106.293-.5801.9075-.8966 1.8447-.9216.7381-.0199 1.1029.1436 1.3021.3908M0 13.6067h2.604l.5578-1.2789h2.553l-.5732 1.2771h2.635l1.4457-3.2031h-2.653l-.4769 1.0807H3.5421l.4831-1.0807-2.5781-.0006Z" fill="#006BB6"></path></svg></div><div class="brand"><svg aria-label="TCS" class="blogo" role="img" viewbox="0 0 24 24"><path d="M24 16.262c0-1.305-.522-2.174-1.827-3.088l-1.785-1.24c-.033-.022-.06-.045-.092-.068-.629-.473-.91-.912-.91-1.43 0-.696.567-1.13 1.371-1.13 1.022 0 1.503.477 2.111.477.479 0 .805-.326.805-.804 0-.348-.174-.631-.631-.848-.718-.348-1.503-.48-2.35-.48-.892 0-1.676.262-2.241.697a.984.984 0 0 0 0-.001 3.64 3.64 0 0 0-.326.283l-.008.01c-.65.695-1.19 1.714-1.623 3.145l-.501 1.652c-.893 2.912-2.306 4.304-4.504 4.304-2.415 0-3.938-1.675-3.938-4.153v.026-.025c0-2.468 1.509-4.159 3.69-4.174l.03-.002a4.857 4.857 0 0 1 2.089.457c.282.13.522.174.74.174.1 0 .192-.017.279-.041.362-.103.592-.408.592-.83 0-.326-.196-.653-.653-.87-.827-.414-1.894-.653-3.046-.653-.86 0-1.653.152-2.359.436-2.117.851-3.452 2.886-3.452 5.545l.002-.024-.001.024c0 .931.169 1.783.479 2.536-.452.985-1.143 1.509-2.046 1.509-1.087 0-1.804-.63-1.806-2.06V9.477h2.546c.588 0 .979-.348.979-.848s-.39-.848-.98-.848H2.09V5.563c0-.653-.435-1.088-1.044-1.088C.435 4.475 0 4.911 0 5.563v10.285c0 2.393 1.37 3.655 3.7 3.655.486.001.97-.08 1.43-.24h.005a3.49 3.49 0 0 0 1.81-1.514c1.034 1.117 2.565 1.775 4.48 1.775.999 0 1.868-.195 2.65-.607h.003c1.588-.827 2.72-2.502 3.503-5.068l.457-1.5a2.984 2.984 0 0 1-.162-.234c.308.492.785.953 1.468 1.43l1.631 1.13c.244.17.463.34.668.51.289.322.378.67.378 1.078 0 .935-.74 1.566-1.807 1.566-1.022 0-1.893-.522-2.371-.522s-.806.325-.806.804c0 .348.174.63.632.848.631.304 1.653.566 2.567.566 1.153 0 2.111-.348 2.785-.957a1.59 1.59 0 0 0 .156-.161A3.104 3.104 0 0 0 24 16.262z" fill="#00549F"></path></svg></div><div class="brand"><svg aria-label="Accenture" class="blogo" role="img" viewbox="0 0 24 24"><path d="m.66 16.95 13.242-4.926L.66 6.852V0l22.68 9.132v5.682L.66 24Z" fill="#A100FF"></path></svg></div><div class="brand"><svg aria-label="Infosys" class="blogo" role="img" viewbox="0 0 24 24"><path d="M23.2734 7.5703c-.3984 0-.7246.3282-.7246.7266 0 .4013.3262.7246.7246.7246.3982 0 .7266-.3233.7266-.7246 0-.3984-.3284-.7266-.7266-.7266zm0 .1074c.3395 0 .6192.2795.6192.6192 0 .3396-.2797.6172-.6192.6172-.3397 0-.6171-.2776-.6171-.6172 0-.3397.2774-.6192.6171-.6192zm-15.1367.0547c-.9001 0-1.549.5917-1.6387 1.6406h-.6953v.5215h.6856c.0028 1.6664-.002 3.334-.002 4.998h.7774c-.0022-1.6659-.002-3.3319-.002-4.998h1.748c-.646.5242-1.0663 1.3739-1.0663 2.334 0 1.593 1.1564 2.8848 2.582 2.8848 1.4258 0 2.582-1.2918 2.582-2.8848 0-.1896-.0174-.3753-.0488-.5547.2565.4131.7488.6133 1.4082.8985.7784.329 1.2129.6165 1.2129 1.1074 0 .5885-.556.8955-1.1817.8906-.611 0-1.0883-.249-1.6191-.7305v.9239c.3239.2088.8256.3281 1.3691.3281.6844-.0023 2.0918-.249 2.0918-1.6758-.0044-.8557-.715-1.2239-1.4863-1.5586-.9383-.4653-1.2965-.5629-1.2871-1.0957 0-.7088.6178-.9219 1.0996-.9219.2099 0 .3891.0293.5586.086.3163.1194.4209.3553.5332.6113.5283 1.2356 1.0344 2.4811 1.5488 3.7227-.2464.5637-.526 1.1519-.7168 1.5273l-.0039.0098-.1601.2969-.1797.336h.7617c.3322-.7342 1.7436-4.1688 2.0469-4.9083.1995.533.6857.7467 1.4297 1.0684.7783.329 1.2148.6166 1.2148 1.1074 0 .5886-.5562.8936-1.1816.8887-.6348 0-1.1257-.2685-1.6817-.7871l-.0507-.041v.9413c.3115.259.8713.4102 1.4824.4102.6844-.0022 2.0918-.249 2.0918-1.6758-.0042-.8557-.7151-1.2258-1.4863-1.5605-.9384-.4654-1.2593-.563-1.25-1.0957 0-.709.5787-.9219 1.0605-.9219.5483 0 .8958.2037 1.379.5547V9.584c-.3923-.1381-.7212-.1915-1.1642-.1895-.8912-.0018-1.6966.3234-1.9004 1.0762l-1.1054 2.7344-.1153.3437-.1015-.3437c-.5022-1.2089-.9934-2.4236-1.4863-3.6309-.3154-.0828-.8307-.201-1.1934-.1953-.0377-.0007-.0758-.0002-.1152 0-1.0302-.002-2.0235.4332-2.0235 1.457 0 .0596.0022.1155.006.17-.412-.9813-1.3036-1.6602-2.338-1.6602-.1245 0-.2472.0085-.3672.0273H7.254c-.1194-.733.2228-1.1503.7383-1.1503.6472-.0006.9242.192 1.205.4511 0 0 .0195-.0007.0274 0 .0038-.2457.002-.5318.002-.7949-.185-.0857-.5061-.1465-1.0899-.1465zM0 7.756v7.1367h.8594V7.7559zm23 .1386v.7657h.1387v-.3086h.164l.1192.3086h.1543l-.1407-.3301c.0494-.0248.1329-.0518.1329-.1875 0-.2224-.1673-.248-.3125-.248zm.1387.1328h.1543c.0834 0 .1289.0337.1289.1016 0 .068-.0524.0996-.1172.0996h-.166zM4.1719 9.3555c-.945 0-1.3429.3359-1.6582.6738a.2474.2474 0 00-.0352.0644h-.0078v-.043l-.0098-.623H1.707v5.4649h.7754v-3.9961c.0226-.4905.7134-.9746 1.252-.9746.6477 0 1.1777.4364 1.1777 1.039v3.9317h.7754c-.0019-1.429-.002-2.858-.002-4.2871-.0234-.4835-.6094-1.25-1.5136-1.25zm6.2832.5566c.9741-.0175 1.7825 1.0214 1.8047 2.3184.022 1.297-.7504 2.3614-1.7246 2.3789-.9742.0171-1.7825-1.0195-1.8047-2.3164-.0221-1.2971.7503-2.3634 1.7246-2.3809Z" fill="#007CC3"></path></svg></div><div class="brand"><svg aria-label="Wipro" class="blogo" role="img" viewbox="0 0 24 24"><path d="M15.5415 12.0352c0-.8754-.69-1.5851-1.541-1.5851-.8513 0-1.5415.7097-1.5415 1.585 0 .8757.6902 1.5854 1.5416 1.5854.851 0 1.541-.7097 1.541-1.5853zm-1.541.837c-.4373 0-.7927-.3755-.7927-.837 0-.4611.3554-.8366.7928-.8366.437 0 .7923.3755.7923.8366 0 .4615-.3554.837-.7923.837zm-9.5842-2.2084l-.9272 2.8733c-.0148.046-.0665.0835-.1152.0835h-.084c-.0484 0-.1064-.0352-.1287-.078l-.95-1.8242-.9496 1.8243c-.0225.0427-.0803.0779-.1289.0779h-.0842c-.0483 0-.1002-.0374-.115-.0835L.006 10.6638c-.0222-.0693.019-.126.0915-.126h.5677c.0483 0 .1002.0379.115.084l.4688 1.452.8047-1.5458c.0223-.0428.0804-.0779.1289-.0779H2.24c.0485 0 .1063.0351.1289.0779l.805 1.5458.4685-1.452c.0148-.0461.0667-.084.1152-.084h.5672c.0727 0 .1138.0567.0915.126zm1.368 2.7367a.1323.1323 0 01-.1321.1322h-.5726a.1321.1321 0 01-.132-.1322v-2.7304c0-.0729.059-.1322.132-.1322h.5726a.1323.1323 0 01.1322.1322v2.7304zm.7409-2.7305v4.3155c0 .0733.059.1322.1321.1322h.5725a.1318.1318 0 00.132-.1322v-1.497c.2426.085.5106.132.7927.132.8024 0 1.4531-.7097 1.4531-1.5853 0-.8754-.6507-1.5851-1.4531-1.5851-.394 0-.751.171-1.0127.4487l-.0002-.0004-.1018-.2777c-.0167-.0453-.07-.0829-.1183-.0829h-.2642a.1321.1321 0 00-.1321.1322zm.8365.9c.1376-.2239.3713-.3714.6373-.3714.4235 0 .7667.3746.7667.8366 0 .4622-.3432.837-.7667.837-.2396 0-.4599-.063-.6373-.1694V11.57zm3.5755 1.9627h-.5723a.1321.1321 0 01-.1321-.1321V10.67c0-.0729.059-.1322.1321-.1322h.2642c.0483 0 .1016.0376.1183.0829l.1018.2777s.3195-.4483.87-.4483c.5507 0 .6172.1897.5712.2947-.0463.1047-.1714.3878-.197.4454-.0254.058-.0903.099-.1772.0657-.087-.0335-.5128-.1723-.8469.2329v1.9118a.1323.1323 0 01-.1321.1321zm4.6893-10.3422a.704.704 0 01.8628-.4977.7043.7043 0 11-.3647 1.3607.7046.7046 0 01-.498-.863zm1.8466 2.7892a.5286.5286 0 01.1935.722.528.528 0 01-.7218.193.5281.5281 0 01-.1935-.7215.5281.5281 0 01.7218-.1935zm.664 10.9686a.5727.5727 0 010-.8099.5722.5722 0 01.8096 0 .5727.5727 0 010 .81.573.573 0 01-.8095 0zm-2.4577-7.377a.2423.2423 0 01-.4196-.2423.2422.2422 0 11.4196.2422zm-.4196 5.1001a.2423.2423 0 01.4196-.2422.2425.2425 0 01-.0888.331.2426.2426 0 01-.3308-.0888zm3.7296-2.6713a.517.517 0 11-.5169-.5169.517.517 0 01.517.5169zM17.816 3.8893a.7485.7485 0 111.2962.749.7485.7485 0 01-1.2962-.749zm-5.43 10.5742a.154.154 0 11.2666.154.154.154 0 01-.2666-.154zm2.8037-8.7912a.4842.4842 0 11.9354.2502.4843.4843 0 01-.593.3428.4844.4844 0 01-.3424-.593zM13.993 7.8486a.308.308 0 110-.6162.308.308 0 110 .6162zm0 1.0129a.1982.1982 0 11.0002.3962.1982.1982 0 01-.0002-.3962zm0-2.84a.4404.4404 0 110-.881.4404.4404 0 010 .881zm-1.6072 3.5154a.154.154 0 11.2102.0564.1537.1537 0 01-.2102-.0564zm1.6072 5.602a.1982.1982 0 11-.0001-.3963.1982.1982 0 010 .3964zm0 1.0127a.3081.3081 0 010 .6165.3081.3081 0 110-.6165zm3.4944-2.1381a.4399.4399 0 01.6014-.161.44.44 0 01.161.6013.4402.4402 0 01-.7624-.4403zm-3.4944 3.9655a.4404.4404 0 11-.0002.8808.4404.4404 0 01.0002-.8808zm9.5772-8.5426c.1383.5164-.168 1.0476-.6848 1.186-.5165.1383-1.0478-.1684-1.1861-.6849-.1386-.5164.1682-1.0475.6847-1.186.5165-.1384 1.0476.168 1.1862.6849zm-6.694 6.0018a.3963.3963 0 01.5602-.5607.396.396 0 010 .5602.3958.3958 0 01-.5602.0005zm.9736-4.4694a.484.484 0 01.3424-.5928.4841.4841 0 11.2507.9353.484.484 0 01-.593-.3425zm1.4076-2.7157a.6165.6165 0 01.6166 1.0676.6165.6165 0 01-.6166-1.0676zm-.3108-.3913a.5722.5722 0 01-.8095 0 .5725.5725 0 010-.8097.5722.5722 0 01.8095 0 .5725.5725 0 010 .8097zm-1.0968 5.1692a.4842.4842 0 01.9355.2509.4842.4842 0 11-.9355-.251zm-3.0186-5.4263a.3303.3303 0 01.4041-.2336.3303.3303 0 01-.1706.6381.3303.3303 0 01-.2335-.4045zm6.4676-.835c.4213-.2434.96-.0992 1.2031.3218a.8806.8806 0 11-1.5254.8808c-.2429-.421-.0987-.9596.3223-1.2027zm-3.049 2.777a.4401.4401 0 11-.7624.4402.4401.4401 0 11.7624-.4402zm1.3227.9608a.6606.6606 0 01.4667-.8089.6605.6605 0 01.342 1.2758.6605.6605 0 01-.8087-.467zm0 2.9854a.6603.6603 0 111.2756.3416.6602.6602 0 11-1.2756-.3416zm.8594-.7354a.7574.7574 0 11-.0002-1.5146.7574.7574 0 01.0002 1.5146zm-.6756-6.5149a.7921.7921 0 010-1.1207c.3095-.3095.8115-.31 1.1209 0a.7926.7926 0 01-1.1209 1.1207zm-3.2223 2.068a.3522.3522 0 11-.61-.3523.3522.3522 0 01.61.3522zm-.6387 5.5862a.2642.2642 0 01.3738-.0004.2646.2646 0 010 .3738.2638.2638 0 01-.3738 0 .2637.2637 0 010-.3734zm0-4.1666a.2642.2642 0 01.3738-.0004.2642.2642 0 11-.3738.0004zm.5146 3.9917a.2868.2868 0 01-.105-.391.2862.2862 0 01.3912-.1046.2863.2863 0 01-.2862.4956zm-.486 2.3203a.352.352 0 01.129-.4811.352.352 0 01.4811.1288.352.352 0 01-.1289.4811.3521.3521 0 01-.4811-.1288zm.877-5.659a.286.286 0 01-.1048.3909.2867.2867 0 01-.3911-.1049.2862.2862 0 01.4958-.286zm-.2485.9334a.3082.3082 0 11.5955-.1596.3082.3082 0 01-.5955.1596zm0 1.3668a.3083.3083 0 11.5953.1602.3083.3083 0 01-.5953-.1602zm.4008-.3467a.3366.3366 0 11.0001-.6731.3366.3366 0 01-.0001.6731zm.4832-3.7744a.3963.3963 0 11-.5602.5608.3963.3963 0 01.5602-.5608zm-7.416 11.4507a.573.573 0 01-.782.2096.5726.5726 0 01.5725-.9916.5725.5725 0 01.2096.782zM14.814 8.945a.2202.2202 0 11-.114.4253.2202.2202 0 01.114-.4254zm-2.5387 11.8366a.6164.6164 0 11-1.1908-.3189.6164.6164 0 011.1908.319zm2.5387-5.726a.2203.2203 0 01-.1138-.4255.22.22 0 11.1138.4254zm-.1604 5.8739a.6603.6603 0 01-.6604.6602.6603.6603 0 01-.6606-.6602c0-.3649.2959-.6608.6606-.6608.3647 0 .6604.296.6604.6608zm-1.4693-5.9217a.1767.1767 0 01-.1247-.2158.1766.1766 0 01.216-.1245.1761.1761 0 01-.0913.3403zm-.0712 1.3712a.2863.2863 0 11-.5526-.1478.2863.2863 0 01.5526.1478zm-2.795-2.2726a.2202.2202 0 01-.3812.2202.2195.2195 0 01.0805-.3005.2198.2198 0 01.3007.0803zm1.6704 1.8817a.2642.2642 0 11-.4578-.2638.2642.2642 0 01.4578.2638zm.0148-1.8253a.1321.1321 0 11-.1869-.1869.1328.1328 0 01.187 0 .1325.1325 0 010 .187zm-.9966.81a.242.242 0 11-.3423.342.2418.2418 0 010-.342.2417.2417 0 01.3423 0zm.0783 2.7563a.3518.3518 0 01-.4811.1289.3522.3522 0 11.4811-.1289zm9.7924.0285a.7926.7926 0 010 1.121c-.3094.3097-.8114.3093-1.121 0-.3097-.3094-.3095-.8114 0-1.121a.793.793 0 011.121 0zm-1.6198-2.0103a.6169.6169 0 01-.2255-.8423.6168.6168 0 01.842-.2255.6165.6165 0 01-.6166 1.0678zm3.2445 1.1612c-.243.4214-.7818.5656-1.203.3223-.4211-.243-.5653-.7816-.3224-1.2026.2437-.4211.782-.5655 1.203-.3224.4213.2433.5657.7816.3224 1.2027zm-7.2666-.2796a.33.33 0 11-.1706-.638.3301.3301 0 01.1706.638zM24 12c0 .584-.4735 1.058-1.058 1.058-.5843 0-1.0578-.474-1.0578-1.058 0-.5842.4735-1.0579 1.0579-1.0579S24 11.4159 24 12.0001zm-.4297 2.564c-.1386.5164-.6697.8233-1.1862.685-.5165-.1387-.8233-.6698-.6847-1.1862.1383-.5169.6696-.8234 1.1861-.685.5169.1386.8231.6697.6848 1.1861zm-6.583 5.881a.7044.7044 0 11-1.3608.3643.7042.7042 0 01.4981-.8625.7043.7043 0 01.8628.4981zm2.1248-1.0825a.748.748 0 01-.274 1.0221.7482.7482 0 01-1.0222-.2738.748.748 0 01.2738-1.0224.7484.7484 0 011.0224.274zm-3.9225-1.0344a.4843.4843 0 11.9355-.2507.4843.4843 0 01-.9355.2507zm2.2835-.3077a.5284.5284 0 11-.5284-.9153.5284.5284 0 01.5284.9153zm-4.761.2798a.3963.3963 0 01-.7655-.205.396.396 0 01.4853-.2803.3964.3964 0 01.2802.4853zm-.8958-8.2762a.132.132 0 11.1868-.1869.132.132 0 01-.1868.1869zm.0754-1.651a.2643.2643 0 01-.2643-.4576.2642.2642 0 01.2643.4576zm-.8072-4.8355a.6164.6164 0 111.1905-.3188.6164.6164 0 01-1.1905.3188zm-.847 6.0555a.22.22 0 11-.2201.3812.2195.2195 0 01-.0806-.3004.22.22 0 01.3006-.0808zm.7691-.908a.2423.2423 0 01-.3423.3426.2423.2423 0 01.3423-.3426zm-.5319-2.0617a.3524.3524 0 01.6102-.352.3522.3522 0 01-.6102.352zm2.8578-3.5523c0-.3648.2959-.6608.6606-.6608.3647 0 .6604.296.6604.6608a.6606.6606 0 01-.6604.6607.6608.6608 0 01-.6606-.6607zm-.1483 5.9215a.1761.1761 0 11.091.3404.1761.1761 0 01-.091-.3404zm-.9575-3.5729a.3964.3964 0 01.2053.7657.3962.3962 0 01-.4854-.2802.3966.3966 0 01.28-.4855zm.5358 1.9992a.2863.2863 0 11.148.553.2863.2863 0 01-.148-.553zM9.0292 4.5596a.5724.5724 0 01.2094-.7818.5725.5725 0 01.5724.9914.572.572 0 01-.7818-.2096zm-.37 10.5048a.2643.2643 0 11-.458.264.2643.2643 0 01.458-.264zM4.9193 9.4585a.462.462 0 01.566-.3267.462.462 0 01.327.5658.4621.4621 0 01-.5661.3271.4624.4624 0 01-.327-.5662zm.9001-2.1691a.4843.4843 0 11.1772.6616.4845.4845 0 01-.1772-.6616zm2.2292 10.6412a.528.528 0 010 .7472.5286.5286 0 01-.7473 0 .5285.5285 0 010-.7472.5282.5282 0 01.7473 0zM6.676 16.2091a.4842.4842 0 11-.8386.4845.4842.4842 0 01.8386-.4845zm.6255-10.1393a.5285.5285 0 010-.7472.5286.5286 0 01.7473 0 .528.528 0 010 .7472.5282.5282 0 01-.7473 0zM9.6679 7.689a.3086.3086 0 01-.436 0 .3085.3085 0 010-.4362.3086.3086 0 01.436 0 .3085.3085 0 010 .4362zm0 8.6225a.3082.3082 0 11-.4359.4359.3082.3082 0 01.4359-.436zM8.2015 8.6719a.2642.2642 0 11.4574.2642.2642.2642 0 01-.4574-.2642z" fill="#341C53"></path></svg></div><div class="brand"><svg aria-label="HCLTech" class="blogo" role="img" viewbox="0 0 24 24"><path d="M21.3968 10.4013l-1.0971 2.4399H24l-.3435.7629H17.294l1.4331-3.2028zm-6.3985 1.0896h2.4633c-.0152-.5377-.5358-.911-1.5672-1.0592-2.0348-.2994-4.2354-.1718-5.802.6934-1.2346.6859-1.329 1.7176-.099 2.2232 1.0357.4218 3.2106.4656 4.767.201 1.0077-.1712 1.7776-.502 2.2093-.9974H14.454c-.3262.251-.7526.376-1.25.3804-1.4124.0094-1.5988-.4182-1.3525-.9106.293-.5801.9075-.8966 1.8447-.9216.7381-.0199 1.1029.1436 1.3021.3908M0 13.6067h2.604l.5578-1.2789h2.553l-.5732 1.2771h2.635l1.4457-3.2031h-2.653l-.4769 1.0807H3.5421l.4831-1.0807-2.5781-.0006Z" fill="#006BB6"></path></svg></div></div>
    </div>
  </div>
</section>

<section class="sec" id="colleges" style="background:#fff">
  <div class="wrap">
    <span class="eyebrow reveal">For your college: show this to your FYUGP cell</span>
    <h2 class="st reveal">Getting your college in takes one MoU and <span class="serif">two weeks.</span></h2>
    <div class="steps" style="margin-top:26px">
      <div class="step reveal"><span class="n">1</span><h4>Discovery call</h4><p>30 minutes with your placement or FYUGP cell. Bring questions.</p></div>
      <div class="step reveal"><span class="n">2</span><h4>Simple MoU</h4><p>Credits, hours and supervision, on paper.</p></div>
      <div class="step reveal"><span class="n">3</span><h4>Batches, your calendar</h4><p>On campus, at our Trivandrum or Kochi centres, or hybrid.</p></div>
      <div class="step reveal"><span class="n">4</span><h4>Credit documentation</h4><p>Certificates, hour logs and assessments in Kerala University's format.</p></div>
    </div>
    <div class="counsel-strip reveal"><div><span class="c-face" style="background:url(assets/face.jpg) center/cover;color:transparent">.</span><div class="ct"><b>Your students are ready to work.</b><span>We give them the right place to prove it. Seats fill batch by batch.</span></div></div><a class="btn btn-primary" href="#" onclick="openModal(event)">Apply / partner now</a></div>
  </div>
</section>

<section class="sec" id="faq">
  <div class="wrap" style="max-width:860px">
    <span class="eyebrow reveal">Real questions</span>
    <h2 class="st reveal">FYUGP internship questions, <span class="serif">answered straight.</span></h2>
    <div class="acc reveal">
      <details open><summary>Is this internship valid for FYUGP credit at any Kerala university? <span class="plus">+</span></summary><div class="ab">Yes. The programme is aligned with the Kerala State Higher Education Council (KSHEC) internship mandate that applies statewide, across the University of Kerala, MG University, Calicut University, Kannur University, CUSAT, KTU and other FYUGP-affiliated institutions. Confirm your college's specific credit-mapping process with your FYUGP coordinator before you start.</div></details>
      <details><summary>Is Cokonet the same as the Internship Kerala portal (internshipkerala.org)? <span class="plus">+</span></summary><div class="ab">No, they are different things. Internship Kerala is the state government's own registration portal, run by KSHEC and KELTRON. Cokonet is an independent IT company offering its own structured FYUGP track. Either route can satisfy your college's internship requirement; ask your FYUGP coordinator which route your college prefers.</div></details>
      <details><summary>I'm from a non-tech degree. Am I really eligible? <span class="plus">+</span></summary><div class="ab">Yes. FYUGP applies to every graduate programme, arts, science, commerce and engineering, and so do we. Tracks are matched to your background during onboarding, and Academy training brings you to project level before live work starts. No prior coding is assumed.</div></details>
      <details><summary>How many hours and credits does the Cokonet FYUGP internship carry? <span class="plus">+</span></summary><div class="ab">2 academic credits for 90 to 120 hours of supervised work. Hour logs and assessment records are delivered in the format Kerala's universities require for credit mapping. Internships statewide are officially categorised as paid, non-paid or stipend-supported, so ask your coordinator which category applies to your college's requirement.</div></details>
      <details><summary>Is this actual work or watching videos for 90 hours? <span class="plus">+</span></summary><div class="ab">Actual work, in the right order. Training on live tools first, then real tasks inside Cokonet Technologies, an IT company based in Trivandrum with operations in Kochi and Bengaluru that has served enterprise clients for 16 years. Weekly assignments, mentor reviews and a final project you present yourself.</div></details>
      <details><summary>What do I actually walk away with? <span class="plus">+</span></summary><div class="ab">2 academic credits on your transcript, 90 to 120 logged hours, a portfolio-ready project, assessment records, a completion certificate, and hands-on exposure to SAP, AWS, Python, analytics and AI, the platforms Kerala's IT employers hire for.</div></details>
      <details><summary>Does this help me get placed later? <span class="plus">+</span></summary><div class="ab">It is designed to. Interns from previous batches are now at Allianz, Deloitte, Accenture, RM India and TRUSPEQ. No guarantees and no fake promises, but a genuinely unfair head start into Kerala's IT hiring pipeline.</div></details>
      <details><summary>Where does the internship happen: Trivandrum, Kochi or online? <span class="plus">+</span></summary><div class="ab">On campus at Cokonet's Trivandrum and Kochi centres, or hybrid with remote sessions, depending on your track and college MoU. Students outside these cities can ask about hybrid scheduling when they apply.</div></details>
      <details><summary>My college isn't a partner yet. What do I do? <span class="plus">+</span></summary><div class="ab">Nudge your FYUGP cell to book the 30 minute discovery call, which typically closes in one MoU and two weeks, or apply individually and Cokonet will help coordinate the credit paperwork with your college.</div></details>
    </div>
  </div>
</section>
<script>
(function(){var io2=new IntersectionObserver(function(es){es.forEach(function(x){if(!x.isIntersecting)return;var b=x.target,t=+b.dataset.count,suf=b.dataset.suffix||'',s=performance.now();function f(n){var p=Math.min((n-s)/1200,1);b.textContent=Math.round(t*(0.2+0.8*p*p))+(p===1?suf:'');if(p<1)requestAnimationFrame(f);else b.innerHTML=t+'<em>'+suf+'</em>'}requestAnimationFrame(f);io2.unobserve(b)})},{threshold:.6});document.querySelectorAll('[data-count]').forEach(function(el){io2.observe(el)})})();
</script>
<style>@media(max-width:960px){#structgrid{grid-template-columns:1fr!important}}</style>
<?php require __DIR__.'/includes/footer.php'; ?>
<div class="scrim" id="scrim" onclick="if(event.target===this)closeModal()">
<div aria-labelledby="mTitle" aria-modal="true" class="modal" role="dialog">
<div class="modal-top"><span class="c-face" style="background:url(assets/face.jpg) center/cover;color:transparent">.</span><div>
<button aria-label="Close" class="x" onclick="closeModal()">✕</button>
<h4 id="mTitle">Apply for the FYUGP internship</h4>
<p>Tell us your track and college; a coordinator calls back within one working day. Verified by OTP. Never sold or shared.</p></div>
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
<div class="field"><label for="mi">Which track interests you?</label>
<select id="mi"><option>AI</option><option>Python</option><option>Data Analytics</option><option>AWS DevOps</option><option>SAP</option><option>Not sure, recommend for me</option></select>
</div>
<button class="btn btn-primary" disabled="" id="mSubmit" onclick="submitLead()" style="width:100%">Submit application</button>
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
