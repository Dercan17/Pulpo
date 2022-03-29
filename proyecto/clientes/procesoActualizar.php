<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

/**Recibir datos y almacenar en variables */
$Cedula_Cliente=$_POST["cedula"];
        $Nombre=$_POST["nombre"];
        $Apellidos=$_POST["apellido"];
        $Dirrecion=$_POST["direc"];
        $Telefono=$_POST["tel"];
        $BarrioID=$_POST["barrio"]  ;



/// actualizar datos


$actualizar = $client -> modificarCliente($Cedula_Cliente,$Nombre,$Apellidos,$Telefono,$Dirrecion,$BarrioID);


//**Ejecutar consulta */


$query = $conect->Mostrar($actualizar);



if(!$query){
  echo "
  <script>
  alert('Error');
  window.location='ingresarCliente.php';
  </script>
  ";
}
else{
  echo "
  <script>
  alert('se ha sido actualizado exitosamente');
  window.location='ingresarCliente.php';
  </script>
  ";
    
}

?>