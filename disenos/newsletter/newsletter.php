<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/disenos/newsletter/newsletter.css';
$jsFile  = $base . '/disenos/newsletter/newsletter.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>
<link rel="stylesheet" href="../disenos/newsletter/newsletter.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<section class="newsletter">
  <div class="newsletter1">

  </div>

  <div class="newsletter_slider">

    <div class="newsletter_slide is-active">
      <h1 class="newsletter__title">Explora diseños modernos y creativos</h1>
      <p class="newsletter__description">
        Descubre botones interactivos, tipografías elegantes, galerías visuales y estilos pensados para páginas modernas y atractivas.
      </p>
      <a href="#contacto" class="newsletter__button">Ver más diseños</a>
    </div>

    <div class="newsletter_slide">
      <h1 class="newsletter__title">Secciones visuales para destacar tu marca</h1>
      <p class="newsletter__description">
        Creamos sliders, banners, cards, menús y diferentes tipos de secciones para darle personalidad y estilo a cada página web.
      </p>
      <a href="#contacto" class="newsletter__button">Quiero una página así</a>
    </div>

    <div class="newsletter_slide">
      <h1 class="newsletter__title">Diseño pensado para inspirar</h1>
      <p class="newsletter__description">
        Combinamos imágenes, colores, letras y animaciones suaves para construir experiencias visuales claras, modernas y profesionales.
      </p>
      <a href="#contacto" class="newsletter__button">Descubrir estilos</a>
    </div>

    <div class="newsletter_dots">
      <button class="newsletter_dot is-active"></button>
      <button class="newsletter_dot"></button>
      <button class="newsletter_dot"></button>
    </div>

  </div>

  <div class="newsletter1 newsletter2">

  </div>
</section>
<script defer src="../disenos/newsletter/newsletter.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
