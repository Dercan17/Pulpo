<?php
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

/**Recibir datos tabla lote y almacenar en variables */
$Cedula_Cliente=$_POST["cedula"];
$Nombre=$_POST["nombre"];
$Apellidos=$_POST["apellido"];
$Dirrecion=$_POST["direc"];
$Telefono=$_POST["tel"];
$BarrioID=$_POST["barrio"]  ;


//**Consulta para insertar tabla lote */
$insert = $client ->crearCliente($Cedula_Cliente,$Nombre,$Apellidos,$Dirrecion,$Telefono,$BarrioID);

//**ejecutar consulta */
$query = $conect->Ingresar($insert);
  

echo $insert;

if(!empty($query)){
   
   echo "
   <script>
   alert('se ha sido actualizado exitosamente');
   window.location='ingresarProvee.php';
   </script>
   ";
   
   }else{
      echo "
      <script>
      alert('error en el ingreso');
      window.location='ingresarProvee.php';
      </script>
      ";
      
   }
?>