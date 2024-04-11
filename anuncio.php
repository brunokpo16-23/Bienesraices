<?php
require 'includes/funciones.php';
incluirTemplate("header", $inicio = true);
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta Frente al Bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="iconoo" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="iconoo" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="iconoo" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, consequatur perspiciatis doloribus sunt,
            mollitia beatae dicta, debitis nam nemo voluptate iusto ullam quasi quos quisquam nesciunt quas commodi
            nobis distinctio.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facilis doloribus omnis, natus itaque
            quod numquam accusantium architecto non, repellat labore! Voluptates possimus molestiae, excepturi sequi
            neque natus itaque voluptatem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque atque
            repudiandae sint placeat quo sapiente illo distinctio incidunt blanditiis veritatis ducimus, asperiores
            nesciunt quaerat corrupti accusamus dolores? Obcaecati, vero harum!</p>
    </div>
</main>

<?php
incluirTemplate("footer");
?>