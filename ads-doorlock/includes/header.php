<?php
$navItems = [
  ['label'=>'Home','href'=>'#home'],
  ['label'=>'Layanan','href'=>'#features','sub'=>[
    'Jasa Pasang Door Lock','Access Control','CCTV Security','Barrier Gate','Automatic Gate'
  ]],
  ['label'=>'Produk','href'=>'#products'],
  ['label'=>'Portfolio','href'=>'#portfolio','sub'=>['Residensial','Apartemen','Perkantoran','Hotel']],
  ['label'=>'FAQ','href'=>'#faq'],
  ['label'=>'Kontak','href'=>'#footer'],
];
?>
<header id="site-header" class="site-header">
  <div class="hdr-blur"></div>
  <nav class="hdr-nav container">

    <!-- Logo -->
    <a href="#home" class="hdr-logo">
      <img src="assets/images/logo.png" alt="AsaTech Logo" class="hdr-logo-img">
    </a>

    <!-- Links -->
    <ul class="hdr-links" id="hdrLinks">
      <?php foreach($navItems as $item): ?>
      <li class="hdr-item <?= isset($item['sub']) ? 'has-sub' : '' ?>">
        <a href="<?= $item['href'] ?>" class="hdr-link">
          <?= $item['label'] ?>
          <?php if(isset($item['sub'])): ?>
          <svg width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <?php endif; ?>
        </a>
        <?php if(isset($item['sub'])): ?>
        <div class="hdr-dropdown">
          <ul>
            <?php foreach($item['sub'] as $s): ?>
            <li><a href="#"><?= $s ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
      </li>
      <?php endforeach; ?>
    </ul>

    <!-- Right side -->
    <div class="hdr-right">
      <a href="tel:<?= $phone ?>" class="hdr-phone">
        <i class="fas fa-phone-volume"></i>
        <span><?= $phone ?></span>
      </a>
      <a href="https://wa.me/<?= $wa ?>" target="_blank" class="btn-pill btn-green">
        <i class="fab fa-whatsapp"></i> Konsultasi Gratis
      </a>
      <button class="hdr-burger" id="hdrBurger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>

  </nav>
</header>
