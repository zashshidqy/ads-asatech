<!-- ===================== ASATECH AI CHATBOT ===================== -->
<div class="cb-fab" id="cbFab" aria-label="Chat dengan AI AsaTech">
  <div class="cb-fab-icon">
    <i class="fas fa-comment-dots cb-icon-open"></i>
    <i class="fas fa-xmark cb-icon-close"></i>
  </div>
  <span class="cb-fab-badge" id="cbBadge">1</span>
  <div class="cb-fab-pulse"></div>
</div>

<div class="cb-window" id="cbWindow" role="dialog" aria-label="AsaTech AI Assistant">
  <!-- Header -->
  <div class="cb-header">
    <div class="cb-header-left">
      <div class="cb-avatar">
        <img src="assets/images/logo.png" alt="AsaTech AI" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
        <span class="cb-avatar-fallback" style="display:none"><i class="fas fa-robot"></i></span>
      </div>
      <div class="cb-header-info">
        <strong>AsaTech Assistant</strong>
        <div class="cb-status"><span class="cb-online-dot"></span> Online sekarang</div>
      </div>
    </div>
    <div class="cb-header-right">
      <button class="cb-head-btn" id="cbClear" title="Hapus chat"><i class="fas fa-rotate-right"></i></button>
      <button class="cb-head-btn" id="cbClose" title="Tutup"><i class="fas fa-xmark"></i></button>
    </div>
  </div>

  <!-- Messages -->
  <div class="cb-body" id="cbBody">
    <div class="cb-day-label">Hari ini</div>
    <!-- Welcome message -->
    <div class="cb-msg bot" id="cbWelcome">
      <div class="cb-msg-avatar">
        <img src="assets/images/logo.png" alt="AI" onerror="this.style.display='none'">
      </div>
      <div class="cb-bubble">
        <p>Halo! 👋 Saya <strong>Asa</strong>, AI assistant AsaTech.</p>
        <p>Saya siap membantu Anda soal <strong>Smart Door Lock</strong>, harga, instalasi, atau rekomendasi produk.</p>
        <p>Ada yang bisa saya bantu?</p>
      </div>
    </div>
    <!-- Quick Replies -->
    <div class="cb-quick-replies" id="cbQuick">
      <button class="cb-qr" data-q="Berapa harga smart door lock?">💰 Harga produk</button>
      <button class="cb-qr" data-q="Produk apa saja yang tersedia?">🔐 Jenis produk</button>
      <button class="cb-qr" data-q="Bagaimana proses instalasi?">🔧 Proses instalasi</button>
      <button class="cb-qr" data-q="Ada garansi tidak?">🛡️ Info garansi</button>
      <button class="cb-qr" data-q="Hubungi tim AsaTech">📞 Hubungi kami</button>
    </div>
  </div>

  <!-- Typing indicator -->
  <div class="cb-typing" id="cbTyping" style="display:none">
    <div class="cb-msg bot">
      <div class="cb-msg-avatar"><img src="assets/images/logo.png" alt="AI" onerror="this.style.display='none'"></div>
      <div class="cb-bubble cb-typing-bubble">
        <span></span><span></span><span></span>
      </div>
    </div>
  </div>

  <!-- Input -->
  <div class="cb-footer">
    <div class="cb-input-wrap">
      <textarea id="cbInput" class="cb-input" placeholder="Ketik pesan Anda..." rows="1" maxlength="500"></textarea>
      <button id="cbSend" class="cb-send" aria-label="Kirim">
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
    <div class="cb-powered">Powered by <strong>AsaTech AI</strong> · <a href="https://wa.me/6281220660058" target="_blank">Chat WhatsApp</a></div>
  </div>
</div>
