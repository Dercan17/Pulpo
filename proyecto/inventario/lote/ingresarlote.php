<?php 
include("../../php/conexion.php");
include("../../php/lote.php");

$conect = new Conexion();
$lot = new lote();

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
            

            <li><a class="dropdown-item text-light" href="verLotes.php">Lote</a></li>
            <li><a class="dropdown-item text-light" href="../provedor/verProvedor.php">Provedor</a></li>
            <li><a class="dropdown-item text-light" href="../producto/inventario.php">Productos</a></li>
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

<body>

<center>
    <form action="ScriptLote.php" class="row g--1" method="POST">
        <br><br><br><h1 class="text-muted">Lote</h1>
        
        
        <label for="" class="form-label">Fecha vencimiento</label><br>   
        <input type="date" class="form-control" name="Fecha_vencimiento" placeholder=""><br><br>

    
        <label for="" class="form-label"> Proveedor</label><br>
          <?php        
            //se crea la consulta para la tabla proveedor
            $sqlProv = "SELECT * FROM provedor"; 

            //se ejecuta la consulta y se almacena el resultado
            $queryProv = $conect->login($sqlProv);


            //se ejcuta el resultado de la consulta
            $result_prove = mysqli_num_rows($queryProv);

          ?>
            <Select name="provedorID" class="form-select" id="provedorID">
          <?php
          //se el resultado de la consulta es mayor a 0
          //es porque la consulta fue ejecutada correctamente
            if($result_prove > 0){
              //ejecutamos la consulta por medio del ciclo 
              while ($prove = mysqli_fetch_array($queryProv)){
          ?>
        
              <option value="<?php echo $prove["NiT_provedor"];?>"><?php echo $prove["Nombre"];?></option>
          <?php
                  }

            }
            ?>
            </Select><br><br>
    
        <label for="" class="form-label">Stock</label><br>   
        <input type="number" class="form-control" name="Stock" placeholder=""><br><br>
       

        <label for="" class="form-label">Codigo producto</label><br>
          <?php   
          //creamos la consulta de la tabla producto                            
            $sqlProd = "SELECT * FROM producto"; 
            
            //ejecutamos la consulta y guardamos el resultado
            $queryProd = $conect->login($sqlProd);

            //se ejecuta el resultado de la consulta
            $result_produc = mysqli_num_rows($queryProd);

          ?>
            <select name="productoid" class="form-select" id="productoid">
          <?php
           //se el resultado de la consulta es mayor a 0
          //es porque la consulta fue ejecutada correctamente
               if($result_produc > 0){
                  //ejecutamos la consulta por medio del ciclo 
                  while ($produc = mysqli_fetch_array($queryProd)){
    

          ?>
            <option value="<?php echo $produc["Codigo_Producto"];?>"><?php echo $produc["Nombre_Producto"];?></option>

          <?php
            }
                }
    
           ?>
    
    <input type="submit" class="btn btn-primary">

</form>




   
</body>
</html>
