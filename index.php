<?php
require 'includes/funciones.php';
incluirTemplate("header", $inicio = true);
?>

<main class="contenedor seccion">
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
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                <a href="anuncios.html" class="boton boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
        </div>

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa terminados de Lujo</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$6,000,000</p>

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

                <a href="anuncios.html" class="boton boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
        </div>

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa con Alberca</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$8,000,000</p>

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

                <a href="anuncios.html" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
        </div>
    </div>

    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus Sueños</h2>
    <p>Llena el formulario de contacto y un asesor se comunicara a la brevedad </p>
    <a href="contacto.html" class="boton-amarillo">Contactarnos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="imagen blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>08/04/2024</span> por: <span>Admin</span></p>

                    <p>Consejos para construir la terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="imagen blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guía para la decoración de tu Casa</h4>
                    <p class="informacion-meta">Escrito el: <span>08/04/2024</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para
                        darle vida a tu espacio</p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atención y la casa que me ofrecieron cumple
                todas mis expectativas.
            </blockquote>
            <p>- Bruno Spinsanti -</p>
        </div>
    </section>
</div>

<?php
incluirTemplate("footer");
?>