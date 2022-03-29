<?php 
include "../../php/lote.php";

include "../../php/conexion.php";

//se instancia la clase lote
$lot = new lote();

//se instancia la clase conexion
$con = new Conexion();

//se obtiene el id del dato a actualizar
$id = $_GET['id'];
//se llama la consulta y se almacena
$consul = $lot->consultarLote($id);

// se ejecuta la consulta y se almacena
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
    <title>SubHeader</title>

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
            

            <li><a class="dropdown-item text-light" href="../lote/verLotes.php">Lote</a></li>
            <li><a class="dropdown-item text-light" href="../provedor/verProvedor.php">Provedor</a></li>
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



<form action="procesoActualizar.php" method="POST">
  <table class="table table-hover">

  
   
   
 
  
    
    
    
    <?php 
    //se muestra el resultado
        While ($row=Mysqli_fetch_assoc($resultado)){
          ?>
  <div class="container">
  
      <label class="form-label"> Id lote </label>
      <br>
      <input class="form-control" type="text" value="<?php echo $row["ID_Lote"];  ?>" name="ID_Lote">
      <br><br>
      
      <label class="form-label"> Fecha vencimiento </label>
      <br>
      <input class="form-control" type="date" value="<?php echo $row["Fecha_vencimiento"];  ?>" name="Fecha_vencimiento"> 
      <br><br>

      <label class="form-label" > ID proveedor </label>
      <br>
      <input class="form-control" type="text" value="<?php echo $row["provedorID"];  ?>" name="provedorID"> 
      <br><br>

      <label class="form-label"> Stock </label>
      <br>
      <input class="form-control" type="text" value="<?php echo $row["Stock"];  ?>" name="Stock">
      <br><br>  

      <label class="form-label"> Codigo Producto </label> 
      <br>
      <input class="form-control" type="text" value="<?php echo $row["IdProducto"];  ?>" name="codigoP">
      <br><br> 


   <input type="submit" value="Actualizar" name="actualizar" class="btn btn-primary mb-1">
   <a href="verLotes.php" class="btn btn-secondary"> Ver lotes</a>
   </div>   
    
</form>
   
    <?php 
    } mysqli_free_result($resultado);
    ?>
    
    </table> 


</body>
</html>