<?php
require 'includes/funciones.php';
incluirTemplate("header", $inicio = true);
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>


    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="anuncio">
    </picture>

    <p class="informacion-meta">Escrito el: <span>08/04/2024</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">
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