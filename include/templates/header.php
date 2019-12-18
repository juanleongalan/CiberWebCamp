<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge" >
  <title>CiberWebCamp</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap">
  <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index') {
      echo '<link rel="stylesheet" href="css/colorbox.css">';
    } else if($pagina == 'conferencia') {
      echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
  ?>
  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <style type="text/css"> #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }</style>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <link rel="stylesheet" href="css/main.css">  
</head>

<body class="<?php echo $pagina; ?>">
  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"> <i class="fas fa-calendar-alt"></i> 24-01-20</p>
            <p class="ciudad"> <i class="fas fa-map-marker-alt"></i> Madrid, ESP</p>
          </div>
          <h1 class="nombre-sitio">CiberWebCamp</h1> <br> <br>
          <p class="slogan">La mejor conferencia de <span>Ciberseguridad</span></p>
        </div><!--información-Evento-->
      </div>
    </div><!--Hero-->
  </header> 
  <div class="barra">
    <div class="contenedor clearfix"><!-- Inicio Contenedor -->
      <div class="logo">
            <a href="index.php">
                <img src="img/logo2.svg" alt="Logotipo">
            </a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservas</a>
      </nav>
    </div><!--.contenedor-->
  </div><!--.barra-->