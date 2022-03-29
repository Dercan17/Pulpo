<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

$id = $_GET['id'];
$consul = $client->consultarCliente($id);

$resultado = $conect->Mostrar($consul);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualzar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Clientes</title>
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
            <a class="nav-link text-light" href="../facturacion.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="../proyecto/inventario/inventario.php">Clientes</a>
            <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            

            <li><a class="dropdown-item text-light" href="">Barrios</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="inventario/producto/inventario.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inventario
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            

            <li><a class="dropdown-item text-light" href="../inventario/lote/verLotes.php">Lote</a></li>
            <li><a class="dropdown-item text-light" href="../inventario/proveedor/verProveedor.php">Proveedor</a></li>
            <li><a class="dropdown-item text-light" href="../inventario/producto/inventario.php">Productos</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="../php/cerrarsesion.php">Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <script scr="./js/boostrap.bundlee.min.js"></script>


<form action="procesoActualizar.php" method="POST">
<table class="table table-hover">
   
<table class="table table-hover table-dark">
   
   
<tr>
    
    <td>Cedula</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Direccion</td>
    <td>Telefono</td>
    <td>Barrio</td>
    <td>Operacion</td>
    </tr>
 

    <?php 
    
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td> <input type="text" value="<?php echo $row["Cedula_Cliente"];  ?>" name="cedula"> </td>
    <td> <input type="text" value="<?php echo $row["Nombre"];  ?>" name="nombre"> </td>
    <td> <input type="text" value="<?php echo $row["Apellidos"]; ?>" name="apellido"> </td>                               
    <td> <input type="text" value="<?php echo $row["Direccion"]; ?>" name="direc"></td>
    <td> <input type="text" value="<?php echo $row["Telefono"];  ?>" name="tel"></td>
    <td><?php        
$sql = "SELECT * FROM barrio";            

$query = $conect->login($sql);
                        

$result = mysqli_num_rows($query);

?>
    <Select name="barrio" id="barrio">
      <?php
            if($result > 0){

while ($cliente = mysqli_fetch_array($query)){
    

?>
<option value="<?php echo $cliente["ID_Barrio"];?>"><?php echo $cliente["Nombre_barrio"];?></option>

<?php
}

            }
            ?></td>
  

    <td> <input type="submit" value="Actualizar" name="actualizar"></td>
    
    
    </tr>
    </form>






   
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 

    <a href="ingresarCliente.php"> Ver clientes</a>

</body>
</html>