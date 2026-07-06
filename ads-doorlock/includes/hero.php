<section class="hero-section" id="home">
  <!-- Animated mesh background -->
  <div class="hero-mesh"></div>
  <div class="hero-glow hero-glow-1"></div>
  <div class="hero-glow hero-glow-2"></div>
  <canvas id="heroCanvas" class="hero-canvas"></canvas>

  <div class="container hero-inner">
    <!-- Left Content -->
    <div class="hero-content" data-reveal>
      <div class="hero-badge">
        <span class="badge-dot"></span>
        <span>Premium Smart Security · Bekasi</span>
      </div>

      <h1 class="hero-title">
        Jasa Pasang<br>
        <span class="hero-title-accent">Smart Door Lock</span><br>
        <span class="hero-title-city">Bekasi</span>
      </h1>

      <p class="hero-desc">
        Solusi keamanan modern untuk rumah, apartemen, kantor, gudang, dan ruko.
        Instalasi profesional, bergaransi resmi, dan terpercaya.
      </p>

      <!-- Chips -->
      <div class="hero-chips">
        <?php
        $chips = [
          ['fa-user-shield','Teknisi Berpengalaman'],
          ['fa-box-check','Produk Original'],
          ['fa-certificate','Garansi Resmi'],
          ['fa-map-marker-check','Survey Gratis'],
        ];
        foreach($chips as $c): ?>
        <div class="hero-chip">
          <i class="fas <?= $c[0] ?>"></i>
          <span><?= $c[1] ?></span>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- CTAs -->
      <div class="hero-ctas">
        <a href="https://wa.me/<?= $wa ?>?text=Halo%20AsaTech,%20saya%20ingin%20konsultasi%20Smart%20Door%20Lock" target="_blank" class="btn-pill btn-green btn-lg">
          <i class="fab fa-whatsapp"></i> Konsultasi via WhatsApp
        </a>
        <a href="#products" class="btn-pill btn-ghost btn-lg">
          Minta Penawaran <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <!-- Right Visual -->
    <div class="hero-visual" data-reveal-right>
      <div class="hero-card-wrap">
        <div class="hero-halo"></div>
        <div class="hero-img-card">
          <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=700&fit=crop&q=80"
               alt="Smart Door Lock" class="hero-img"
               onerror="this.style.display='none'">
          <div class="hero-img-overlay"></div>
        </div>
        <!-- Float badge -->
        <div class="hero-float-badge">
          <div class="hero-float-num">15+</div>
          <div class="hero-float-lbl">Tahun<br>Pengalaman</div>
        </div>
        <!-- Float stat 2 -->
        <div class="hero-float-stat">
          <i class="fas fa-shield-check"></i>
          <div>
            <strong>1.200+</strong>
            <span>Proyek Selesai</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll Indicator -->
  <a href="#brands" class="hero-scroll" aria-label="Scroll down">
    <div class="scroll-mouse">
      <div class="scroll-dot"></div>
    </div>
  </a>
</section>
