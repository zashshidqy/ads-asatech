<?php
$stats = [
  ['fas fa-building-user','1,200+','Proyek Selesai'],
  ['fas fa-face-smile','560+','Klien Puas'],
  ['fas fa-award','15+','Tahun Pengalaman'],
  ['fas fa-shield-check','100%','Garansi Kepuasan'],
];
?>
<section class="stats-section" id="stats">
  <div class="stats-inner">
    <?php foreach($stats as $i=>[$icon,$num,$label]): ?>
    <div class="stat-item" data-reveal data-delay="<?= $i*100 ?>">
      <div class="stat-icon"><i class="<?= $icon ?>"></i></div>
      <div class="stat-num"><?= $num ?></div>
      <div class="stat-lbl"><?= $label ?></div>
    </div>
    <?php if($i<3): ?><div class="stat-sep"></div><?php endif; ?>
    <?php endforeach; ?>
  </div>
</section>
