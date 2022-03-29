<?php   

include("../../php/conexion.php");
$conect = new Conexion();
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


<center>   
<form action="scriptP.php" class="row g--1" method="POST">
<br>
    <h2>Producto</h2>


    <label class="form-label"for="">Nombre del Producto</label><br>   
    <input class="form-control" type="text" name="Nombre_Producto" placeholder=""><br><br>

    <label class="form-label" for="">Precio de Entrada</label><br>   
    <input class="form-control" type="text" name="Precio_Entrada" placeholder=""><br><br>

    <label class="form-label" for="">Precio de las cajas</label><br>   
    <input class="form-control" type="text" name="Precio_Cajas" placeholder=""><br><br>
    
    <label class="form-label" for="">Precio del blister </label><br>   
    <input class="form-control" type="text" name="Precio_Blister" placeholder=""><br><br>
    
    <label class="form-label" for="">Precio unidad</label><br>   
    <input class="form-control" type="text" name="Precio_Unidad" placeholder=""><br><br>

    <label class="form-label" for="">Concentracion</label><br>   
    <input class="form-control" type="text" name="concentracion" placeholder=""><br><br>

    <label class="form-label" for="">Tipo De Producto</label><br>
    <?php 
      //se crea la consulta para la tabla tipo
      $sqlTipo = "SELECT * FROM tipo";
      //se ejecuta la consulta            
      $queryTipo = $conect->login($sqlTipo);

      //se guarda el resultado
      $result_tipo = mysqli_num_rows($queryTipo);

    ?>
      <Select class="form-select" name="tipoProducto" id="tipoProducto">
    <?php
      if($result_tipo > 0){
         //se ejecuta el resultado 
        while ($tipo = mysqli_fetch_array($queryTipo)){
    

    ?>
      <option value="<?php echo $tipo["ID_Tipo"];?>"><?php echo $tipo["Nombre_Tipo"];?></option>

    <?php
      }
        }
    ?>
    </Select><br><br>
     
    <label class="form-label" for="">Laboratorio</label><br>
      <?php   
      //se crea la consulta para la tabla laboratorio 
        $sqlLab = "SELECT * FROM laboratorio";            
        //se ejecuta consulta 
        $queryLab = $conect->login($sqlLab);
                         
        //se guarda resultado de consulta
        $result_laboratorio = mysqli_num_rows($queryLab);

      ?>
    <Select class="form-select" name="laboratorio" id="laboratorio">
      <?php
            if($result_laboratorio > 0){
              //se muestra consulta
              while ($laboratorio = mysqli_fetch_array($queryLab)){
      ?>
      <option value="<?php echo $laboratorio["ID_Laboratorio"];?>"><?php echo $laboratorio["Nombre_Laboratorio"];?></option>

      <?php
          }
        }
      ?>
    </Select><br><br>

    <label class="form-label" for="">Presentacion</label><br>
      <?php   
      //se crea la consulta para la tabla presentacion 

        $sqlPresent = "SELECT * FROM presentacion";
        //se ejecuta consulta 

        $queryPresent = $conect->login($sqlPresent);
        //se almacena el resultado 

        $result_presentacion = mysqli_num_rows($queryPresent);

      ?>
    <Select class="form-select" name="presentacion" id="presentacion">
        <?php
            if($result_presentacion > 0){
        //se ejecuta consulta 

              while ($presentacion = mysqli_fetch_array($queryPresent)){
        ?>
    <option value="<?php echo $presentacion["ID_Presentacion"];?>"><?php echo $presentacion["Nombre_Presentacion"];?></option>

        <?php
            }
          }
        ?>
    </Select><br><br>

  
    <input class="btn btn-primary"type="submit" value="Registrar Producto">


    
</form>

</center>


</body>
</html>

