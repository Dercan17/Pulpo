<?php 
include "../../php/productos.php";

include "../../php/conexion.php";
//instanciamos las clasese que se necesitan
$producto = new productos();
$con = new Conexion();

//llamamos y almacenamos la consulta
$consul = $producto->readProducto();

//ejecutamos la consulta y guardamos el resultado
$resultado = $con->Mostrar($consul);

//se obtiene los datos de la busqueda
$busqueda = $_GET['buscar'];

//se guarda la consulta de la busqueda
$consulta = $producto ->busqueda($busqueda);

//se ejecuta y guarda resultado de la busqueda
$resultado = $con ->buscar($consulta)



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
    
</div>
<form action="buscar.php" class="row g-0" method="get">

<input class="form-control " type="text" name="buscar" id="buscar" placeholder="buscar" >
<input class="btn btn-secondary" type="submit" value="buscar"> 
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
    //se ejecuta el resultado de la consulta
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
      <td> <?php echo $row["TipoID"];  ?></td>
      <td> <?php echo $row["LaboratorioID"];  ?></td>
      <td> <?php echo $row["PresentacionID"];  ?></td>
      <td> <a class="btn btn-primary" href="actualizarP.php?id=<?php echo $row["Codigo_Producto"];  ?>"> Editar</a>
      <a class="btn btn-primary" href="procesoEliminar.php?id=<?php echo $row["Codigo_Producto"];  ?>" class="eliminar" onclick=
              " return borrar()"> Eliminar</a></td>
    </tr>
    <?php 
      } mysqli_free_result($resultado);
    ?>
    
</table> 



    </div>

    <script type="text/javascript">
    //funcion para confirmar si se desea eliminar algun producto  
    function borrar() {
      
      if(confirm("Realmente desea eliminar?"))
      {
          return true;
      }
      return false;
    }
</script>
</body>
</html>