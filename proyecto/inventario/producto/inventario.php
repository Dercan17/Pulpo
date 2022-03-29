<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();


$consul = $producto->readProducto();

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
    <title>Producto</title>

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
            <li><a class="dropdown-item text-light" href="../provedor/verProvedor.php">Provedor</a></li>
            <li><a class="dropdown-item text-light" href="inventario.php">Productos</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="../proyecto/php/cerrarsesion.php">Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <script scr="./js/boostrap.bundlee.min.js"></script>

<form action="buscar.php" class="row g-0" method="get">
  <input class="form-control " type="text" name="buscar" id="buscar" placeholder="buscar" >
  <input class="btn btn-secondary" type="submit" value="buscar"> 
</form>

<form action="ingresarproductos.php" class="row g-0">

<input class="btn btn-primary" type="submit" value="Ingresar Producto">
</form>


<table class="table table-hover">
   
   
    <tr>
        <td>Codigo del producto</td>
        <td>Nombre del producto</td>
        <td>Precio de entrada</td>
        <td>Precio de Cajas</td>
        <td>Precio de Blisters</td>
        <td>Precio de Unidades</td>
        <td>Concentracion</td>
        <td>Tipo Id</td>
        <td>LaboratorioID</td>
        <td>PresentacionID</td>
        <td>Operacion</td>
    </tr>
 
    
    <?php 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
      <td> <?php echo $row["Codigo_Producto"];  ?> </td>
      <td> <?php echo $row["Nombre_Producto"];  ?></td>
      <td> <?php echo $row["Precio_Entrada"];  ?></td>
      <td> <?php echo $row["Precio_Caja"];  ?></td>
      <td> <?php echo $row["Precio_Blister"];  ?></td>
      <td> <?php echo $row["Precio_unidad"];  ?></td>
      <td> <?php echo $row["concentracion"];  ?></td>
    <td><?php        
          $sqlTipo = "SELECT `Nombre_Tipo` FROM `tipo` WHERE `ID_Tipo`=$row[TipoID];";            

          $queryTipo = $con->login($sqlTipo);
                        

          $result_Tipo = mysqli_num_rows($queryTipo);

        ?>
      <?php
            if($result_Tipo > 0){

                while ($Tipo = mysqli_fetch_array($queryTipo)){
      ?>
          <?php echo $Tipo["Nombre_Tipo"];?>
          <?php
             }}
          ?>

    </td>
    <td><?php        
          $sqlLab = "SELECT `Nombre_Laboratorio` FROM `laboratorio` WHERE `ID_Laboratorio`=$row[LaboratorioID];";            

          $queryLab = $con->login($sqlLab);
                        

          $result_Lab = mysqli_num_rows($queryLab);

        ?>    
    
        <?php
            if($result_Lab > 0){

              while ($Lab = mysqli_fetch_array($queryLab)){
    

        ?>

            <?php echo $Lab["Nombre_Laboratorio"];?>



        <?php
            }}
        ?>
    </td>
    <td> <?php        
          $sqlPresent = "SELECT `Nombre_Presentacion` FROM `presentacion` WHERE `ID_Presentacion`=$row[PresentacionID];";            

          $queryPresent = $con->login($sqlPresent);
                        

          $result_presentacion = mysqli_num_rows($queryPresent);  

        ?>
    
        <?php
            if($result_presentacion > 0){

              while ($presentacion = mysqli_fetch_array($queryPresent)){

        ?>
        <?php echo $presentacion["Nombre_Presentacion"];?>
        <?php
          }}
        ?></td>
    <td> <a class="btn btn-primary"  href="actualizarP.php? id=<?php echo $row["Codigo_Producto"];  ?>"> Editar</a>
    <a class="btn btn-primary"  onclick="return borrar()" href="procesoEliminar.php? id=<?php echo $row["Codigo_Producto"];  ?>" class="eliminar"> Eliminar</a></td>

    
    </tr>
    <?php 
      } mysqli_free_result($resultado);
    ?>
    
    </table> 

<script type="text/javascript">
      function borrar() {
      
       if(confirm("Recuerde que para eliminar un producto no deben de haber lotes asociados a el. Desea Eliminar?"))
        {
           return true;
        }
          return false;
    }
</script>

</body>
</html>