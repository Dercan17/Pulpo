<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

$consul = $client->readCliente();

$resultado = $conect->Mostrar($consul);

$busqueda = $_GET['buscar'];
$consulta = $client ->busqueda($busqueda);

$resultado = $conect ->buscar($consulta)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/estilos.css">
    
    <link rel="stylesheet" href="../../css/fontello.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="verClientes.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            

            <li><a class="dropdown-item text-light" href="Barrios/barrios.php">Barrios</a></li>
    
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


<br><br>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table  table-dark">
   
   
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
   
   <td> <?php echo $row["Cedula_Cliente"];  ?></td>
   <td> <?php echo $row["Nombre"];  ?></td>
   <td> <?php echo $row["Apellidos"];  ?></td>
   <td> <?php echo $row["Direccion"];  ?></td>
   <td> <?php echo $row["Telefono"];  ?></td>
   <td><?php        
$sql = "SELECT `Nombre_barrio` FROM `barrio` WHERE `ID_Barrio`=$row[BarrioID];";            

$query = $conect->login($sql);
                       

$result = mysqli_num_rows($query);

?>
   
     <?php
           if($result > 0){

while ($presentacion = mysqli_fetch_array($query)){
   

?>

<?php echo $presentacion["Nombre_barrio"];?>



<?php
           }}
           ?></td>
   <td> <a href="actualizarCliente.php? id=<?php echo $row["Cedula_Cliente"];  ?>"> Editar</a>|
   <a href="procesoEliminar.php?id=<?php echo $row["Cedula_Cliente"];  ?>" class="eliminar"> Eliminar</a>|</td>

   
   </tr> 
    <?php 
  
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
    </center>
</body>
</html>