<?php
$steps = [
  ['fas fa-comments','Konsultasi','Hubungi kami via WhatsApp atau telepon untuk konsultasi awal gratis.'],
  ['fas fa-map-marker-alt','Survey Lokasi','Teknisi kami datang survei langsung dan analisa kebutuhan Anda.'],
  ['fas fa-file-invoice','Penawaran','Kami berikan penawaran transparan tanpa biaya tersembunyi.'],
  ['fas fa-screwdriver-wrench','Instalasi','Pemasangan profesional selesai 1–2 jam, rapi dan bersih.'],
  ['fas fa-chalkboard-user','Training','Kami ajarkan cara penggunaan dan fitur produk secara lengkap.'],
  ['fas fa-shield-halved','Garansi','Garansi purna jual dan after-sales support aktif.'],
];
?>
<section class="howwork-section section" id="howwork">
  <div class="container">
    <div class="sec-header" data-reveal>
      <div class="sec-tag">Cara Kerja</div>
      <h2 class="sec-title">Proses mudah,<br><em>hasil sempurna.</em></h2>
    </div>

    <div class="hw-steps">
      <?php foreach($steps as $i=>[$icon,$title,$desc]): ?>
      <div class="hw-step" data-reveal data-delay="<?= $i*90 ?>">
        <div class="hw-num"><?= str_pad($i+1,2,'0',STR_PAD_LEFT) ?></div>
        <div class="hw-icon"><i class="<?= $icon ?>"></i></div>
        <h3 class="hw-title"><?= $title ?></h3>
        <p class="hw-desc"><?= $desc ?></p>
        <?php if($i < count($steps)-1): ?>
        <div class="hw-connector"><i class="fas fa-chevron-right"></i></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
