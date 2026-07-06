<?php
$testis = [
  ['Budi Santoso','Pemilik Rumah','Pemasangan sangat rapi dan cepat. Teknisi profesional dan ramah. Sangat puas!',5,'https://randomuser.me/api/portraits/men/32.jpg'],
  ['Rina Marlina','Pemilik Apartemen','Produk original dan berfungsi dengan sangat baik. Highly recommended untuk keamanan hunian!',5,'https://randomuser.me/api/portraits/women/44.jpg'],
  ['Andi Wijaya','Manager Operasional','Sudah pasang di kantor dan gudang, semuanya berfungsi sempurna. Respon tim sangat cepat.',5,'https://randomuser.me/api/portraits/men/68.jpg'],
  ['Dewi Kusuma','Owner Ruko','Harga kompetitif, garansi jelas, teknisi sangat berpengalaman. Rekomen banget buat siapapun!',5,'https://randomuser.me/api/portraits/women/22.jpg'],
];

$faqs = [
  ['Berapa lama proses pemasangan door lock?','Proses pemasangan biasanya 1–2 jam per unit tergantung jenis dan kondisi pintu. Teknisi kami bekerja cepat dan rapi.'],
  ['Apakah semua jenis pintu bisa dipasang?','Hampir semua jenis pintu dapat dipasangi smart door lock—kayu, aluminium, maupun kaca—setelah survei lokasi.'],
  ['Apakah ada garansi setelah pemasangan?','Ya, kami memberikan garansi instalasi dan garansi produk. Hubungi kami kapan saja jika ada kendala.'],
  ['Bisakah diintegrasikan dengan access control?','Ya, beberapa produk kami mendukung integrasi dengan sistem access control, CCTV, dan smart home.'],
  ['Apakah melayani area di luar Bekasi?','Kami melayani seluruh area Jabodetabek. Hubungi kami untuk informasi coverage.'],
];
?>
<section class="testi-section section" id="faq">
  <div class="container">
    <div class="testi-faq-wrap">

      <!-- Testimonials -->
      <div class="testi-col" data-reveal>
        <div class="sec-header text-l">
          <div class="sec-tag">Testimoni</div>
          <h2 class="sec-title">Apa kata<br><em>klien kami?</em></h2>
        </div>
        <div class="swiper testiSwiper">
          <div class="swiper-wrapper">
            <?php foreach($testis as [$name,$role,$text,$stars,$img]): ?>
            <div class="swiper-slide">
              <div class="testi-card">
                <div class="testi-stars">
                  <?php for($s=0;$s<$stars;$s++): ?><i class="fas fa-star"></i><?php endfor; ?>
                </div>
                <p class="testi-body">"<?= $text ?>"</p>
                <div class="testi-author">
                  <img src="<?= $img ?>" alt="<?= $name ?>">
                  <div>
                    <strong><?= $name ?></strong>
                    <span><?= $role ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination testi-pag"></div>
        </div>
      </div>

      <!-- FAQ -->
      <div class="faq-col" data-reveal data-delay="150">
        <div class="sec-header text-l">
          <div class="sec-tag">FAQ</div>
          <h2 class="sec-title">Pertanyaan<br><em>yang sering ditanya.</em></h2>
        </div>
        <div class="faq-list">
          <?php foreach($faqs as $i=>[$q,$a]): ?>
          <div class="faq-item <?= $i===0?'open':'' ?>">
            <button class="faq-q">
              <?= $q ?>
              <i class="fas fa-plus faq-ico"></i>
            </button>
            <div class="faq-a"><p><?= $a ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>
