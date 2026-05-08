<?php
$cssTime = filemtime('global/arrow/arrow.css');
$jsTime  = filemtime('global/arrow/arrow.js');
?>

<link rel="stylesheet" href="global/arrow/arrow.css?v=<?= $cssTime ?>">

<section class="scroll-indicator" aria-label="Más contenido abajo">
  <span class="scroll-indicator__circle">
    <span class="scroll-indicator__arrow"></span>
  </span>
</section>
<script src="global/arrow/arrow.js?v=<?= $jsTime ?>" type="text/javascript"></script>
