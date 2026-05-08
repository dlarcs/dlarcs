<?php
$cssTime = filemtime('global/footer/footer.css');
$jsTime  = filemtime('global/footer/footer.js');
?>

<link rel="stylesheet" href="global/footer/footer.css?v=<?= $cssTime ?>">
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
<script src="global/footer/footer.js?v=<?= $jsTime ?>" type="text/javascript"></script>
