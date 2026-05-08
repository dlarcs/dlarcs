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
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/portfolio/style.css';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>

<link rel="stylesheet" href="/portfolio/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

  <!-- Título de la página -->
  <title>D'LARCS | Diseño web |</title>

  <!-- Fuente Poppins desde Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../global/navbar/img/logo.negro.png" />

  <!-- CSS con filemtime para evitar caché -->
</head>

<body class="portfolio_body">
  <div class="whatssap">
  <a href="https://wa.me/573138846378" target="_blank" rel="noopener">
    <img src="../../home/img_whatsApp.webp" alt="WhatsApp">
  </a>
</div>
 <?php include "../global/navbar/navbar.php" ?>
 <?php include "../portfolio/newsletter/newsletter.php" ?>
 <?php include "../portfolio/seccion/portfolio.php" ?>
 <?php include "../global/footer/footer.php" ?>
</body>
</html>
