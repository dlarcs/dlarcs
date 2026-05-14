<?php
$cssTime = filemtime('../disenos/animaciones/seccion1/seccion1.css'); // ejemplo: '../Home/5.Video/video.css'
?>
<link rel="stylesheet" href="../disenos/animaciones/seccion1/seccion1.css?v=<?= $cssTime ?>">

<section class="seccion1">
  <!-- slider blog -->
        <div class="container-title-port">
            <h1>Slider en carrusel tipo tarjeta <span> 2D</span></h1>
              <p>Tipos de slider, uno de ellos tipo tarjeta entre otros Card slider, Coverflow slider, 3D slider,
                Perspective slider, Parallax slider, Glassmorphism slider, Split slider, Layered slider
              </p>
        </div>
        <div class="wrapper">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card cardImg1">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <a href="https://arbelaez.com.co" target="_blank"><h4>Arbelaez</h4></a>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="card cardImg2">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                          <a href="https://ullmansails.com" target="_blank"><h4>Ullman Sails</h4></a>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
                <label for="c3" class="card cardImg3">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                          <a href="https://arbelaez.com.co" target="_blank"><h4>Arbelaez</h4></a>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4" >
                <label for="c4" class="card cardImg4">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                          <a href="https://lanyards.com" target="_blank"><h4>Lanyards</h4></a>
                        </div>
                    </div>
                </label>

            </div>
        </div>
</section>
<script src="" type="text/javascript">
</script>
