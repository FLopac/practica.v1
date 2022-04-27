<?php include 'template/header.php'?>

<?php
  include_once "model/conexion.php";
  $sentencia = $bd -> query("select * from empleados");
  $empleado = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($empleado);
  session_start();
    $usuario = $_SESSION['username'];
    if(!isset($usuario)){
        header("location: ../login.php");
    }else{
?>  
  
<div class="container mt-5">
  <div class="container justify-content-center">
    <h2 class="text-center">Bienvenido <b><?php echo ($usuario)    ?></b></h2>
<?php
    }
?>
  </div>
  <div class="row justify-content-center">
  
    <!-- Barra de navegacion-->
    
    <div class="col-md-12">
      <div>
        <ul class="nav nav-tabs mt-3 mb-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../modulo/registProceso.php">Agregar Empleado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../model/salir.php">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
      
    <!-- INICIO ALERTAS -->
    
    <?php 
      if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
    ?>
    <div class="alert alert-danger" role="alert">
      <strong>No es posible realizar esa accion!</strong> Hay campos sin rellenar..
    </div>
    <?php
      }
    ?>
    
    <?php 
      if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
    ?>
    <div class="alert alert-success" role="alert">
      <strong>Registrado!</strong> El empleado se ha registrado correctamente..
    </div>
    <?php
      }
    ?>
    
    <?php 
      if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
    ?>
    <div class="alert alert-danger" role="alert">
      <strong>Error!</strong> El proceso no se ha realizado correctamente, vuelva a intentar..
    </div>
    <?php
      }
    ?>
    
    <?php 
      if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
    ?>
    <div class="alert alert-success" role="alert">
      <strong>Editado!</strong> El empleado se ha editado satisfactoriamente
    </div>
    <?php
      }
    ?>
    
    <?php 
      if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
    ?>
    <div class="alert alert-success" role="alert">
      <strong>Eliminado!</strong> El empleado se ha eliminado satisfactoriamente
    </div>
    <?php
      }
    ?>

    <!-- FIN ALERTA -->
    
      <!-- Mostrar los resultados de la tabla-->
      
      <div class="card">
        <div class="card-header ">
          Lista de empleados
        </div>
        <div class="p-3">
          <table class="table table-dark table-sm align-middle">
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Rut</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Cargo</th>
                <th scope="col">Sueldo</th>
                <th scope="col" colspan="2">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($empleado as $dato){
              ?>
              <tr>
                <td scope="row"><?php echo $dato->ID;?></td>
                <td><?php echo $dato->rut;?></td>
                <td><?php echo $dato->nombres;?></td>
                <td><?php echo $dato->apellidos;?></td>
                <td><?php echo $dato->telefono;?></td>
                <td><?php echo $dato->direccion;?></td>
                <td><?php echo $dato->cargo;?></td>
                <td><?php echo $dato->sueldo;?></td>
                <td><a href="editar.php?ID=<?php echo $dato->ID;?>" style="text-decoration: none;color:white;"><i class="bi bi-pencil-square"></i></a></td>
                <td><a onclick="return confirm('Esta seguro que desea eliminar al empleado?')" href="eliminar.php?ID=<?php echo $dato->ID;?>" style="text-decoration: none;color:white;"><i class="bi bi-trash3"></i></a></td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
     </div>
      </div>
    </div>
  </div>
</div>

<?php include 'template/footer.php'?>

   