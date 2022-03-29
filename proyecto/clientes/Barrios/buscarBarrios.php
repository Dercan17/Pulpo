<?php 
include("../../php/conexion.php");
include("../../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

$consul = $client->readCliente();

$resultado = $conect->Mostrar($consul);

$busqueda = $_GET['buscar'];
$consulta = $client ->busquedaBarrio($busqueda);

$resultado = $conect ->buscar($consulta)

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
          <a class="nav-link dropdown-toggle text-light" href="../verClientes.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            

            <li><a class="dropdown-item text-light" href="../../clientes/Barrios/barrios.php">Barrios</a></li>
    
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="inventario/producto/inventario.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inventario
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            

            <li><a class="dropdown-item text-light" href="../../inventario/lote/verLotes.php">Lote</a></li>
            <li><a class="dropdown-item text-light" href="../../inventario/proveedor/verProveedor.php">Proveedor</a></li>
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
</div>
<form action="buscarBarrios.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<body>




<table class="table ">
   
   
        <tr>
    
        <td>ID</td>
    <td>Nombre</td>
    <td>Comuna</td>
    <td>Ciudad</td>
    
   
    </tr>
 
    
    <?php 
   
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td> <?php echo $row["ID_Barrio"];  ?></td>
    <td> <?php echo $row["Nombre_barrio"];  ?></td>
    <td> <?php echo $row["Comuna"];  ?></td>
    <td><?php        
$sql = "SELECT `Nombre_ciudad` FROM `ciudad` WHERE `ID_ciudad`=$row[idCiudad];";            

$query = $conect->login($sql);
                        

$result = mysqli_num_rows($query);

?>
    
      <?php
            if($result > 0){

while ($presentacion = mysqli_fetch_array($query)){
    

?>

 <?php echo $presentacion["Nombre_ciudad"];?>



<?php
            }}
            ?></td>
   

   
   </tr> 
    <?php 
  
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
    </center>
</body>
</html>