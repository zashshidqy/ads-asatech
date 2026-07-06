<?php
$brands = ['Hikvision','ZKTeco','Philips','Kaadas','Yale','Samsung','Aqara','Bosch','Honeywell'];
?>
<section class="brands-section" id="brands">
  <div class="container">
    <p class="brands-label">Didukung brand terpercaya dunia</p>
  </div>
  <div class="brands-track-wrap">
    <div class="brands-fade-l"></div>
    <div class="brands-fade-r"></div>
    <div class="brands-track">
      <div class="brands-slide" id="brandsSlide">
        <?php for($x=0;$x<2;$x++): foreach($brands as $b): ?>
        <div class="brand-chip">
          <span class="brand-dot"></span>
          <span><?= $b ?></span>
        </div>
        <?php endforeach; endfor; ?>
      </div>
    </div>
  </div>
</section>
