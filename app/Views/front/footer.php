<footer>
  <nav aria-label="navegacion-piedepagina">
    <!-- Líneas de color -->
    <div class="bg-cnt"></div>
    <div class="bg-gris"></div>

    <!-- Contenedor principal -->
    <div id="footer-inbal">
      <div class="container">
        <div class="footer-content">

          <!-- Columna 1 -->
          <div class="footer-info">
            <h3 class="titulo-footer">COMPAÑÍA NACIONAL DE TEATRO</h3>
            <p>
              Francisco Sosa #159<br>
              entre Melchor Ocampo y Encantada<br>
              04100, Coyoacán, CDMX<br>
              55 8647 5620 / ext. 5600<br>
              <a href="mailto:contactocnt@inba.gob.mx">contactocnt@inba.gob.mx</a>
            </p>

            <div class="redes">
              <a href="https://facebook.com/cnteatromx/" target="_blank" aria-label="Facebook"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="https://twitter.com/cnteatromx/" target="_blank" aria-label="X (Twitter)"><i class="fa-brands fa-square-x-twitter"></i></a>
              <a href="https://www.youtube.com/channel/UCCAyjVY8lz2vkM5XR-ciYDA" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
              <a href="https://instagram.com/cnteatromx/" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.tiktok.com/@cnteatromx" target="_blank" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
              <a href="https://www.threads.net/@cnteatromx" target="_blank" aria-label="Threads"><i class="fa-brands fa-threads"></i></a>
              <span class="text-pink">@CNTeatromx</span>
            </div>
          </div>

          <!-- Columna 2 -->
          <div class="footer-logo">
            <a href="https://inba.gob.mx" target="_blank">
              <img src="https://desarrollos.victorm.com.mx/ciateatro/public/images/logo-oficial.png" alt="Logo INBAL" />
            </a>
          </div>

        </div>
      </div>
    </div>

    <!-- Línea inferior -->
    <div class="footer-bottom">
      <p>© Instituto Nacional de Bellas Artes y Literatura. México, <script>document.write(new Date().getFullYear());</script>.</p>
    </div>
  </nav>
</footer>

<?php
    if (isset($js))
        foreach ($js as $c)
                echo '<script src="'.base_url('js/'.$c).'"></script>';
?>

</body>
</html>