<?php
$cssTime = filemtime('../servicios/seccion/servicios.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../portfolio/seccion/portfolio.css?v=<?= $cssTime ?>">
<section class="seccion_portfolio">
<div class="portfolio">
  <h2>Mi portafolio</h2>

  <div class="proyecto">
    <div class="proyecto-img" style="background-image: url('../../view/portfolio/seccion/img/Lanyard.png');">
      <!-- Reemplaza 'img1.jpg' por la ruta de tu imagen -->
    </div>
    <div class="proyecto-info">
      <h3>Lanyard</h3>
      <p>Aplicación web para crear tu propio cordón porta credencial. Sitio web interactivo y moderno</p>
      <a href="https://lanyardsforyou.com/views/home/index.php" target="_blank">Ver página</a>
    </div>
  </div>

  <div class="proyecto">
    <div class="proyecto-img" style="background-image: url('../../view/portfolio/seccion/img/UllmanSails.png');">
    </div>
    <div class="proyecto-info">
      <h3>Ullman Sails</h3>
      <p>Sitio web para Inglaterra, venta y reparación de botes de carreras y navegación</p>
      <a href="https://ullmansails.co.uk" target="_blank">Ver página</a>
    </div>
  </div>

  <div class="proyecto">
    <div class="proyecto-img" style="background-image: url('../../view/portfolio/seccion/img/arbelaez.png');">
    </div>
    <div class="proyecto-info">
      <h3>Arbelaez</h3>
      <p>Página web para el pueblo de Arbelaez Cundinamarca, dandole la bienvenida al mundo digital</p>
      <a href="https://arbelaez.com.co" target="_blank">Ver página</a>
    </div>
  </div>

  <div class="proyecto">
    <div class="proyecto-img" style="background-image: url('../../view/portfolio/seccion/img/Gym.png');">
    </div>
    <div class="proyecto-info">
      <h3>Gimnasio</h3>
      <p>Sitio web donde encontraras el mejor Gimnasio</p>
      <a href="../../view/Managergym/index.php" target="_blank">Ver página</a>
    </div>
  </div>

</div>
</section>


<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
