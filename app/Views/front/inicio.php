<!-- MAIN -->
<main class="container" style="padding-top:12px">

    <!-- CAROUSEL -->
    <section class="carousel" aria-label="Carrousel de banners">
        <div class="track" id="carouselTrack">
            <div class="slide" style="background:url('<?=base_url('img/banners/banner_DRAMATURGOSPOETAS1.jpg');?>') center/cover no-repeat"></div>
            <div class="slide" style="background:url('<?=base_url('img/banners/banner_DRAMATURGOSPOETAS2.jpg');?>') center/cover no-repeat"></div>
            <div class="slide" style="background:url('<?=base_url('img/banners/banner_ENSAYOMASVALEMORIR1.jpg');?>') center/cover no-repeat"></div>
            <div class="slide" style="background:url('<?=base_url('img/banners/banner_ENSAYOMASVALEMORIR2.jpg');?>') center/cover no-repeat"></div>
        </div>

        <div class="controls">
            <button id="prevBtn" aria-label="Anterior"><i class="fa-solid fa-chevron-left"></i></button>
            <button id="nextBtn" aria-label="Siguiente"><i class="fa-solid fa-chevron-right"></i></button>
        </div>

        <div class="dots" id="carouselDots" aria-hidden="false"></div>
    </section>

    <!-- STATS -->
    <section class="stats" aria-label="Datos importantes">
        <div class="stat lead">
        <h3>Desde 1824</h3>
        <p>Creando escenarios donde las palabras toman vida</p>
        </div>

        <div class="stat">
        <h3>+40 Actores</h3>
        <p>Dentro de nuestro Elenco Estable</p>
        </div>

        <div class="stat">
        <h3>+113 Obras</h3>
        <p>Obras de Repertorios</p>
        </div>
    </section>

    <!-- on mobile we want the two stats below the lead in two columns -->
    <div class="two-cols container" style="display:none"></div>

    <!-- YOUTUBE VIDEO -->
    <section style="margin:20px 0">
        <div class="video-wrap" aria-hidden="false" title="Video CNT">
        <!-- replace VIDEO_ID with your YouTube id -->
        <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <!-- ACTUALIDAD -->
    <section class="actualidad">
        <h2 style="margin:0 0 12px;font-size:22px">ACTUALIDAD</h2>
        <div class="news-list">
        <article class="news-item">
            <img src="<?=base_url('img/banners/banner_ENSAYOMASVALEMORIR2.jpg');?>" alt="">
            <div>
                <h4>Construyendo un rinoceronte, exposición en el Teatro El Galeón</h4>
                <p>¿Qué hay detrás de cada propuesta escenográfica? ¿Cuántos creadores trabajan arduamente en cada libreto que se lleva al escenario?</p>
            </div>
        </article>

        <article class="news-item">
            <img src="<?=base_url('img/banners/banner_TEQUILAYCANCION2.JPG');?>" alt="">
            <div>
                <h4>Monólogo con un par de alas en la obra Instrucciones para volar</h4>
                <p>Una mujer, habitante de un país caluroso, actriz desempleada, ...</p>
            </div>
        </article>
        </div>
    </section>

</main>