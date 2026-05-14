<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/portafolio/slider/slider.css';
$jsFile  = $base . '/portafolio/slider/slider.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>

<link rel="stylesheet" href="../portafolio/slider/slider.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<section class="portfolio-slider" id="portfolioSlider">
  <div class="portfolio-slider__image" aria-hidden="true"></div>

  <div class="portfolio-slider__content">
    <span class="portfolio-slider__badge">Portafolio</span>

    <h1 class="portfolio-slider__title">
      Proyectos web creados
    </h1>

    <p class="portfolio-slider__text" id="portfolioText">
      Hemos desarrollado páginas para Ullman Sails, Lanyards, Arbelaez.com.co y Chapitour, creando experiencias digitales claras, modernas y adaptadas a cada proyecto.
    </p>

    <a class="portfolio-slider__button" href="#portafolio">
      Ver portafolio
    </a>
  </div>
  <div class="portfolio-slider__dots" id="portfolioDots"></div>
</section>

<script defer src="../portafolio/slider/slider.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
