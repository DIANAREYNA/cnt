<div class="pleca pleca-azul"></div>
<div class="pleca pleca-gris"></div>

<footer class="footer">
<div class="footer-overlay"></div>

  <div class="footer-container">

    <div class="footer-left">
      <h3 class="footer-title">COMPAÑÍA NACIONAL DE TEATRO</h3>
      <br>
      <p>Francisco Sosa #159<br>
      entre Melchor Ocampo y Encantada<br>
      04100, Coyoacán, CDMX.<br>
      Contacto: 55 8647 5620 / ext. 5600 cnt@inba.gob.mx</p>
      <br>
      <div class="footer-social">
        <li class="social">
            <a href="https://www.facebook.com/cnteatro/" target="_blank"><img src="img/redes_FACE.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/cnteatromx/?hl=en" target="_blank"><img src="img/redes_INSTA.png" alt="Instagram"></a>
            <a href="https://x.com/CNTeatromx" target="_blank"><img src="img/redes_X.png" alt="X"></a>
            <a href="https://www.youtube.com/channel/UCCAyjVY8lz2vkM5XR-ciYDA" target="_blank"><img src="img/redes_YT.png" alt="YouTube"></a>
            <a href="https://www.tiktok.com/@cnteatromx" target="_blank"><img src="img/redes_TIKTOK.png" alt="TikTok"></a>
            <a href="https://www.threads.com/@cnteatromx" target="_blank"><img src="img/redes_TREADS.png" alt="Threads"></a>
          </li>
        
        </div>

        <span class="user"><strong>@CNTteatromx</strong></span>

    </div>

      <div class="logos">
        <img src="<?=base_url('img/logos_footer.png');?>" alt="Cultura">
      </div>


  </div>

  <div class="footer-bottom">
    © Instituto Nacional de Bellas Artes y Literatura. México, 2025.
  </div>
</footer>


<?php
    if (isset($js))
        foreach ($js as $c)
                echo '<script src="'.base_url('js/'.$c).'"></script>';
?>

</body>
</html>