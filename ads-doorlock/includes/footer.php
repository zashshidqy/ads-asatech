<?php
$layanan  = ['Jasa Pasang Door Lock','Access Control System','CCTV Security','Barrier Gate','Automatic Gate'];
$info     = ['Tentang Kami','Portfolio','FAQ','Blog','Kontak'];
$socials  = [
  ['fab fa-instagram','#','Instagram'],
  ['fab fa-facebook-f','#','Facebook'],
  ['fab fa-youtube','#','YouTube'],
  ['fab fa-tiktok','#','TikTok'],
  ['fab fa-linkedin-in','#','LinkedIn'],
];
?>
<footer class="site-footer" id="footer">
  <div class="footer-top">
    <div class="container footer-grid">

      <!-- Brand -->
      <div class="foot-brand">
        <a href="#home" class="hdr-logo">
          <img src="assets/images/logo.png" alt="AsaTech" class="hdr-logo-img">
        </a>
        <p class="foot-tagline">Solusi keamanan modern untuk hunian dan bisnis Anda. Profesional, bergaransi, terpercaya.</p>
        <div class="foot-socials">
          <?php foreach($socials as [$icon,$url,$lbl]): ?>
          <a href="<?= $url ?>" class="social-ico" target="_blank" aria-label="<?= $lbl ?>">
            <i class="<?= $icon ?>"></i>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Layanan -->
      <div class="foot-col">
        <h4 class="foot-h">Layanan</h4>
        <ul class="foot-links">
          <?php foreach($layanan as $l): ?>
          <li><a href="#features"><?= $l ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Info -->
      <div class="foot-col">
        <h4 class="foot-h">Informasi</h4>
        <ul class="foot-links">
          <?php foreach($info as $it): ?>
          <li><a href="#"><?= $it ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Kontak -->
      <div class="foot-col">
        <h4 class="foot-h">Kontak</h4>
        <ul class="foot-contact">
          <li><i class="fas fa-map-marker-alt"></i><span>Jl. Raya Bekasi No.123,<br>Bekasi, Jawa Barat 17132</span></li>
          <li><i class="fas fa-phone"></i><a href="tel:08122066005"><?= $phone ?></a></li>
          <li><i class="fas fa-envelope"></i><a href="mailto:info@asatech.id">info@asatech.id</a></li>
          <li><i class="fas fa-clock"></i><span>Senin–Sabtu, 08.00–17.00</span></li>
        </ul>
      </div>

      <!-- Map -->
      <div class="foot-col foot-map-col">
        <h4 class="foot-h">Lokasi Kami</h4>
        <div class="foot-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.49878783836!2d106.8905856!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c3b6f31ee85%3A0x4033dda85e1ab703!2sBekasi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1700000000000"
            width="100%" height="150" style="border:0" allowfullscreen loading="lazy"></iframe>
        </div>
      </div>

    </div>
  </div>
  <div class="footer-bar">
    <div class="container footer-bar-inner">
      <span>© <?= date('Y') ?> AsaTech. All rights reserved.</span>
      <div class="footer-bar-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
      </div>
    </div>
  </div>
</footer>
