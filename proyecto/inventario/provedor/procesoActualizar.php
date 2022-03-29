<?php 
include("../../php/provedor.php");

include "../../php/conexion.php";

$prov = new provedor();
$con = new Conexion();

/**Recibir datos y almacenar en variables */
$NiT_provedor=$_POST["Nit_prove"];
$Nombre=$_POST["nombre"];
$Telefono=$_POST["tel"];
$Correo=$_POST["correo"]  ;
$Dirrecion=$_POST["direc"];




/// actualizar datos


$actualizar = $prov -> modificarProvedor($NiT_provedor,$Nombre,$Telefono,$Correo,$Dirrecion);


//**Ejecutar consulta */

echo $actualizar;
$query = $con->Mostrar($actualizar);



if(!$query){
  echo "
  <script>
  alert('error en la actualizacion');
  window.location='ingresarProve.php';
  </script>
  ";
}
else{
  echo "
  <script>
  alert('se ha sido actualizado exitosamente');
  window.location='ingresarProve.php';
  </script>
  ";
    
}

?>