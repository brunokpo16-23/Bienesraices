<?php
require 'includes/funciones.php';
incluirTemplate("header", $inicio = true);
?>
<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contendor-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="anuncio">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 Años de Experiencia
            </blockquote>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sed deserunt et cum cupiditate,
                dicta
                modi asperiores sunt tempore corrupti autem quia obcaecati quidem expedita minus distinctio ullam
                omnis
                magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit maiores, perferendis dolorum
                iure
                quam veritatis saepe, illum non nemo optio maxime eius sint odit error beatae iusto magnam,
                necessitatibus sunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea corrupti error
                est ad accusamus,</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sed deserunt et cum cupiditate,
                dicta
                modi asperiores sunt tempore corrupti autem quia obcaecati quidem expedita minus distinctio ullam
                omnis
                magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit maiores, perferendis dolorum
                iure</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Mas sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem Lorem ipsum, dolor sit emo doloremque. ipsum, dolor sit amet consectetur adipisicing elit.
                Commodi quidem</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem Lorem ipsum, dolor sit emo doloremque. ipsum, dolor sit amet consectetur adipisicing elit.
                Commodi quidem</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem Lorem ipsum, dolor sit emo doloremque. ipsum, dolor sit amet consectetur adipisicing elit.
                Commodi quidem</p>
        </div>
    </div>
</section>

<?php
incluirTemplate("footer");
?>