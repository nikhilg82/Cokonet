const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.1});
document.querySelectorAll('.reveal').forEach((el,i)=>{el.style.transitionDelay=((i%4)*80)+'ms';io.observe(el)});
const cio=new IntersectionObserver(es=>{es.forEach(e=>{if(!e.isIntersecting)return;cio.unobserve(e.target);
  const t=+e.target.dataset.count,d=1600,s=performance.now();
  const step=n=>{const p=Math.min((n-s)/d,1),v=Math.floor(t*(1-Math.pow(1-p,3)));
  e.target.textContent=v.toLocaleString('en-IN')+(t>=1000?'+':t>=50?'+':'');if(p<1)requestAnimationFrame(step)};
  requestAnimationFrame(step)})},{threshold:.5});
document.querySelectorAll('[data-count]').forEach(el=>cio.observe(el));
function openModal(e){if(e)e.preventDefault();document.getElementById('scrim').classList.add('open');document.body.style.overflow='hidden'}
function closeModal(){document.getElementById('scrim').classList.remove('open');document.body.style.overflow=''}
function openMob(){document.getElementById('mobMenu').classList.add('open');document.querySelector('.burger').setAttribute('aria-expanded','true');document.body.style.overflow='hidden'}
function closeMob(){document.getElementById('mobMenu').classList.remove('open');document.querySelector('.burger').setAttribute('aria-expanded','false');document.body.style.overflow=''}

/* ---- OTP flow (frontend demo; wire sendOtp/verifyOtp to lead-capture API) ---- */
let otpTimerId=null;
function sendOtp(){
  const ph=document.getElementById('mp').value.trim();
  if(ph.length<7){document.getElementById('mp').focus();return}
  document.getElementById('otpRow').classList.add('show');
  document.getElementById('otpNote').classList.add('show');
  document.getElementById('otpBtn').textContent='Sent';
  let s=300;clearInterval(otpTimerId);
  otpTimerId=setInterval(()=>{s--;if(s<0){clearInterval(otpTimerId);return}
    document.getElementById('otpTimer').textContent=String(Math.floor(s/60)).padStart(2,'0')+':'+String(s%60).padStart(2,'0')},1000);
  document.getElementById('otp').focus();
}
function verifyOtp(){
  const v=document.getElementById('otp').value.trim();
  if(!/^\d{6}$/.test(v)){document.getElementById('otp').focus();return}
  clearInterval(otpTimerId);
  document.getElementById('otpRow').classList.remove('show');
  document.getElementById('otpNote').classList.remove('show');
  document.getElementById('verified').classList.add('show');
  document.getElementById('mSubmit').disabled=false;
  document.getElementById('mFine').textContent=window.CKN_MODAL_FINE_OK||'A real counsellor responds within 24 hours · Mon to Sat. By submitting you agree to be contacted about Cokonet programmes.';
}
function resetOtp(){
  document.getElementById('verified').classList.remove('show');
  document.getElementById('mSubmit').disabled=true;
  document.getElementById('otpBtn').textContent='Get OTP';
  document.getElementById('otp').value='';
  document.getElementById('mFine').textContent=window.CKN_MODAL_FINE_RESET||'Verify your number to continue. Your details stay private, verified by OTP and never sold or shared.';
  document.getElementById('mp').focus();
}
function submitLead(){
  if(!document.getElementById('mn').value.trim()){document.getElementById('mn').focus();return}
  try{
    var mi=document.getElementById('mi');
    fetch('/api/lead.php',{method:'POST',headers:{'Content-Type':'application/json'},
      body:JSON.stringify({name:document.getElementById('mn').value.trim(),
        phone:(document.getElementById('mcc')?document.getElementById('mcc').value:'+91')+document.getElementById('mp').value.trim(),
        interest:mi?mi.value:'', page:location.pathname, source:'counselling-modal'})}).catch(function(){});
  }catch(e){}
  document.getElementById('mForm').style.display='none';
  document.getElementById('mSuccess').classList.add('show');
}
document.addEventListener('keydown',e=>{if(e.key==='Escape'){closeModal();closeMob()}});
document.querySelectorAll('.ftab').forEach(t=>t.addEventListener('click',()=>{document.querySelectorAll('.ftab').forEach(x=>x.classList.remove('on'));t.classList.add('on')}));
document.querySelectorAll('.cat').forEach(c=>c.addEventListener('click',()=>{document.querySelectorAll('.cat').forEach(x=>x.classList.remove('on'));c.classList.add('on')}));

// dismissible top strip
(function(){var ts=document.querySelector('.top-strip'); if(!ts) return;
  if(sessionStorage.getItem('tsClosed')){ts.style.display='none'; return;}
  var x=document.createElement('button'); x.className='ts-x'; x.innerHTML='\u2715'; x.setAttribute('aria-label','Dismiss announcement');
  x.addEventListener('click',function(){ts.style.display='none'; try{sessionStorage.setItem('tsClosed','1')}catch(e){}});
  ts.appendChild(x);
})();

// theme toggle
function toggleTheme(){
  var d=document.documentElement.classList.toggle('dark');
  try{localStorage.setItem('ckTheme', d?'dark':'light')}catch(e){}
}

// footer newsletter
function cknSubscribe(f){
  var i=f.querySelector('input'); var em=(i&&i.value||'').trim();
  if(!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(em)){ if(i) i.focus(); return false; }
  try{ fetch('/api/subscribe.php',{method:'POST',headers:{'Content-Type':'application/json'},
    body:JSON.stringify({email:em,page:location.pathname})}).catch(function(){}); }catch(e){}
  f.innerHTML='<b style="color:#fff;font-size:.95rem">Joined. Batch alerts will land in your inbox.</b>';
  return false;
}
