<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Metadatos básicos -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="D'LARCS - Creamos páginas web modernas y rápidas para emprendedores." />
  <meta name="author" content="D'LARCS" />
  <meta name="keywords" content="páginas web, diseño web, emprendedores, ecommerce, Colombia" />

  <?php
  $cssTime = filemtime('../../view/termCondition/style.css'); // ejemplo: '../Home/5.Video/video.css'
  ?>
  <link rel="stylesheet" href="../../view/termCondition/style.css?v=<?= $cssTime ?>">


  <!-- Título de la página -->
  <title>Términos y Condiciones</title>

  <!-- Fuente Poppins desde Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../../view/global/footer/img/logo.png" />

  <!-- CSS con filemtime para evitar caché -->
</head>

<body class="servicios_body">
  <div class="whatssap">
  <a href="https://wa.me/573138846378" target="_blank" rel="noopener">
    <img src="../../view/home/img_whatsApp.webp" alt="WhatsApp">
  </a>
</div>
 <?php include "../../view/global/menu/menu.php" ?>
 <?php include "../../view/termCondition/seccion/termCondition.php" ?>
 <?php include "../../view/global/footer/footer.php" ?>
</body>
</html>
