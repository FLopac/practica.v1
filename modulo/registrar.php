<?php
    //print_r($_POST);
    session_start();
    $usuario = $_SESSION['username'];
    if(!isset($usuario)){
        header("location: ../login.php");
    }else{
        if( empty($_POST["txtRut"]) || empty($_POST["txtNombres"]) || empty($_POST["txtApellidos"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtCargo"]) || empty($_POST["txtSueldo"])){
            header('Location: index.php?mensaje=falta');
            exit();
        }
        
        include_once 'model/conexion.php';
        $rut = $_POST["txtRut"];
        $nombres = $_POST["txtNombres"];
        $apellidos = $_POST["txtApellidos"];
        $telefono = $_POST["txtTelefono"];
        $direccion = $_POST["txtDireccion"];
        $cargo = $_POST["txtCargo"];
        $sueldo = $_POST["txtSueldo"];
        
        $sentencia = $bd->prepare("INSERT INTO empleados(rut,nombres,apellidos,telefono,direccion,cargo,sueldo) VALUES (?,?,?,?,?,?,?);");
        $resultado = $sentencia->execute([$rut,$nombres,$apellidos,$telefono,$direccion,$cargo,$sueldo]);
        
        if ($resultado === TRUE) {
            header('Location: index.php?mensaje=registrado');
        } else {
            header('Location: index.php?mensaje=error');
        }
    }
    
    
?>