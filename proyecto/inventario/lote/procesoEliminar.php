<?php 
include "../../php/lote.php";

include "../../php/conexion.php";

$lote = new lote();
$con = new Conexion();
//**Recibir datos */
$id = $_GET['id'];
//**Realizar consulta */
$eliminar = $lote->EliminarLote($id);

//**Ejecutar consulta */

$resultado = $con->delete($eliminar);




if(!empty($resultado)){
    echo "
    <script>
    alert('se ha eliminado exitosamente');
    window.location='verLotes.php';
    </script>
    ";
  
  }
  else{
    echo 'error en la eliminacion';
  }
