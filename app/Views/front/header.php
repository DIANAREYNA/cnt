<!DOCTYPE html>

<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" /> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" class="pestaña" href="<?=base_url('img/logo_cnt_webpage.svg');?>" type="logo CNT">
  <title>Compañía Nacional de Teatro</title>

  <?php

    if (isset($css))
        foreach ($css as $algo)
                echo '<link href="'.base_url('css/'.$algo).'" rel="stylesheet">';

    if (isset($externalcss))
        foreach ($externalcss as $css)
                echo '<link href="'.$css.'" rel="stylesheet">';

    if (isset($externaljs))
        foreach ($externaljs as $js)
                echo '<script src="'.$js.'"></script>';

    ?>

</head>
	
<body>

<header class="header">
  <nav>
    <!-- Logo -->
    <div class="logo">
      <a href="<?=base_url();?>">
        <img src="<?=base_url('img/logo_cnt.svg');?>" alt="Logo CNT" />
      </a>
    </div>

    <!-- Botón hamburguesa -->
    <div class="hamburger" id="hamburger" aria-label="Abrir menú" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <!-- Menú principal -->
    <ul class="menu" id="menu">

      <li class="has-sub">
        <a href="#" class="menu-link">
          Cartelera 
          <span class="material-symbols-outlined">stat_minus_1</span>
        </a>
        <ul class="submenu">
          <li><a href="<?=base_url('temporada');?>">Temporada</a></li>
          <li><a href="#">Programación Completa</a></li>
          <li><a href="#">Cómo adquirir boleto</a></li>
          <li><a href="#">Repertorio</a></li>
        </ul>
      </li>

      <li class="has-sub">
        <a href="#" class="menu-link">
          La compañía <span class="material-symbols-outlined">stat_minus_1</span>
        </a>
        <ul class="submenu">
          <li><a href="#">Historia</a></li>
          <li><a href="<?=base_url('elencoestable');?>">Elenco Estable</a></li>
          <li><a href="#">Directorio</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </li>

      
          <li class="social-block">
            <a href="https://www.facebook.com/cnteatro/" target="_blank"><img src="<?=base_url('img/redes_FACE.png');?>" alt="Facebook"></a>
            <a href="https://www.instagram.com/cnteatromx/?hl=en" target="_blank"><img src="<?=base_url('img/redes_INSTA.png');?>" alt="Instagram"></a>
            <a href="https://x.com/CNTeatromx" target="_blank"><img src="<?=base_url('img/redes_X.png');?>" alt="X"></a>
            <a href="https://www.youtube.com/channel/UCCAyjVY8lz2vkM5XR-ciYDA" target="_blank"><img src="<?=base_url('img/redes_YT.png');?>" alt="YouTube"></a>
            <a href="https://www.tiktok.com/@cnteatromx" target="_blank"><img src="<?=base_url('img/redes_TIKTOK.png');?>" alt="TikTok"></a>
            <a href="https://www.threads.com/@cnteatromx" target="_blank"><img src="<?=base_url('img/redes_TREADS.png');?>" alt="Threads"></a>
          </li>
   
      
      <li class="lang-switch">
        <a href="#" class="active">ES</a>
        <a href="#">EN</a>
      </li>
      <li class="subscribe-block">
        <div class="subscribe-inner">
          <a href="suscripcion.html" class="subscribe-lines" target="_self">
            <hr>
            <div class="subscribe-content">
              <img src="img/icono_correo.webp" class="icono.sub" alt="icono-suscripcion">
              <span>Suscríbete</span>
            </div>
            <hr>
          </a>
          <p>Y recibe antes que nadie información sobre nuestras funciones, talleres y actividades.</p>
        </div>
      </li>

      <li class="footer-mobile">
        © Instituto Nacional de Bellas Artes y Literatura
    </li>
    </ul>
      
  </nav>
</header>