<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA WEB PULPO</title>
    <link rel="shortcut icon" href="IMAGENES/pulpo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<body>

<?php
           include  "../proyecto/headerIndex.php";
           ?>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestro producto </h2>
            <div class="contenedor-sobre-nosotros">
                <img src="IMAGENES/icon4.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span> El mejor producto</h3>
                    <p>APLICATIIVO DE FACTURACION QUE PERMINTE GENERAR INFORMES ESTADISTICOS PARA EL MANEJO ADECUADO DE
                        LA FACTURACION EN UNA FARMACIA</p>

                    <h3><span>2</span> Las mejores soluciones </h3>
                    <p>ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR LA APLICACIÓN MÓVIL DE ACUERDO CON LAS
                        NECESIDADES DEL CLIENTE
                        SE ANALIZA LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL APLICATIVO.</p>

                </div>

            </div>
        </section>

        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="IMAGENES/img1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="IMAGENES/seleccionar.png" alt="">
                            <p>Nuestro Trabajo </p>
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

  <?php include'footer.php'; ?>
</body>

</html>