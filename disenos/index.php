<!DOCTYPE html>
<html lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>D'LARCS | Creación de páginas web y aplicaciones</title>

  <meta name="description" content="D'LARCS crea páginas web modernas, claras y funcionales para negocios, marcas y emprendimientos. Diseños profesionales con animaciones y secciones parallax.">
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="author" content="D'LARCS">

  <link rel="canonical" href="https://www.dlarcs.com/">
  <link rel="icon" href="global/navbar/img/logo.negro.png">

  <?php
   $base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

   $cssFile = $base . '/disenos/style.css';
   $jsFile  = $base . '/disenos/app.js';

   $cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
   $jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
   ?>

   <link rel="stylesheet" href="../disenos/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
   <script defer src="../disenos/app.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>

  <!-- Open Graph -->
  <meta property="og:title" content="D'LARCS | Diseño y venta de páginas web para negocios">
  <meta property="og:description" content="Páginas web modernas, claras y funcionales para negocios, marcas y emprendimientos.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.dlarcs.com/">
  <meta property="og:image" content="https://www.dlarcs.com/global/navbar/img/logo.negro.png">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="D'LARCS | Diseño y venta de páginas web para negocios">
  <meta name="twitter:description" content="Diseño web moderno, claro y profesional con opciones básicas, intermedias y premium.">
  <meta name="twitter:image" content="https://www.dlarcs.com/global/navbar/img/logo.negro.png">

  <!-- Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "D'LARCS",
    "url": "https://www.dlarcs.com/",
    "logo": "https://www.dlarcs.com/img/logo.negro.png"
  }
  </script>
</head>

<body>

  <div class="preloader" id="preloader">
    <div class="loader">
    </div>
  </div>
  <script src="../soporte.js"></script>


  <?php include "../disenos/menu/menu.php"; ?>

  <main class="container_diseño">
    <?php include "../global/arrow/arrow.php"; ?>
    <?php include "../disenos/newsletter/newsletter.php" ?>
    <?php include "../disenos/animaciones/seccion3/seccion3.php" ?>
    <?php include "../disenos/animaciones/seccion4/seccion4.php" ?>
    <?php include "../disenos/animaciones/seccion5/seccion5.php" ?>
    <?php include "../disenos/animaciones/seccion1/seccion1.php" ?>





    <a
      class="whatsapp-fab"
      href="https://wa.me/573138846378?text=Hola%2C%20vengo%20desde%20la%20web%20de%20D%27LARCS"
      target="_blank"
      rel="noopener"
      aria-label="Chatear por WhatsApp"
    >
      <img src="../global/img/img_whatsApp.png" alt="Contactar por WhatsApp" decoding="async">
    </a>
  </main>

  <?php include "../portafolio/footer/footer.php"; ?>

</body>
</html>
