<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/home/card/card.css';
$jsFile  = $base . '/home/card/card.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>
<link rel="stylesheet" href="home/card/card.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<div class="card_parallax1 card_parallax">
  <div class="card_content">
    <div class="marquee_container marquee-left">
      <div class="fade fade-left"></div>

      <div class="marquee-inner">
        <div class="marquee-track logo-track">
          <template class="logo-template">
            <img class="logo-img" draggable="false" />
          </template>
        </div>
      </div>

      <div class="fade fade-right"></div>
    </div>

    <div class="marquee_container marquee_right">
      <div class="fade fade-left"></div>

      <div class="marquee-inner">
        <div class="marquee-track logo-track">
          <template class="logo-template">
            <img class="logo-img" draggable="false" />
          </template>
        </div>
      </div>

      <div class="fade fade-right"></div>
    </div>
  </div>
</div>
<script defer src="home/card/card.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
