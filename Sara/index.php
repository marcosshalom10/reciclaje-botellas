<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web</title>
    <link rel="stylesheet" href="./css/main.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header" id="inicio">
        <img src="./img/svg/hamburger.svg" alt="" class="hamburger">
        <nav class="menu-navegacion">
            <a href="#inicio">Inicio</a>
            <a href="#servicio">Objeticos y misiones</a>
            <a href="#portafolio">Portafolio</a>
            <a href="#expertos">Expertos</a>
            <a href="#contacto">Contaco</a>
        </nav>

        <div class="contenedor head">
            <h1 class="titulo">Reciclaje de botellas</h1>
            <p class="copy">CHMD</p>
        </div>
    </header>

    <main>
        <section class="contenedor" id="servicio">
            <h2 class="subtitulo">Objetivos y misiones</h2>

            <div class="contenedor-servicio">
                <img src="./img/svg/list.png" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service">
                            <span class="number">1</span> Objetivo
                        </h3>
                        <p>Juntar botellas por toda la escuela, hacer costales con las botellas, llegar al punto al que las podamos vender y ganar dinero.</p>
                    </div>

                    <div class="service">
                        <h3 class="n-service">
                            <span class="number">2</span> Misión 1
                        </h3>
                        <p>Una empresa que se dedica a juntar botellas y de eso venderlas. Como empresa y como objetivo tenemos que llegar a juntar la mayor cantidad de botellas durante todo el tiempo de este proyecto.</p>
                    </div>

                    <div class="service">
                        <h3 class="n-service">
                            <span class="number">3</span> Misión 2
                        </h3>
                        <p>Nos dedicaremos a revenderlas y de eso sacar ganancias. Lo más imporante del proyectos es que ayudamos al medio ambiente.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Galería</h2>
                <div class="contenedor-galeria">
                    <img src="./img/6.jpeg" alt="" class="img-galeria">
                    <img src="./img/1.jpeg" alt="" class="img-galeria">
                    <img src="./img/3.jpeg" alt="" class="img-galeria">
                    <img src="./img/2.jpeg" alt="" class="img-galeria">
                    <img src="./img/4.jpeg" alt="" class="img-galeria">
                    <img src="./img/5.jpeg" alt="" class="img-galeria">
                </div>
            </div>
        </section>

        <section class="imagen-light">
            <img src="./img/svg/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </section>

        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="./img/svg/Reciclaje.svg" alt="">
                    <h3 class="n-expert">Juntar botellas</h3>
                </div>

                <div class="cont-expert">
                    <img src="./img/svg/Camion.svg" alt="">
                    <h3 class="n-expert">Vender botellas</h3>
                </div>

                <div class="cont-expert">
                    <img src="./img/svg/prueba" alt="">
                    <h3 class="n-expert">Ayudar al ambiente</h3>
                </div>
            </section>
        </section>
    </main>

    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Sustetabilidad 4°</h2>
                <p>Somos expertos en la recolección de botellas</p>
            </div>

            <div class="social-media">
                <a href="https://www.instagram.com/reciclajedebotellas2022/?hl=es" class="social-media-icon"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>

        <div class="line"></div>
    </footer>

    <script src="./js/main.js"></script>
    <script src="./js/lightbox.js"></script>

</body>
</html>