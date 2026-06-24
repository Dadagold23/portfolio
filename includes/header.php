<?php

declare(strict_types=1);

$pageTitle = $pageTitle ?? $site['name'];
$pageDescription = $pageDescription ?? $site['tagline'];
$activePage = $activePage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= e($pageDescription); ?>">
  <meta name="author" content="<?= e($site['name']); ?>">
  <title><?= e($pageTitle); ?></title>
  <link rel="icon" href="assets/img/profile.jpg" type="image/jpeg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/theme.js"></script>
</head>
<body class="page-<?= e($activePage); ?>">
  <div class="preloader" data-preloader>
    <div class="preloader-ring"></div>
  </div>
  <div class="page-shell">
    <div class="site-noise"></div>
    <div class="site-glow"></div>
    <div class="shell-orb orb-one"></div>
    <div class="shell-orb orb-two"></div>
    <header class="topbar">
      <div class="container py-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid px-0">
            <a class="navbar-brand fw-bold" href="index.php">
              <span class="brand-mark">AD</span>
              <span><?= e($site['brand']); ?></span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="siteNav">
              <ul class="navbar-nav ms-auto gap-lg-1 align-items-lg-center">
                <li class="nav-item"><a class="nav-link <?= $activePage === 'home' ? 'active' : ''; ?>" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'about' ? 'active' : ''; ?>" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'portfolio' ? 'active' : ''; ?>" href="portfolio.php">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'services' ? 'active' : ''; ?>" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                <li class="nav-item ms-lg-2">
                  <button type="button" class="btn btn-link nav-link px-2 border-0 shadow-none" data-theme-toggle aria-label="Toggle theme">
                    <i class="bi bi-moon-stars"></i>
                  </button>
                </li>
              </ul>
              <div class="nav-cta-wrap ms-lg-3 mt-3 mt-lg-0">
                <a class="nav-cta" href="contact.php">Book a project call</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
