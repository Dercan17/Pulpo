<?php 
include "../../php/lote.php";

include "../../php/conexion.php";

$lot = new lote();
$con = new Conexion();

/**Recibir datos y almacenar en variables */
$idLote = $_POST['ID_Lote'];
$fechaVencimiento = $_POST['Fecha_vencimiento'];
$proveedor = $_POST['provedorID'];
$stock = $_POST['Stock'];
$IdProducto=$_POST["codigoP"];




/// actualizar datos


$actualizar = $lot -> modificarLote($idLote,$fechaVencimiento,$proveedor,$stock,$IdProducto);


//**Ejecutar consulta */

echo $actualizar;
$query = $con->Mostrar($actualizar);

echo $query;

if(!$query){
  echo 'error en la consulta';
}
else{
  echo "
  <script>
  alert('se ha sido actualizado exitosamente');
  window.location='verLotes.php';
  </script>
  ";
    
}

?>