<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();
//**Recibir datos */

$id = $_GET['id'];

$eliminar = $producto->EliminarProducto($id);

$resultado = $con->delete($eliminar);

$confirm = " 
<script>
confirm('Recuerde que para eliminar un producto debe primero eliminar su lote. Al eliminar se borrara toda la existencia del producto seleccionado.   Esta seguro que desea eliminar este producto?');
window.location='inventario.php';
</script>
";


echo $confirm;


if(!empty($resultado)){
    echo "
    <script>
    confirm('Exito en la eliminacion');
    </script>
    ";
  }
  else{
    echo "
    <script>
    alert('Error en la eliminacion');
    window.location='inventario.php';
    </script>
    ";
  }
