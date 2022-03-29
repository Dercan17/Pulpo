<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de pulpo</title>
    <link rel="shortcut icon" href="IMAGENES/pulpo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<body>

<?php
    include ("../proyecto/headerIndex.php");
    ?>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestro producto </h2>
            <div class="contenedor-sobre-nosotros">
                <img src="IMAGENES/img2.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span> Quines somos?</h3>
                    <p>Empresa de desarrollo de aplicativos para facturacion, estadisticas, stocks, entre otros en farmacias,
                         mejorando asi el proceso manual que estas realizan al momento de generar estadisticas
                      </p>

                    <h3><span>2</span> Objetivos </h3>
                    <p>Especificar los requisitos necesarios para desarrollalr la aplicacion movil
                        de acuerdo a los requerimientos del cliente.
                        <p>
                        diseñar un sistema de acuerdo con los requisitos del cliente.
                        </p>
                        <p>
                        construir un sistema que cumpla con los requisitos de la solucion informatica.
                        </p>
                    </p>

                </div>

            </div>
        </section>

        <section class="portafolio">
                <div class="contenedor">
                     <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                <div link="nuestro-trabajo.php" class="imagen-port">
                    <img src="IMAGENES/img1.jpg" alt="">
                <div  class="hover-galeria">
                    <img src="IMAGENES/seleccionar.png" alt="">
                    <p >Nuestro Trabajo </p>
                </div>
                </div>
                <div class="imagen-port">
                    <img src="IMAGENES/img2.jpg" alt="">
                <div class="hover-galeria">
                    <img src="IMAGENES/seleccionar.png" alt="">
                    <p>Nuestro Equipo </p>
                </div>
                </div>
                <div class="imagen-port">
                        <img src="IMAGENES/img3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="IMAGENES/seleccionar.png" alt="">
                            <p>Objetivos </p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="IMAGENES/img4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="IMAGENES/seleccionar.png" alt="">
                            <p>Contactanos </p>
                        </div>
                    </div>
                </div>


            </div>

        </section>
    </main>

    <footer>
        <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Telefono</h4>
            <p>1234567890</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>pulposervicios@gmail.com</p>
        </div>
        <div class="content-foo">
            <h4>Direccion</h4>
            <p>SENA (CTGI)</p>
        </div>
    </div>
    </footer>
</body>

</html>