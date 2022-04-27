<?php include 'template/header.php'?>

<?php
    if(!isset($_GET['ID'])){
        header('Location: index.php?mensaje=error');
        exit();
    }
    
    include_once 'model/conexion.php';
    $codigo = $_GET['ID'];
    
    $sentencia = $bd->prepare("select * from empleados where ID = ?;");
    $sentencia->execute([$codigo]);
    $empleado = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($empleado)
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar Datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Rut: </label>
                        <input type="text" class="form-control" name="txtRut" autofocus value="<?php echo $empleado->rut?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombres: </label>
                        <input type="text" class="form-control" name="txtNombres" autofocus value="<?php echo $empleado->nombres?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="txtApellidos" autofocus value="<?php echo $empleado->apellidos?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="number" class="form-control" name="txtTelefono" autofocus value="<?php echo $empleado->telefono?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus value="<?php echo $empleado->direccion?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cargo: </label>
                        <input type="text" class="form-control" name="txtCargo" autofocus value="<?php echo $empleado->cargo?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sueldo: </label>
                        <input type="text" class="form-control" name="txtSueldo" autofocus value="<?php echo $empleado->sueldo?>">
                    </div>
                    <div class="d-grid mb-4">
                        <input type="hidden" name="codigo" value="<?php echo $empleado->ID?>">
                        <input type="submit" class="btn btn-primary mb-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      
<?php include 'template/footer.php'?>