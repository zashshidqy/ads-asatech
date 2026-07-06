<?php
$prods = [
  ['fas fa-fingerprint','Fingerprint Door Lock','Buka pintu hanya dengan sentuhan jari. Presisi tinggi, anti-spoofing.','#3b82f6'],
  ['fas fa-face-smile','Face Recognition','Teknologi AI kenali wajah dalam 0.3 detik bahkan di kondisi gelap.','#8b5cf6'],
  ['fas fa-hashtag','PIN Code Lock','Kode akses personal hingga 20 pengguna, riwayat akses tercatat.','#10b981'],
  ['fas fa-credit-card','RFID Card Lock','Kartu akses pintar untuk hotel, apartemen, dan perkantoran.','#ef4444'],
  ['fab fa-bluetooth-b','Bluetooth Lock','Kontrol via smartphone dengan koneksi Bluetooth aman terenkripsi.','#0ea5e9'],
  ['fas fa-wifi','WiFi Smart Lock','Monitor dan kontrol dari mana saja via aplikasi mobile.','#f59e0b'],
  ['fas fa-building','Hotel Lock System','Solusi lengkap manajemen kunci untuk properti hospitality.','#ec4899'],
  ['fas fa-door-open','Glass Door Lock','Khusus pintu kaca frameless dengan estetika premium.','#14b8a6'],
];
?>
<section class="products-section section" id="products">
  <div class="container">
    <div class="sec-header" data-reveal>
      <div class="sec-tag">Jenis Produk</div>
      <h2 class="sec-title">Smart Door Lock<br><em>untuk setiap kebutuhan.</em></h2>
      <p class="sec-sub">Pilih tipe yang paling sesuai dengan properti dan gaya hidup Anda.</p>
    </div>

    <div class="prod-grid">
      <?php foreach($prods as $i=>[$icon,$name,$desc,$color]): ?>
      <div class="prod-card" data-reveal data-delay="<?= $i*60 ?>" style="--c:<?= $color ?>">
        <div class="prod-icon">
          <i class="<?= $icon ?>"></i>
        </div>
        <h3 class="prod-name"><?= $name ?></h3>
        <p class="prod-desc"><?= $desc ?></p>
        <a href="https://wa.me/<?= $wa ?>?text=Saya%20tertarik%20<?= urlencode($name) ?>" target="_blank" class="prod-cta">
          Tanya Harga <i class="fas fa-arrow-right"></i>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
