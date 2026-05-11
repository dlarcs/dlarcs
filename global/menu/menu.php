<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/global/menu/menu.css';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>

<link rel="stylesheet" href="global/menu/menu.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<header class="site-header">
  <a class="brand_menu" href="index.php" aria-label="Inicio">
    <!-- LOGO AGREGADO AQUÍ -->
    <img src="global/img/logo_blanco.png" alt="Logo D'LARCS" class="nav-logo">
    <span class="brand-text">D'LARCS</span>
  </a>

  <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

  <label
    for="nav-toggle"
    class="burger"
    aria-label="Abrir menú"
    aria-controls="site-nav"
  >
    <span></span>
    <span></span>
    <span></span>
  </label>

  <label for="nav-toggle" class="scrim" aria-hidden="true"></label>

  <nav id="site-nav" class="nav" aria-label="Navegación principal">
    <ul class="nav-list">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="portafolio/index.php">Portafolio</a></li>
      <li><a href="alojamiento/index.php">Proyectos</a></li>

    </ul>
  </nav>
</header>
