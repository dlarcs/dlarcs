<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/global/navbar/navbar.css';
$jsFile  = $base . '/global/navbar/navbar.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>

<link rel="stylesheet" href="/global/navbar/navbar.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<nav class="nav">
  <a href="/" class="nav__logo">
    <img class="img_logo" src="/global/navbar/img/logo_blanco.png" alt="D'LARCS">
    <h2 class="name_logo">D'LARCS</h2>
  </a>

  <div class="nav__links">
    <a href="/" class="nav__link"><span>Inicio</span></a>
    <a href="#" class="nav__link"><span>Productos</span></a>
    <a href="/portfolio/index.php" class="nav__link"><span>Portafolio</span></a>
    <a href="#" class="nav__link"><span>Proyectos</span></a>
  </div>

  <div class="nav__actions">
    <button class="nav__btn nav__btn--line">Contáctanos</button>
  </div>

  <button id="navToggle" class="nav__toggle" aria-label="Open menu" aria-expanded="false">
    ☰
  </button>

  <div id="navMenu" class="nav__mobile">
    <a class="nav__mobile-link" href="/">Inicio</a>
    <a class="nav__mobile-link" href="#">Productos</a>
    <a class="nav__mobile-link" href="/portfolio/index.php">Portafolio</a>
    <a class="nav__mobile-link" href="#">Proyectos</a>

    <button class="nav__btn nav__btn--line">Contáctanos</button>
  </div>
</nav>

<script defer src="/global/navbar/navbar.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
