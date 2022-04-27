<?php
    session_start();
    $usuario = $_SESSION['username'];
    if(!isset($usuario)){
        header("location: login.php");
    }else{
        echo "<h1>Bienvenido <b>$usuario</b></h1>";
        echo "<a href='model/salir.php'>Cerrar Sesion</a>";
    }
?>