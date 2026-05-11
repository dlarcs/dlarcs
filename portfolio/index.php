<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-language" content="es-CO">

  <!-- Título enfocado en conversión y servicios -->
  <title>D'LARCS | Diseño Web Profesional, Desarrollo a Medida y UX/UI</title>

  <?php
  $base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
  $cssFile = $base . '/portfolio/style.css';
  $cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
  ?>

  <!-- SEO para Agencia Digital -->
  <meta name="description" content="Creamos sitios web de alto impacto con diseño exclusivo, optimización SEO y experiencia de usuario premium. Impulsa tu presencia digital con D'LARCS.">
  <meta name="keywords" content="diseño web, desarrollo web, ecommerce, paginas web profesionales, UX UI, agencia digital">
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="https://www.tu-dominio.com/">
  <meta name="theme-color" content="#224335">

  <!-- Open Graph: Redes Sociales -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="D'LARCS">
  <meta property="og:title" content="D'LARCS | Expertos en Creación de Páginas Web de Alto Rendimiento">
  <meta property="og:description" content="Transformamos ideas en experiencias digitales. Diseño web moderno, rápido y optimizado para Google.">
  <meta property="og:url" content="https://www.tu-dominio.com/">
  <meta property="og:image" content="https://www.tu-dominio.com/home/img/preview-agencia.jpg">

  <!-- Iconos -->
  <link rel="icon" href="/home/img/logo_pw.png">
  <link rel="apple-touch-icon" href="/home/img/logo_pw.png">

  <!-- CSS -->
  <link rel="stylesheet" href="../portfolio/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

  <!-- Datos estructurados: ProfessionalService (Mejor para agencias) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "ProfessionalService",
        "@id": "https://www.tu-dominio.com/#agency",
        "name": "D'LARCS - Diseño y Desarrollo Web",
        "url": "https://www.tu-dominio.com/",
        "image": "https://www.tu-dominio.com/home/img/logo_pw.png",
        "description": "Agencia especializada en diseño web creativo, desarrollo de software y estrategias digitales.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Bogotá",
          "addressCountry": "CO"
        },
        "priceRange": "$$"
      },
      {
        "@type": "WebSite",
        "@id": "https://www.tu-dominio.com/#website",
        "name": "D'LARCS",
        "url": "https://www.tu-dominio.com/",
        "inLanguage": "es-CO"
      }
    ]
  }
  </script>

</head>

<body class="body_portfolio">

  <?php include $base . "../global/menu/menu.php"; ?>

  <main class="container_home">
    <!-- El Slider ahora debería mostrar tus mejores proyectos -->
    <?php include $base . "/home/slider/slider.php"; ?>

    <!-- Intro: "Quiénes somos y qué valor aportamos" -->
    <?php include $base . "/home/intro/intro.php"; ?>

    <!-- Secciones adaptadas a servicios de agencia -->
    <div class="lazy-section" data-url="../portfolio/newsletter/newsletter.php"></div> <!-- Cambiado de places a servicios -->
    <div class="lazy-section" data-url="../portfolio/seccion/portfolio.php"></div> <!-- Tu portafolio -->
    <!-- <div class="lazy-section" data-url="/home/testimonials/clients.php"></div>
    <div class="lazy-section" data-url="/home/contact/form.php"></div>  -->
    <div class="lazy-section" data-url="/home/maps/location.php"></div>
  </main>

  <?php include $base . "/global/footer/footer.php"; ?>


</body>
</html>
