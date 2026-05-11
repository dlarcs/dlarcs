<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/home/avatar/avatar.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="home/avatar/avatar.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<section class="avatar_section">
  <div class="avatar_group">

    <article class="avatar_item">
      <div class="avatar_tooltip">
        <div>
          <div class="avatar_name_row">
            <p class="avatar_name">Silvio</p>
            <span class="verified_icon">✓</span>
          </div>
          <span class="avatar_username">Business</span>
        </div>
        <span class="tooltip_arrow"></span>
      </div>

      <img
        src="home/avatar/img/silvio.png"
        alt="Richard Nelson"
        class="avatar_image"
      >
    </article>

    <article class="avatar_item">
      <div class="avatar_tooltip">
        <div>
          <div class="avatar_name_row">
            <p class="avatar_name">Lis</p>
            <span class="verified_icon">✓</span>
          </div>
          <span class="avatar_username">Manager</span>
        </div>
        <span class="tooltip_arrow"></span>
      </div>

      <img
        src="home/avatar/img/lis.png"
        alt="Avery Johnson"
        class="avatar_image"
      >
    </article>

    <article class="avatar_item">
      <div class="avatar_tooltip">
        <div>
          <div class="avatar_name_row">
            <p class="avatar_name">Alejandra</p>
            <span class="verified_icon">✓</span>
          </div>
          <span class="avatar_username">Full Stack</span>
        </div>
        <span class="tooltip_arrow"></span>
      </div>

      <img
        src="home/avatar/img/ale.png"
        alt="Jordan Lee"
        class="avatar_image"
      >
    </article>

    <article class="avatar_item">
      <div class="avatar_tooltip">
        <div>
          <div class="avatar_name_row">
            <p class="avatar_name">Andres</p>
            <span class="verified_icon">✓</span>
          </div>
          <span class="avatar_username">Backend</span>
        </div>
        <span class="tooltip_arrow"></span>
      </div>

      <img
        src="home/avatar/img/andres.png"
        alt="Noah Patel"
        class="avatar_image"
      >
    </article>

    <article class="avatar_item">
      <div class="avatar_tooltip">
        <div>
          <div class="avatar_name_row">
            <p class="avatar_name">Laura</p>
            <span class="verified_icon">✓</span>
          </div>
          <span class="avatar_username">CSO</span>
        </div>
        <span class="tooltip_arrow"></span>
      </div>

      <img
        src="home/avatar/img/laura.png"
        alt="Oliver Brooks"
        class="avatar_image"
      >
    </article>
    <article class="avatar_item">
      <div class="avatar_tooltip">
        <div>
          <div class="avatar_name_row">
            <p class="avatar_name">Daniela</p>
            <span class="verified_icon">✓</span>
          </div>
          <span class="avatar_username">Designer</span>
        </div>
        <span class="tooltip_arrow"></span>
      </div>

      <img
        src="home/avatar/img/dani.png"
        alt="Oliver Brooks"
        class="avatar_image"
      >
    </article>

  </div>
</section>
