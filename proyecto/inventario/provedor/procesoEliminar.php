<?php 
include("../../php/provedor.php");

include "../../php/conexion.php";

$prov = new provedor();
$con = new Conexion();
//**Recibir datos */
$id = intval($_GET['id']);
$eliminar = $prov->eliminarProvedor($id);

$resultado = $con->delete($eliminar);

//**Realizar consulta */

echo $resultado;
//**Ejecutar consulta */
if(!empty($resultado)){
    echo "
    <script>
    alert('se ha eliminado exitosamente');
    window.location='ingresarProve.php';
    </script>
    ";
  
  }
  else{
    echo "
    <script>
    alert('Error en la eliminacion');
    window.location='ingresarProve.php';
    </script>
    ";
  }