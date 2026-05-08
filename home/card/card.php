<?php
$cssTime = filemtime('home/card/card.css');
$jsTime = filemtime('home/card/card.js');
?>
<link rel="stylesheet" href="home/card/card.css?v=<?= $cssTime ?>">


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
<script src="home/card/card.js?v=<?= $jsTime ?>" type="text/javascript"></script>
