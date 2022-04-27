<?php
    if(!isset($_GET['ID'])){
        header('Location: index.php?mensaje=error');
        exit();
    }
    include_once 'model/conexion.php';
    $ID = $_GET['ID'];
    
    $sentencia = $bd->prepare("DELETE from empleados where ID = ?;");
    $resultado = $sentencia->execute([$ID]);
    
    if($resultado === TRUE){
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    

?>