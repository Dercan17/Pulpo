<?php
include('validarLogin.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="IMAGENES/pulpo.png" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Pulpo</title>
  </head>



  <body class="bg-dark">

    <header>
        <nav>
            <a class="text-right" href="index.php">Inicio</a>
        </nav>
     </header>
  <section>

    <div class="row g-0">
        <div class="col-lg-7">
         
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  
                  
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item img-1 min-vh-100 active">
                  </div>
                  <div class="carousel-item img-2 min-vh-100">
                  </div>
                  <div class="carousel-item img-3 min-vh-100">
                  </div>
                 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
       

     </div> 

    <div class="col-lg-5 d-flex flex-column aling-items-end min-vh-100">

       <div class="px-lg-5 pt-lg-4 pb-lg-3 p-0 w-0 mb-auto">  
          
      

       </div> 
          <div class="contenedor">
              <h1 class="font-weight-bold mb-4">Bienvenido a pulpo</h1>
              <form actio="" method="post" >
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label font-weight-bold">Usuario</label>
                  <input type="text" class="form-control bg-dark-x border-0" placeholder="Ingresa tu usuario" id="usuario" name="usuario" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                  <input type="password" class="form-control bg-dark-x border-0 mb-2"  placeholder="Ingrese su contraseña" id="clave" name="clave">
                </div>

                <div class="alert"><?php echo isset($alert) ? $alert:'';   ?></div>
                <button type="submit"  class="btn btn-primary w-100">  Iniciar sesion </button>
              </form>
                
          </div>
     </div> 
    </div>
  </section>

  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  
  </body>
</html>