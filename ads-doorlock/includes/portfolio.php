<?php
$portfolios = [
  ['Rumah Mewah Pondok Gede','Residential','https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&h=360&fit=crop&q=80'],
  ['Grand Apartment Bekasi','Apartemen','https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=500&h=360&fit=crop&q=80'],
  ['Kantor PT. Maju Jaya','Office','https://images.unsplash.com/photo-1497366216548-37526070297c?w=500&h=360&fit=crop&q=80'],
  ['Hotel Bintang 5 Cikarang','Hotel','https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=500&h=360&fit=crop&q=80'],
  ['Ruko Business Center','Komersial','https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=500&h=360&fit=crop&q=80'],
  ['Gudang Logistik Modern','Industrial','https://images.unsplash.com/photo-1553413077-190dd305871c?w=500&h=360&fit=crop&q=80'],
];
?>
<section class="portfolio-section section" id="portfolio">
  <div class="container">
    <div class="sec-header" data-reveal>
      <div class="sec-tag">Portofolio</div>
      <h2 class="sec-title">Hasil pekerjaan<br><em>berbicara sendiri.</em></h2>
      <p class="sec-sub">Lebih dari 1.200 proyek sukses di seluruh wilayah Jabodetabek.</p>
    </div>

    <div class="swiper portfolioSwiper" data-reveal>
      <div class="swiper-wrapper">
        <?php foreach($portfolios as [$title,$cat,$img]): ?>
        <div class="swiper-slide">
          <div class="port-card">
            <div class="port-img-wrap">
              <img src="<?= $img ?>" alt="<?= $title ?>" loading="lazy">
              <div class="port-overlay">
                <span class="port-cat"><?= $cat ?></span>
                <h3 class="port-title"><?= $title ?></h3>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination port-pag"></div>
    </div>

    <div class="text-c mt-10" data-reveal>
      <a href="https://wa.me/<?= $wa ?>?text=Saya%20ingin%20lihat%20portfolio%20lengkap%20AsaTech" target="_blank" class="btn-pill btn-outline">
        <i class="fas fa-grid-2"></i> Lihat Semua Portfolio <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>
