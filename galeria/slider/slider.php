<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/galeria/slider/slider.css';
$jsFile  = $base . '/galeria/slider/slider.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>

<link rel="stylesheet" href="../galeria/slider/slider.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<section class="portfolio-slider" id="portfolioSlider">
  <div class="portfolio-slider__image" aria-hidden="true"></div>

  <div class="portfolio-slider__content">
    <span class="portfolio-slider__badge">Galería de ideas</span>

    <h1 class="portfolio-slider__title">
      Explora secciones, estilos y diseños para tu página web
    </h1>

    <p class="portfolio-slider__text" id="portfolioText">
      En esta galería encontrarás diferentes tipos de secciones, formas, estilos visuales, animaciones y ejemplos de diseño para imaginar cómo podría verse tu página web antes de crearla.
    </p>

    <a class="portfolio-slider__button" href="#galeria">
      Ver galería
    </a>
  </div>

  <div class="portfolio-slider__dots" id="portfolioDots"></div>
</section>

<script defer src="../galeria/slider/slider.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
