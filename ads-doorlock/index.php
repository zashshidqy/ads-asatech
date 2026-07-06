<?php
$pageTitle  = "AsaTech — Smart Door Lock Premium Bekasi";
$pageDesc   = "Solusi keamanan terdepan untuk hunian dan bisnis Anda. Smart Door Lock premium dengan instalasi profesional, garansi resmi, dan teknologi terkini.";
$whatsapp   = "6281220660058";
$phone      = "0812-2066-0058";
$company    = "AsaTech";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= $pageDesc ?>">
<title><?= $pageTitle ?></title>
<link rel="icon" href="assets/images/logo.png" type="image/png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php
$wa = $whatsapp;
include 'includes/header.php';
include 'includes/hero.php';
include 'includes/brands.php';
include 'includes/features.php';
include 'includes/products.php';
include 'includes/howwork.php';
include 'includes/portfolio.php';
include 'includes/stats.php';
include 'includes/testimonials.php';
include 'includes/cta.php';
include 'includes/footer.php';
include 'includes/chatbot.php';
?>

<!-- WA Float -->
<a href="https://wa.me/<?= $whatsapp ?>" target="_blank" class="wa-fab" aria-label="WhatsApp">
  <i class="fab fa-whatsapp"></i>
  <span class="wa-fab-ring"></span>
</a>

<!-- Back to Top -->
<button id="btt" class="btt-btn" aria-label="Back to top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
