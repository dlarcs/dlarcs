<?php
$cssTime = filemtime('global/navbar/navbar.css');
$jsTime  = filemtime('global/navbar/navbar.js');
?>

<link rel="stylesheet" href="global/navbar/navbar.css?v=<?= $cssTime ?>">
<nav class="nav">
  <a href="https://dlarcs.com" class="nav__logo">
      <img class="img_logo"src="global/navbar/img/logo_blanco.png" alt="">
      <h2 class="name_logo">D'LARCS</h2>
  </a>

  <div class="nav__links">
    <a href="#" class="nav__link">
      <span class="nav__text">Inicio</span>
      <span class="nav__text nav__text--hover">Inicio</span>
    </a>

    <a href="#" class="nav__link">
      <span class="nav__text">Productos</span>
      <span class="nav__text nav__text--hover">Productos</span>
    </a>

    <a href="portfolio/index.php" class="nav__link">
      <span class="nav__text">Portafolio</span>
      <span class="nav__text nav__text--hover">Portafolio</span>
    </a>

    <a href="#" class="nav__link">
      <span class="nav__text">Proyectos</span>
      <span class="nav__text nav__text--hover">Proyectos</span>
    </a>
  </div>

  <div class="nav__actions">
    <button class="nav__btn nav__btn--line">Contactanos</button>
    <!-- <button class="nav__btn nav__btn-fill">Get Started</button> -->
  </div>

  <button id="navToggle" class="nav__toggle" aria-label="Open menu" aria-expanded="false">
  <svg class="nav__icon nav__icon--menu" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
    <path d="M4 6h16M4 12h16M4 18h16" />
  </svg>

  <svg class="nav__icon nav__icon--close" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
    <path d="M6 6l12 12M18 6L6 18" />
  </svg>
</button>

  <div id="navMenu" class="nav__mobile">
    <a class="nav__mobile-link" href="#">Inicio</a>
    <a class="nav__mobile-link" href="#">Productos</a>
    <a class="nav__mobile-link" href="#">Portafolio</a>
    <a class="nav__mobile-link" href="#">Estilos</a>

    <button class="nav__btn nav__btn--line">Contact</button>
    <!-- <button class="nav__btn nav__btn-fill">Get Started</button> -->
  </div>
</nav>
<script src="global/navbar/navbar.js?v=<?= $jsTime ?>" type="text/javascript"></script>
