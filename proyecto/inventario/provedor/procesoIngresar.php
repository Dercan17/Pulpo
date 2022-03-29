<?php
include("../../php/conexion.php");
include("../../php/provedor.php");

$conect = new Conexion();
$prov = new provedor();


/**Recibir datos tabla lote y almacenar en variables */

$Nombre=$_POST["nombre"];
$Telefono=$_POST["tel"];
$Correo=$_POST["correo"]  ;
$Dirrecion=$_POST["direc"];


//**Consulta para insertar tabla lote */
$insert = $prov ->crearProvedor($Nombre,$Telefono,$Correo,$Dirrecion);

//**ejecutar consulta */
$query = $conect->Ingresar($insert);
  



if(!empty($query)){
   
   echo "
   <script>
   alert('Provedor ingresado exitosamente');
   window.location='ingresarProve.php';
   </script>
   ";
   
   }else{
      echo "
    <script>
    alert('error en el ingreso');
    window.location='ingresarProve.php';
    </script>
    ";
      
   }
?>