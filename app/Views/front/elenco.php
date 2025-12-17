<section class="section">
    <h1>ELENCO ESTABLE</h1>
    <hr class="divider">
</section>

<section class="filter-section">
    <label for="categoria">Buscar por:</label>
    <select id="categoria">
        <option value="">Categoría</option>
        <option>Todos</option>
        <option>Actrices y actores de número</option>
        <option>Actores con experiencia superior a 30 años</option>
        <option>Actores con experiencia superior a 20 años</option>
        <option>Actrices con experiencia superior a 20 años</option>
        <option>Actores jóvenes con experiencia</option>
    </select>
</section>

<section class="grid-actores">

    <article class="card">
        <a href="<?=base_url();?>">
            <img src="<?=base_url('img/actor1.jpg');?>" alt="Actor" />
            <div class="card-info">
                <h3>ANTONIO ROJAS 
                    <span class="material-symbols-outlined">arrow_outward</span>
                </h3>
            </div>
        </a>
    </article>

</section>