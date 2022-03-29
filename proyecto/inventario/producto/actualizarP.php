<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();

$id = $_GET['id'];
$consul = $producto->consultarProducto($id);

$resultado = $con->Mostrar($consul);

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

    <title>Barrios</title>

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
            <a class="nav-link text-light" href="../../facturacion.php">Inicio</a>
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
            

            <li><a class="dropdown-item text-light" href="../../inventario/lote/verLotes.php">Lote</a></li>
            <li><a class="dropdown-item text-light" href="../../inventario/provedor/verProvedor.php">Provedor</a></li>
            <li><a class="dropdown-item text-light" href="../../inventario/producto/inventario.php">Productos</a></li>
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
    
<form action="procesoActualizar.php" method="POST">
<table class="table table-hover">
   
<table class="table table-hover table-dark">
   
   
       

  
  
  <?php
      While ($row=Mysqli_fetch_assoc($resultado)){
        ?>
    
    <label for="" lass="form-label">Codigo del producto </label><br>
    <input class="form-control" type="text" value="<?php echo $row["Codigo_Producto"];  ?>" name="Codigo_Producto"> 
    <br><br>
    
    <label lass="form-label"> Nombre del producto </label><br>
    <input class="form-control" type="text" value="<?php echo $row["Nombre_Producto"];  ?>" name="Nombre_Producto"> 
    <br><br>

    <label lass="form-label"> Precio de entrada </label><br>
    <input class="form-control" type="text" value="<?php echo $row["Precio_Entrada"];  ?>" name="Precio_Entrada">
    <br><br>    

    <label lass="form-label"> Precio de Cajas </label><br>
    <input class="form-control" type="text" value="<?php echo $row["Precio_Caja"];  ?>" name="Precio_Caja">
    <br><br>   

    <label lass="form-label"> Precio de Blisters </label><br>
    <input class="form-control" type="text" value="<?php echo $row["Precio_Blister"];  ?>" name="Precio_Blister">
    <br><br>   

    <label lass="form-label"> Precio de Unidades </label><br>
    <input class="form-control" type="text" value="<?php echo $row["Precio_unidad"];  ?>" name="Precio_Unidad">
    <br><br>   

    <label lass="form-label"> Concentracion </label><br>
    <input class="form-control" type="text" value="<?php echo $row["concentracion"];  ?>" name="concentracion">
    <br><br>   

    <label lass="form-label"> Tipo Id </label><br>
    <input class="form-control" type="text" value="<?php echo $row["TipoID"];  ?>" name="tipoProducto">
    <br><br>

    <label lass="form-label"> LaboratorioID </label><br>
    <input class="form-control" type="text" value="<?php echo $row["LaboratorioID"];  ?>" name="laboratorio">
    <br><br>

    <label lass="form-label"> PresentacionID </label><br>
    <input class="form-control" type="text" value="<?php echo $row["PresentacionID"];  ?>" name="presentacion">
    <br><br>
       <input type="submit" class="btn btn-primary"  value="Actualizar" name="actualizar">
       <a class="btn btn-secondary"  href="inventario.php"> inventario</a>
    
    </form>






   
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 

    

</body>
</html>