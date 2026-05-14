<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/portafolio/footer/footer.css';
$jsFile  = $base . '/portafolio/footer/footer.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>
<link rel="stylesheet" href="../portafolio/footer/footer.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<div class="footer_bg">
  <footer class="footer">

    <div class="footer_container">

      <div class="footer_brand">
        <!-- Logo -->
        <!-- Texto -->
        <!-- Redes sociales -->
      </div>

      <div class="footer_links">
        <!-- Products -->
        <!-- Resources -->
        <!-- Company -->
      </div>

    </div>

    <div class="footer_bottom">
      <p>© 2026 Diseño de páginas web</p>
      <p>Todos los derechos reservados</p>
    </div>

    <div class="footer_big_text_wrap">
      <h1 class="footer_big_text">D'LARCS</h1>
    </div>

  </footer>
  </div>
  <script defer src="portafolio/footer/footer.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
