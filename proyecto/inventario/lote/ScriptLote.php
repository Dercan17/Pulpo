<?php
include("../../php/conexion.php");
include("../../php/lote.php");

$conect = new Conexion();
$lot = new lote();


/**Recibir datos tabla lote y almacenar en variables */
$fechaVencimiento = $_POST['Fecha_vencimiento'];
$proveedor = $_POST['provedorID'];
$stock = $_POST['Stock'];
$product = $_POST['productoid'];


//**Consulta para insertar tabla lote */
$insert = $lot ->CrearLote($fechaVencimiento,$proveedor,$stock,$product);

//**ejecutar consulta */
$query = $conect->Ingresar($insert);
  
echo $insert;

if(!empty($query)){
   
   echo "
   <script>
   alert('se ha insertado exitosamente');
   window.location='verLotes.php';
   </script>
   ";
      
   
   }else{
      echo "
      error
      ";
      
   }