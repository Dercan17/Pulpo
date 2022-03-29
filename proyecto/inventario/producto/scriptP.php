<?php 

include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();

/**Recibir datos y almacenar en variables */
$nombreProducto = $_POST['Nombre_Producto'];
$precioEntrada = $_POST['Precio_Entrada'];
$precioCajas = $_POST['Precio_Cajas'];
$precioBlister = $_POST['Precio_Blister'];
$precioUnidad = $_POST['Precio_Unidad'];
$concentracion = $_POST['concentracion'];
$tipoProducto = $_POST['tipoProducto'];
$laboratorio= $_POST['laboratorio'];
$presentacion = $_POST['presentacion'];




$insert = $producto->CrearProducto($nombreProducto,$precioEntrada,$precioCajas,$precioBlister,$precioUnidad,
$concentracion,$tipoProducto,$laboratorio,$presentacion);


 $query = $con->Ingresar($insert);

 
  

 if(!$query){
   echo 'error en la consulta';
 }
 else{
     echo "
     <script>
     alert('se ha sido actualizado exitosamente');
     window.location='inventario.php';
     </script>
     ";
 }


//**Cerrar conexion */



?>