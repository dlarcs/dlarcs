<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/home/portafolio/portafolio.css';
$jsFile  = $base . '/home/portafolio/portafolio.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>
<link rel="stylesheet" href="home/portafolio/portafolio.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<section class="portfolio">
  <div class="portfolio__inner">
    <button class="portfolio__badge">Servicios digitales</button>

    <h2 class="portfolio__title">Creamos páginas web que conectan con tus clientes.</h2>

    <p class="portfolio__text">
      Diseñamos sitios web modernos, rápidos y adaptados a tu negocio. Ya sea desde cero o con plantilla,
      construimos una presencia digital profesional que genera confianza y resultados.
    </p>

    <div class="portfolio__grid">

      <article class="portfolio-card">
        <img src="https://assets.prebuiltui.com/images/components/feature-sections/features-graphs-image.png" alt="Crecimiento web">
        <h3>Más visibilidad online</h3>
        <p>
          Posicionamos tu negocio en internet para que más personas te encuentren, aumentando visitas,
          clientes potenciales y oportunidades de venta.
        </p>
      </article>

      <article class="portfolio-card">
        <img src="https://assets.prebuiltui.com/images/components/feature-sections/features-dash-img.png" alt="Diseño profesional">
        <h3>Diseño profesional</h3>
        <p>
          Creamos páginas atractivas, organizadas y fáciles de navegar, pensadas para ofrecer una excelente
          experiencia al usuario en cualquier dispositivo.
        </p>
      </article>

      <article class="portfolio-card">
        <img src="https://assets.prebuiltui.com/images/components/feature-sections/features-social-image.png" alt="Integraciones web">
        <h3>Integración completa</h3>
        <p>
          Integramos tu página con redes sociales, WhatsApp, mapas y herramientas digitales para facilitar
          el contacto con tus clientes y mejorar tu presencia online.
        </p>
      </article>

    </div>
  </div>
</section>

<section class="pricing">
  <h1 class="pricing__title">Planes claros y accesibles</h1>

  <p class="pricing__text">
    Elige el plan que mejor se adapte a tu negocio. Puedes empezar con lo básico y escalar a medida que creces.
  </p>

  <div class="pricing__toggle">
    <span>Creación de la página</span>

    <button id="pricingToggle" class="pricing__switch" type="button" aria-label="Cambiar tipo de pago">
      <span class="pricing__thumb"></span>
    </button>

    <span>Mantenimiento</span>
  </div>

  <div id="pricingCards" class="pricing__cards"></div>
</section>

<script defer src="home/portafolio/portafolio.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
