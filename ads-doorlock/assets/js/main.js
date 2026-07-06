/* ================================================================
   AsaTech — Main JavaScript
   ================================================================ */

(function(){
'use strict';

/* ── Helpers ─────────────────────────────────────────────── */
const $  = (s, ctx = document) => ctx.querySelector(s);
const $$ = (s, ctx = document) => [...ctx.querySelectorAll(s)];
const on = (el, ev, fn) => el && el.addEventListener(ev, fn);

/* ================================================================
   1. HEADER — Sticky + Burger
   ================================================================ */
const hdr    = $('#site-header');
const burger = $('#hdrBurger');
const links  = $('#hdrLinks');

on(window, 'scroll', () => {
  if(!hdr) return;
  hdr.classList.toggle('stuck', window.scrollY > 40);
}, {passive:true});

on(burger, 'click', () => {
  const open = links.classList.toggle('open');
  const sp = $$('span', burger);
  sp[0].style.transform = open ? 'rotate(45deg) translate(5px,6px)' : '';
  sp[1].style.opacity   = open ? '0' : '1';
  sp[2].style.transform = open ? 'rotate(-45deg) translate(5px,-6px)' : '';
});

// Close on link click
$$('.hdr-link', links).forEach(a => on(a, 'click', () => {
  links.classList.remove('open');
  $$('span', burger).forEach(s => { s.style.transform=''; s.style.opacity='1'; });
}));

/* ── Smooth scroll ── */
$$('a[href^="#"]').forEach(a => {
  on(a, 'click', e => {
    const t = document.querySelector(a.getAttribute('href'));
    if(t){ e.preventDefault(); t.scrollIntoView({behavior:'smooth',block:'start'}); }
  });
});

/* ── Back to top ── */
const btt = $('#btt');
on(window, 'scroll', () => btt && btt.classList.toggle('show', window.scrollY > 400), {passive:true});
on(btt, 'click', () => window.scrollTo({top:0,behavior:'smooth'}));

/* ================================================================
   2. HERO CANVAS — Floating particles
   ================================================================ */
const canvas = $('#heroCanvas');
if(canvas){
  const ctx = canvas.getContext('2d');
  let W, H, pts = [];
  const resize = () => {
    W = canvas.width  = canvas.offsetWidth;
    H = canvas.height = canvas.offsetHeight;
  };
  resize();
  on(window,'resize', resize);

  const rand = (a,b) => Math.random()*(b-a)+a;
  for(let i=0;i<70;i++) pts.push({
    x:rand(0,1),y:rand(0,1),r:rand(.3,1.4),
    dx:rand(-.0003,.0003),dy:rand(-.0003,.0003),
    a:rand(.15,.5),
  });

  (function tick(){
    ctx.clearRect(0,0,W,H);
    pts.forEach(p => {
      p.x += p.dx; p.y += p.dy;
      if(p.x<0) p.x=1; if(p.x>1) p.x=0;
      if(p.y<0) p.y=1; if(p.y>1) p.y=0;
      ctx.beginPath();
      ctx.arc(p.x*W, p.y*H, p.r, 0, Math.PI*2);
      ctx.fillStyle = `rgba(96,165,250,${p.a})`;
      ctx.fill();
    });

    // Connect close ones
    for(let i=0;i<pts.length;i++) for(let j=i+1;j<pts.length;j++){
      const dx = (pts[i].x - pts[j].x)*W;
      const dy = (pts[i].y - pts[j].y)*H;
      const d  = Math.sqrt(dx*dx+dy*dy);
      if(d < 90){
        ctx.beginPath();
        ctx.moveTo(pts[i].x*W, pts[i].y*H);
        ctx.lineTo(pts[j].x*W, pts[j].y*H);
        ctx.strokeStyle = `rgba(96,165,250,${.08*(1-d/90)})`;
        ctx.lineWidth = .5;
        ctx.stroke();
      }
    }
    requestAnimationFrame(tick);
  })();
}

/* ================================================================
   3. REVEAL ON SCROLL
   ================================================================ */
const revealEls = $$('[data-reveal],[data-reveal-right]');
const revealObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if(!e.isIntersecting) return;
    const el    = e.target;
    const delay = parseInt(el.dataset.delay || 0);
    setTimeout(() => el.classList.add('in'), delay);
    revealObs.unobserve(el);
  });
},{threshold:.12, rootMargin:'0px 0px -40px 0px'});
revealEls.forEach(el => revealObs.observe(el));

/* ================================================================
   4. SWIPER INIT
   ================================================================ */
if(typeof Swiper !== 'undefined'){
  new Swiper('.portfolioSwiper',{
    slidesPerView:1, spaceBetween:20, loop:true,
    autoplay:{delay:3500,disableOnInteraction:false},
    pagination:{el:'.port-pag',clickable:true},
    breakpoints:{640:{slidesPerView:2},1024:{slidesPerView:3}},
  });
  new Swiper('.testiSwiper',{
    slidesPerView:1, spaceBetween:20, loop:true,
    autoplay:{delay:4000,disableOnInteraction:false},
    pagination:{el:'.testi-pag',clickable:true},
    breakpoints:{640:{slidesPerView:2}},
  });
}

/* ================================================================
   5. FAQ ACCORDION
   ================================================================ */
$$('.faq-q').forEach(btn => {
  on(btn,'click',() => {
    const item   = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    $$('.faq-item').forEach(i => i.classList.remove('open'));
    if(!isOpen) item.classList.add('open');
  });
});

/* ================================================================
   6. CHATBOT AI ENGINE
   ================================================================ */
const WA_NUMBER = '6281220660058';

const KB = [
  {
    patterns: ['harga','price','biaya','berapa','tarif','murah','mahal','cost'],
    answer: `<p>Harga Smart Door Lock kami mulai dari <strong>Rp 1.5 juta</strong> hingga <strong>Rp 8 juta+</strong> tergantung merek dan fitur.</p>
<p>Estimasi harga:</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>Fingerprint basic: Rp 1.5–2.5 jt</li>
  <li>Face Recognition: Rp 3–6 jt</li>
  <li>WiFi Smart Lock: Rp 2–5 jt</li>
  <li>Hotel system: Rp 1.2–3 jt/unit</li>
</ul>
<p>Harga termasuk <strong>instalasi + garansi resmi</strong>.</p>`,
    action: {label:'💬 Minta Penawaran Spesifik', url:`https://wa.me/${WA_NUMBER}?text=Halo+AsaTech,+saya+ingin+tahu+harga+smart+door+lock`},
  },
  {
    patterns: ['produk','jenis','tipe','type','macam','pilihan','ada apa','tersedia','katalog'],
    answer: `<p>Kami menyediakan <strong>8 jenis Smart Door Lock</strong>:</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.9">
  <li>🔵 Fingerprint Door Lock</li>
  <li>🟣 Face Recognition</li>
  <li>🟢 PIN Code Lock</li>
  <li>🔴 RFID Card Lock</li>
  <li>🔷 Bluetooth Lock</li>
  <li>🟡 WiFi Smart Lock</li>
  <li>🩷 Hotel Lock System</li>
  <li>🩵 Glass Door Lock</li>
</ul>
<p>Semua brand premium: Hikvision, ZKTeco, Philips, Yale, Samsung, Aqara.</p>`,
    action: {label:'🛍️ Lihat Semua Produk', url:'#products'},
  },
  {
    patterns: ['instalasi','pasang','install','proses','lama','berapa lama','waktu','prosedur'],
    answer: `<p><strong>Proses instalasi kami:</strong></p>
<ol style="margin:.4em 0 .4em 1.2em;line-height:1.9">
  <li>📞 Konsultasi via WhatsApp/telp</li>
  <li>📍 Survey lokasi <em>(gratis)</em></li>
  <li>📄 Penawaran harga transparan</li>
  <li>🔧 Instalasi 1–2 jam per unit</li>
  <li>📱 Training penggunaan</li>
  <li>🛡️ Garansi aktif</li>
</ol>
<p>Total dari konsultasi hingga selesai bisa dalam <strong>1–3 hari kerja</strong>.</p>`,
  },
  {
    patterns: ['garansi','warranty','jaminan','rusak','servis','perbaikan','aftersales','after sales'],
    answer: `<p>Kami memberikan <strong>garansi komprehensif</strong>:</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>✅ Garansi instalasi: 1 tahun</li>
  <li>✅ Garansi produk: sesuai brand (1–3 thn)</li>
  <li>✅ Support teknis 24/7</li>
  <li>✅ Kunjungan teknisi jika ada masalah</li>
</ul>
<p>Semua produk kami <strong>100% original</strong> dari distributor resmi.</p>`,
  },
  {
    patterns: ['area','lokasi','wilayah','bekasi','jakarta','bogor','depok','tangerang','jabodetabek','cover','jangkauan'],
    answer: `<p>AsaTech melayani seluruh area <strong>Jabodetabek</strong>:</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>📍 Bekasi (Kota & Kabupaten)</li>
  <li>📍 Jakarta (semua wilayah)</li>
  <li>📍 Depok, Bogor, Tangerang</li>
  <li>📍 Karawang, Cikarang</li>
</ul>
<p>Hubungi kami untuk konfirmasi area spesifik Anda.</p>`,
  },
  {
    patterns: ['fingerprint','sidik jari','biometrik','biometric'],
    answer: `<p><strong>Fingerprint Door Lock</strong> adalah pilihan paling populer kami!</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>✨ Rekam hingga 100+ sidik jari</li>
  <li>⚡ Buka dalam 0.5 detik</li>
  <li>🔋 Baterai tahan 6–12 bulan</li>
  <li>📱 Bisa dikombinasi PIN/kartu</li>
</ul>
<p>Cocok untuk <strong>rumah, kos, dan kantor</strong>.</p>`,
    action: {label:'💬 Tanya Harga Fingerprint', url:`https://wa.me/${WA_NUMBER}?text=Saya+tertarik+Fingerprint+Door+Lock`},
  },
  {
    patterns: ['face','wajah','recognition','kamera','ai','artificial intelligence'],
    answer: `<p><strong>Face Recognition Door Lock</strong> — teknologi terdepan!</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>🤖 AI kenali wajah dalam 0.3 detik</li>
  <li>🌙 Bekerja dalam kondisi gelap (infrared)</li>
  <li>👥 Rekam hingga 500 wajah</li>
  <li>🚫 Anti-spoofing (tidak bisa ditipu foto)</li>
</ul>
<p>Ideal untuk <strong>kantor, apartemen premium, dan hotel</strong>.</p>`,
    action: {label:'💬 Tanya Face Recognition', url:`https://wa.me/${WA_NUMBER}?text=Saya+tertarik+Face+Recognition+Door+Lock`},
  },
  {
    patterns: ['wifi','smart home','aplikasi','app','remote','jarak jauh','hp','handphone','smartphone'],
    answer: `<p><strong>WiFi Smart Lock</strong> — kontrol dari mana saja!</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>📱 Kontrol via smartphone (iOS/Android)</li>
  <li>🌍 Monitor akses real-time</li>
  <li>🔔 Notifikasi setiap ada yang masuk</li>
  <li>🏠 Integrasi smart home (Google/Alexa)</li>
  <li>👨‍👩‍👧 Kelola akses keluarga dari jauh</li>
</ul>`,
    action: {label:'💬 Tanya WiFi Smart Lock', url:`https://wa.me/${WA_NUMBER}?text=Saya+tertarik+WiFi+Smart+Lock`},
  },
  {
    patterns: ['survey','gratis','cuma-cuma','free','tanpa biaya'],
    answer: `<p>Survey lokasi kami <strong>100% GRATIS</strong> tanpa syarat!</p>
<p>Tim kami akan:</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>🏠 Datang langsung ke lokasi Anda</li>
  <li>📏 Ukur dan analisa kondisi pintu</li>
  <li>💡 Rekomendasikan produk terbaik</li>
  <li>📋 Berikan penawaran harga detail</li>
</ul>
<p>Jadwalkan survey sekarang!</p>`,
    action: {label:'📅 Jadwalkan Survey Gratis', url:`https://wa.me/${WA_NUMBER}?text=Saya+ingin+jadwalkan+survey+gratis+pemasangan+smart+door+lock`},
  },
  {
    patterns: ['hubungi','kontak','contact','telepon','telp','nomor','wa','whatsapp','chat'],
    answer: `<p>Hubungi tim AsaTech sekarang:</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.9">
  <li>📱 WhatsApp: <strong>0812-2066-0058</strong></li>
  <li>📞 Telepon: <strong>0812-2066-0058</strong></li>
  <li>📧 Email: <strong>info@asatech.id</strong></li>
  <li>🕐 Jam kerja: Senin–Sabtu 08.00–17.00</li>
</ul>`,
    action: {label:'💬 Chat WhatsApp Sekarang', url:`https://wa.me/${WA_NUMBER}`},
  },
  {
    patterns: ['hotel','apartment','apartemen','kos','kost','kantor','office','gudang','ruko'],
    answer: `<p>Kami berpengalaman di berbagai jenis properti:</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>🏠 Rumah & villa residensial</li>
  <li>🏢 Perkantoran & gedung komersial</li>
  <li>🏨 Hotel & hospitality</li>
  <li>🏬 Ruko & pusat bisnis</li>
  <li>🏭 Gudang & kawasan industri</li>
  <li>🏙️ Apartemen & kondominium</li>
</ul>
<p>Lebih dari <strong>1.200 proyek</strong> sukses di Jabodetabek!</p>`,
  },
  {
    patterns: ['asatech','profil','company','perusahaan','siapa','tentang','about'],
    answer: `<p><strong>AsaTech</strong> adalah perusahaan keamanan terpercaya di Bekasi.</p>
<ul style="margin:.4em 0 .4em 1.2em;line-height:1.8">
  <li>🏆 15+ tahun pengalaman</li>
  <li>✅ 1.200+ proyek selesai</li>
  <li>😊 560+ klien puas</li>
  <li>🔰 Distributor resmi brand premium</li>
  <li>👷 Tim teknisi bersertifikat</li>
</ul>
<p>Spesialisasi Smart Door Lock, CCTV, Access Control, dan sistem keamanan terintegrasi.</p>`,
  },
];

const DEFAULT_REPLY = `<p>Terima kasih sudah bertanya! 😊</p>
<p>Untuk informasi lebih detail, silakan hubungi tim kami langsung:</p>`;
const DEFAULT_ACTION = {label:'💬 Chat dengan Tim Kami', url:`https://wa.me/${WA_NUMBER}`};

function findAnswer(text){
  const t = text.toLowerCase();
  for(const item of KB){
    if(item.patterns.some(p => t.includes(p))) return item;
  }
  return {answer: DEFAULT_REPLY, action: DEFAULT_ACTION};
}

function buildBotBubble(htmlText, action){
  const time = new Date().toLocaleTimeString('id-ID',{hour:'2-digit',minute:'2-digit'});
  const actionHtml = action
    ? `<a href="${action.url}" ${action.url.startsWith('http')?'target="_blank"':''} class="cb-action-link">${action.label} <i class="fas fa-arrow-right" style="font-size:.6em"></i></a>`
    : '';
  return `
  <div class="cb-msg bot">
    <div class="cb-msg-avatar"><img src="assets/images/logo.png" alt="Asa" onerror="this.style.display='none'"></div>
    <div>
      <div class="cb-bubble">${htmlText}${actionHtml}</div>
      <div class="cb-msg-time">${time}</div>
    </div>
  </div>`;
}

function buildUserBubble(text){
  const time = new Date().toLocaleTimeString('id-ID',{hour:'2-digit',minute:'2-digit'});
  return `
  <div class="cb-msg user">
    <div>
      <div class="cb-bubble">${escHtml(text)}</div>
      <div class="cb-msg-time" style="text-align:right">${time}</div>
    </div>
  </div>`;
}

function escHtml(s){
  return s.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
}

const cbFab     = $('#cbFab');
const cbWin     = $('#cbWindow');
const cbBody    = $('#cbBody');
const cbTyping  = $('#cbTyping');
const cbInput   = $('#cbInput');
const cbSend    = $('#cbSend');
const cbClose   = $('#cbClose');
const cbClear   = $('#cbClear');
const cbBadge   = $('#cbBadge');
const cbQuick   = $('#cbQuick');
let cbOpen = false;

function toggleChat(state){
  cbOpen = state !== undefined ? state : !cbOpen;
  cbFab.classList.toggle('open', cbOpen);
  cbWin.classList.toggle('open', cbOpen);
  if(cbOpen){
    if(cbBadge){ cbBadge.classList.add('hide'); }
    setTimeout(()=> cbInput && cbInput.focus(), 300);
  }
}

on(cbFab,'click',()=> toggleChat());
on(cbClose,'click',()=> toggleChat(false));

on(cbClear,'click',()=>{
  $$('.cb-msg', cbBody).forEach(m => m.remove());
  $$('.cb-quick-replies', cbBody).forEach(q => q.remove());
  $$('.cb-day-label', cbBody).forEach(d => d.remove());
  const dayLabel = document.createElement('div');
  dayLabel.className = 'cb-day-label';
  dayLabel.textContent = 'Hari ini';
  cbBody.prepend(dayLabel);
  const welcome = buildBotBubble('<p>Halo lagi! 👋 Ada yang bisa saya bantu?</p><p>Tanyakan soal produk, harga, atau instalasi Smart Door Lock.</p>', {label:'💬 Hubungi via WhatsApp', url:`https://wa.me/${WA_NUMBER}`});
  cbBody.insertAdjacentHTML('beforeend', welcome);
  addQuickReplies();
  scrollBottom();
});

function addQuickReplies(){
  const qr = document.createElement('div');
  qr.className = 'cb-quick-replies';
  qr.innerHTML = `
    <button class="cb-qr" data-q="Berapa harga smart door lock?">💰 Harga produk</button>
    <button class="cb-qr" data-q="Produk apa saja yang tersedia?">🔐 Jenis produk</button>
    <button class="cb-qr" data-q="Bagaimana proses instalasi?">🔧 Cara instalasi</button>
    <button class="cb-qr" data-q="Ada garansi tidak?">🛡️ Info garansi</button>
    <button class="cb-qr" data-q="Survey gratis ya?">📍 Survey gratis</button>
  `;
  cbBody.appendChild(qr);
  $$('.cb-qr', qr).forEach(btn => on(btn,'click',()=>{
    sendMessage(btn.dataset.q);
    qr.remove();
  }));
}

function scrollBottom(){
  cbBody.scrollTop = cbBody.scrollHeight;
}

function sendMessage(text){
  if(!text.trim()) return;
  // Add user bubble
  cbBody.insertAdjacentHTML('beforeend', buildUserBubble(text));
  scrollBottom();
  // Clear input
  if(cbInput) cbInput.value = '';
  adjustTextarea();
  // Show typing
  if(cbTyping) cbTyping.style.display = 'block';
  scrollBottom();

  const item = findAnswer(text);
  setTimeout(()=>{
    if(cbTyping) cbTyping.style.display = 'none';
    cbBody.insertAdjacentHTML('beforeend', buildBotBubble(item.answer, item.action));
    addQuickReplies();
    scrollBottom();
  }, 900 + Math.random()*600);
}

// Quick reply click (initial)
on(cbQuick, 'click', e => {
  const btn = e.target.closest('.cb-qr');
  if(!btn) return;
  sendMessage(btn.dataset.q);
  cbQuick.remove();
});

// Send button
on(cbSend,'click',()=> sendMessage(cbInput.value));

// Enter key
on(cbInput,'keydown', e => {
  if(e.key === 'Enter' && !e.shiftKey){
    e.preventDefault();
    sendMessage(cbInput.value);
  }
});

// Auto resize textarea
function adjustTextarea(){
  if(!cbInput) return;
  cbInput.style.height = 'auto';
  cbInput.style.height = Math.min(cbInput.scrollHeight, 100) + 'px';
}
on(cbInput,'input', adjustTextarea);

/* ── Auto open greeting after 5s ── */
setTimeout(()=>{
  if(!cbOpen && cbBadge) cbBadge.classList.remove('hide');
}, 5000);

})();
