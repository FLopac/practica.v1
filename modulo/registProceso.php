<?php include 'template/header.php'?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Datos del nuevo usuario:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Rut: </label>
                        <input type="text" class="form-control" name="txtRut">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombres: </label>
                        <input type="text" class="form-control" name="txtNombres">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="txtApellidos">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="number" class="form-control" name="txtTelefono">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="txtDireccion">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cargo: </label>
                        <input type="text" class="form-control" name="txtCargo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sueldo: </label>
                        <input type="text" class="form-control" name="txtSueldo">
                    </div>
                    <div class="d-grid mb-4">
                        <input type="submit" class="btn btn-primary mb-3">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
      
<?php include 'template/footer.php'?>