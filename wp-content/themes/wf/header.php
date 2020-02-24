<?php
  date_default_timezone_set('America/Bogota');
  header('Content-Type: text/html; charset=UTF-8');

  include 'const.php';
?>
<!DOCTYPE html>
<html lang="<?= get_bloginfo( 'language' ) ?>" itemscope itemtype="http://schema.org/<?= is_home() ? 'WebSite' : 'Article' ?>" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title><?= get_bloginfo( 'name' ) ?></title>
  <meta name="keywords" content="webfacil, colombia, hosting, monteria, wordpress">
	<meta name="description" content="Diseño y desarrollo web. Dominios y alojamiento web. WhatsApp +57 3057863874">
  <!-- BOTS -->
	<meta name="googlebot" content="index, follow" />
	<meta name="robots" content="index, follow" />
  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,700&display=swap">
  <link rel="stylesheet" href="https://cdn.webfacil.com.co/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://cdn.webfacil.com.co/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= THEME_URI ?>/css/styles.css">
  <!-- jQuery -->
  <script src="https://cdn.webfacil.com.co/jquery/1.11.3/jquery.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
  <!-- OG Data -->
	<meta property="og:title" content="webfácil">
	<meta property="og:description" content="Diseño y desarrollo web. Dominios y alojamiento web. WhatsApp +57 3057863874">
	<meta property="og:image" content="https://webfacil.com.co/logo-social.jpg">
</head>
<body>
<div class="top-bar">
  <div class="container">
    <ul class="contact">
      <li>
        <i class="fa fa-whatsapp"></i> [+57] 305 786 3874
      </li>
      <li>
        <i class="fa fa-envelope-o"></i> luis@webfacil.com.co
      </li>
      <li>Síguenos:</li>
      <li>
        <a href="https://fb.com/webfacilco" target="_blank" class="social-link"><i class="fa fa-facebook"></i> Facebook</a>
        <a href="https://instagram.com/webfacilco" target="_blank" class="social-link"><i class="fa fa-instagram"></i> Instagram</a>
        <a href="https://www.linkedin.com/company/webfacil" target="_blank" class="social-link"><i class="fa fa-linkedin"></i> LinkedIn</a>
      </li>
    </ul>
  </div>
</div>

<header itemscope="itemscope" itemtype="http://schema.org/WPHeader">
  <div class="container clearfix">
    <a class="logo-container" href="<?= get_site_url() ?>">
      <figure class="logo">
        <img src="<?= THEME_URI ?>/images/logo-white.png" alt="webfácil">
      </figure>
    </a>

    <nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
      <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
    </nav>
  </div>
</header>