<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
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
        <form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>



<center>
<form action="procesoIngresar.php" method="post">
<br><br><br><h2>Clientes</h2>   


        <label for="">Cedula</label><br>   
        <input type="text" name="cedula" placeholder=""><br><br> 


        <label for="">Nombre</label><br>   
        <input type="text" name="nombre" placeholder=""><br><br>

        <label for=""> Apellidos</label><br>
        <input type="text" name="apellido"><br><br>


        <label for=""> Telefono</label><br>
        <input type="text" name="tel"><br><br>

        <label for="">Direccion</label><br>
        <input type="text" name="direc"><br><br>

        <label for="">Barrio</label><br>
        <?php        
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
            ?>
            
    <input type="submit" value="Enviar">
</form>
<br><br><br><br>
<div>

        </div>

</body>
</html>