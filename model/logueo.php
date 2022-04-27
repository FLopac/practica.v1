<?php

require 'conexion.php';
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$query = "SELECT COUNT(*) as contar FROM login WHERE correo = '$usuario' AND contra = '$clave'";

$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username']=$usuario;
    header("location: ../modulo/index.php");
}else{
    header("location:../login.php?mensaje=error");
    
}
?>
