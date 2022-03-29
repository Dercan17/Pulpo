<?php


$alert = '';
session_start();
if(!empty($_SESSION['active'])){

  header('location:facturacion.php');

}else{


if(!empty($_POST))
{

if(empty($_POST['usuario']) or empty($_POST['clave']) )
{
$alert = "Ingrese su usuario y clave";


}else{
  require_once "php/conexion.php";
  $conect = new Conexion();

  

  $user =  $_POST['usuario'];
  $pass =  $_POST['clave'];

   $sql = "SELECT * FROM usuario WHERE usuario = '$user' AND 	clave = '$pass'";
   
  $query = $conect->login($sql);

  $result = mysqli_num_rows($query);

  if($result > 0){

    $data = mysqli_fetch_array($query);

   
    $_SESSION['active'] = true;
    $_SESSION['iduser'] = $data['Cedula_Usuario'];
    $_SESSION['nombre'] = $data['Nombre'];
    $_SESSION['apellido'] = $data['Apellido'];
    $_SESSION['usuario'] = $data['usuario'];
    $_SESSION['rol'] = $data['ROLID'];

    header('location:facturacion.php');

  }else{
    $alert = "El usuario o la clave son incorrectas";
   session_destroy();

  }
}

  
}
}


?>
