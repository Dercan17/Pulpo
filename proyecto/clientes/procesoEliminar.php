<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();
//**Recibir datos */
$id = intval($_GET['id']);
$eliminar = $client->eliminarCliente($id);

$resultado = $conect->delete($eliminar);

//**Realizar consulta */

echo $resultado;
//**Ejecutar consulta */
if(!empty($resultado)){
    echo "
    <script>
    alert('se ha eliminado exitosamente');
    window.location='ingresarlote.php';
    </script>
    ";
  
  }
  else{
    echo 'error en la eliminacion';
  }