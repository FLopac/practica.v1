<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }
    
    include 'model/conexion.php';
    $ID = $_POST['codigo'];
    $rut = $_POST['txtRut'];
    $nombres = $_POST['txtNombres'];
    $apellidos = $_POST['txtApellidos'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDireccion'];
    $cargo = $_POST['txtCargo'];
    $sueldo = $_POST['txtSueldo'];

    
    $sentencia = $bd->prepare("UPDATE empleados SET rut = ?, nombres = ?, apellidos = ?, telefono = ?, direccion = ?, cargo = ?, sueldo = ? where ID = ?;");
    $resultado = $sentencia->execute([$rut, $nombres, $apellidos, $telefono, $direccion, $cargo, $sueldo, $ID]);
    
    if($resultado === TRUE){
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
    
    
    
    
    
?>