<?php
$cssTime = filemtime('home/newsletter/newsletter.css');
$jsTime = filemtime('home/newsletter/newsletter.js');
?>
<link rel="stylesheet" href="home/newsletter/newsletter.css?v=<?= $cssTime ?>">

<section class="newsletter">
  <div class="newsletter1">

  </div>
  <div class="newsletter_slider">

    <div class="newsletter_slide is-active">
    <h1 class="newsletter__title">¿Tu negocio necesita una página web?</h1>
    <p class="newsletter__description">
      Creamos sitios modernos, claros y profesionales para que más personas conozcan lo que ofreces.
    </p>
    <a href="#contacto" class="newsletter__button">Quiero más información</a>
  </div>

  <div class="newsletter_slide">
    <h1 class="newsletter__title">Haz que tu marca se vea profesional</h1>
    <p class="newsletter__description">
      Diseñamos páginas responsive, rápidas y atractivas, pensadas para destacar tu negocio en internet.
    </p>
    <a href="#contacto" class="newsletter__button">Solicitar mi página web</a>
  </div>

  <div class="newsletter_slide">
    <h1 class="newsletter__title">Convierte visitas en clientes</h1>
    <p class="newsletter__description">
      Te ayudamos a mostrar tus servicios, productos o proyectos con una presencia digital más fuerte.
    </p>
    <a href="#contacto" class="newsletter__button">Empezar ahora</a>
  </div>

    <div class="newsletter_dots">
      <button class="newsletter_dot is-active"></button>
      <button class="newsletter_dot"></button>
      <button class="newsletter_dot"></button>
    </div>

  </div>
  <div class="newsletter1 newsletter2 ">

  </div>
</section>
<script src="home/newsletter/newsletter.js?v=<?= $jsTime ?>" type="text/javascript"></script>
