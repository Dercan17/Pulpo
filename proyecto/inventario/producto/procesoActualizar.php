<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();

/**Recibir datos y almacenar en variables */
$codigoProducto = $_POST['Codigo_Producto'];
$nombreProducto = $_POST['Nombre_Producto'];
$precioEntrada = $_POST['Precio_Entrada'];
$precioCajas = $_POST['Precio_Caja'];
$precioBlister = $_POST['Precio_Blister'];
$precioUnidad = $_POST['Precio_Unidad'];
$concentracion = $_POST['concentracion'];
$tipoProducto = $_POST['tipoProducto'];
$laboratorio= $_POST['laboratorio'];
$presentacion = $_POST['presentacion'];




/// actualizar datos


$actualizar = $producto->ModificarProducto($codigoProducto,$nombreProducto,$precioEntrada,$precioCajas,$precioBlister,$precioUnidad,
$concentracion,$tipoProducto,$laboratorio,$presentacion);

echo $actualizar;

//**Ejecutar consulta */

$query = $con->Mostrar($actualizar);



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

?>