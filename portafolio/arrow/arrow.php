<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/portafolio/arrow.css';
$jsFile  = $base . '/portafolio/arrow.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>
<link rel="stylesheet" href="../portafolio/arrow.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<section class="scroll-indicator" aria-label="Más contenido abajo">
  <span class="scroll-indicator__circle">
    <span class="scroll-indicator__arrow"></span>
  </span>
</section>
<script defer src="portafolio/arrow.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
