<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <link rel="icon" href="./images/icono2.ico">
    <title>RemuneWeb</title>
  </head>
  <body class="bg-dark">
    <section>
        <div class="row g-0">
            <div class="col-lg-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item imagen min-vh-100 active">
                    </div>
                    <div class="carousel-item imagen2 min-vh-100 ">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
            <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <img src="./images/php-1.svg" class="img-fluid rounded mx-auto d-block" width="200" height="200"">
                </div>
                
                <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                    <h1 class="fw-bold mb-4">Bienvenido de vuelta</h1>
                    <form method="POST" action="./model/logueo.php">
                      <div class="mb-4">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control bg-dark-x border-0 " placeholder="Ingresa tu email"  name="usuario" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-4">
                        <label class="form-label fw-bold">Contraseña</label>
                        <input type="password" class="form-control bg-dark-x border-0" placeholder="Ingresa tu contraseña" name="clave">
                      </div>
                      <button type="submit" class="btn btn-primary mt-2 w-100">Iniciar Sesion</button>
                    </form>
                    <!-- ALERTAS  -->
                    <div>
                      <?php 
                          if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
                      ?>
                      <div class="alert alert-danger mt-5 text-center" role="alert">
                        Las credenciales son incorrectas! Intente nuevamente..
                      </div>
                      <?php
                          }
                      ?>
                  </div>
                </div>
                <div class="text-center px-lg5 pt-lg-3 pb-lg-4 p-4 w-100 mb-auto"></div>
                <div class="text-center px-lg5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto"></div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>