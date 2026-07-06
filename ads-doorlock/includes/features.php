<?php
$feats = [
  ['fas fa-user-shield','Teknisi Profesional','Tim bersertifikat dengan pengalaman lebih dari 15 tahun di bidang keamanan properti.'],
  ['fas fa-cube','Produk 100% Original','Semua produk bergaransi resmi dari distributor resmi brand ternama dunia.'],
  ['fas fa-file-shield','Garansi Resmi','Garansi instalasi dan produk dengan after-sales support yang responsif.'],
  ['fas fa-bolt','Instalasi Rapi & Cepat','Proses pemasangan selesai dalam 1–2 jam, rapi dan tidak merusak pintu.'],
  ['fas fa-location-dot','Survey Gratis','Tim kami datang langsung ke lokasi Anda tanpa biaya survey sama sekali.'],
  ['fas fa-headset','After Sales Support','Dukungan teknis 24/7 untuk memastikan sistem keamanan Anda selalu berfungsi.'],
];
?>
<section class="features-section section" id="features">
  <div class="container">
    <div class="sec-header" data-reveal>
      <div class="sec-tag">Kenapa Memilih Kami</div>
      <h2 class="sec-title">Standar premium,<br><em>harga terjangkau.</em></h2>
      <p class="sec-sub">Kami percaya keamanan terbaik seharusnya bisa dinikmati semua orang.</p>
    </div>

    <div class="feat-grid">
      <?php foreach($feats as $i=>[$icon,$title,$desc]): ?>
      <div class="feat-card" data-reveal data-delay="<?= $i*80 ?>">
        <div class="feat-icon-wrap">
          <i class="<?= $icon ?>"></i>
        </div>
        <h3 class="feat-title"><?= $title ?></h3>
        <p class="feat-desc"><?= $desc ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
