<?php 
include("../../php/conexion.php");
include("../../php/provedor.php");

//instanciamos las clases que necesitamos
$conect = new Conexion();
$prov = new provedor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/estilos_inventario.css">
    <title>
      Provedor
    </title>

</head>
<body>


        <div class="container-fuild" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Pulpo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link text-light" href="../index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="verClientes.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            

            <li><a class="dropdown-item text-light" href="../../clientes/Barrios/barrios.php">Barrios</a></li>
    
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="inventario/producto/inventario.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inventario
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            

            <li><a class="dropdown-item text-light" href="../lote/verLotes.php">Lote</a></li>
            <li><a class="dropdown-item text-light" href="verProvedor.php">Provedor</a></li>
            <li><a class="dropdown-item text-light" href="../producto/inventario.php">Productos</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="../../php/cerrarsesion.php">Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <script scr="./js/boostrap.bundlee.min.js"></script>

<center>
    <form class="row g--1" action="procesoIngresar.php" method="POST">
        <br><br><br><h2>Provedor</h2>    
        <label class="form-label" for="">Nombre</label><br>   
        <input lass="form-control" type="text" name="nombre" placeholder=""><br><br>
    
        <label class="form-label" for=""> Telefono</label><br>
        <input lass="form-control" type="text" name="tel"><br><br>

        <label class="form-label" for="">Correo</label><br>
        <input lass="form-control" type="email" name="correo"><br><br>

        <label class="form-label" for="">Direccion</label><br>
        <input lass="form-control" type="text" name="direc"><br><br>


    
    <input class="btn btn-primary" type="submit">

</form>


</body>
</html>