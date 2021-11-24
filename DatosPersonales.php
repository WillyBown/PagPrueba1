<<<<<<< HEAD
<?php
    include("conexion.php");
    $con= conectar();

    $sql= "SELECT * FROM usuarios";
    $query= mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="Styles/styles.css">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--/barra navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
          <div class="container-fluid">
            <a class="navbar-brand text-warning" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active text-warning" aria-current="page" href="Nosotros.php">Nosotros</a>
                <a class="nav-link active text-warning" href="comentario.php">Comenta</a>
                <a class="nav-link active text-warning" data-bs-toggle="modal" data-bs-target="#login">Login</a>
              </div>
            </div>
          </div>
        </nav>
        <!--login-->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog  bg-dark text-warning">
            <div class="modal-content">
              <div class="modal-header  bg-dark">
                <h5 class="modal-title" id="titulo">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body  bg-dark">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña" />
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" />
                        <label class="form-check-label" for="rememberMe">Recuerdame</label>
                    </div>
                    <input type="submit"  value="Iniciar Sesion" class="btn btn-warning" onclick= "#">
                    <button type="button" class="btn btn-secondary" onclick="location.href='DatosPersonales.php'">Registrarse</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/login-->
        <!--/barra navegacion-->
    
        <!--Header-->
        <img src="imgs/pentakill banner.jpg" class="img-fluid" width="100%" alt="Pentakill Banner" style="border: 20px"><br><br>
        <!--/Header-->

        <!--Contenido-->
        <center style="margin:20px">
          <div class="row justify-content-center">
            <div class="col-4">
              <div class="container-sm p-3 mb-2 rounded-3 border border-warning border-5 text-warning">
                <h2 style="color:gold" align="middle">Registro</h2><br>
                <form action="insertar.php" method="POST" class="row g-3" style="color: gold">
                  <p align="center">Nombre</p>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nombres" name="Nombre" aria-label="First name">
                    </div>
                    
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos" aria-label="Last name"><br>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="Usuario" class="form-label">Usuario</label><br>
                    <input type="text" class="form-control" name="Usuario" placeholder="Usuario" id="Ususario"><br>
                  </div>

                  <div class="mb-3">
                    <label for="Contraseña" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" placeholder="Contraseña" name="Contraseña" id="Contraseña"> <br>
                  </div>

                  <div class="mb-3">
                    <p align="center">Email</p>
                    <input type="text" class="form-control" placeholder="Email" name="Email"> <br><br>
                    <label for="Direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" placeholder="Direccion" name="Direccion" id="Direccion"> <br>
                  </div>

                  <div class="mb-3">
                    <label for="FechaNacimiento" class="form-label">Fecha de nacimiento</label><br>
                    <input type="date" class="form-date" name="FechaNacimiento" id="FechaNacimiento"><br>
                  </div>

                  <div class="mb-3">
                    <label for="Edad" class="form-label">Edad</label>
                    <input type="number"  class="form-control" name="Edad" min="1" max="100" id="Edad">
                  </div>

                  <div class="justify-content-center">
                      <label for="Sexo" class="form-label">Sexo</label><br>
                      <div class="form-check form-check-inline w-25">
                          <input id="Masculino" class="form-check-input" type="radio" value="Masculino" name="Sexo">
                          <label for="Masculino" class="form-check-label">Masculino</label>
                      </div>

                      <div class="form-check form-check-inline w-25">
                          <input id="Femenino" class="form-check-input" type="radio" value="Femenino" name="Sexo">
                          <label for="Femenino" class="form-check-label">Femenino</label><br>
                      </div>

                      <div class="form-check form-check-inline w-25">
                          <input id="Otro" class="form-check-input" type="radio" value="Otro" name="Sexo">
                          <label for="Otro" class="form-check-label">Otro</label>
                      </div>
                  </div><br>

                  <label for="ColorPreferido" class="form-label">Color preferido</label>
                    <select class="form-select" name="ColorPreferido" id="ColorPreferido">
                      <option>Rojo</option>
                      <option>Verde</option>
                      <option>Azul</option>
                      <option>Amarillo</option>
                      <option>Morado</option>
                      <option>Cafe</option>
                      <option>Negro</option>
                      <option>Blanco</option>
                    </select>
                    <input type="submit" class="btn btn-warning" value="Registrar" onclick= "#">
                </form><br>

                <a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginD">Borrar una Cuenta</a>
                <div class="modal fade" id="loginD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog  bg-dark text-warning">
                    <div class="modal-content">
                      <div class="modal-header  bg-dark">
                        <h5 class="modal-title" id="titulo">Borrar Cuenta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body  bg-dark">
                        <form action="Delete.php" method="POST" class="row g-3" style="color: gold">
                            <div class="mb-3">
                                <label class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña" />
                            </div>
                            <input type="submit" value="Borrar" class="btn btn-warning">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-secondary" onclick="location.href=''" disabled>Editar datos de una cuenta</button>
              </div>
            </div>
          </div><br><br>
          <!--/Contenido-->

          <!--Footer-->
          <div class="text-center">
              <img src="imgs/logo pentakill.png" style="width 400px; height: 400px" alt="logo pentakill">
          </div>
          <div class="container-sm p-3 w-50 mb-2 rounded-3 border border-warning border-5 text-warning" >
              <div>
              <p style="font-size: 100%">
                  Pagina creada por: Willy Bown <br>
                  disculpen si me equivoque en algo que dormi 4 horas con suerte
              </p>
              </div>
          </div>
          <!--/Footer-->
    </body>
=======
<?php
    include("conexion.php");
    $con= conectar();

    $sql= "SELECT * FROM usuarios";
    $query= mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="Styles/styles.css">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--/barra navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
          <div class="container-fluid">
            <a class="navbar-brand text-warning" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active text-warning" aria-current="page" href="Nosotros.php">Nosotros</a>
                <a class="nav-link active text-warning" href="comentario.php">Comenta</a>
                <a class="nav-link active text-warning" data-bs-toggle="modal" data-bs-target="#login">Login</a>
              </div>
            </div>
          </div>
        </nav>
        <!--login-->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog  bg-dark text-warning">
            <div class="modal-content">
              <div class="modal-header  bg-dark">
                <h5 class="modal-title" id="titulo">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body  bg-dark">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña" />
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" />
                        <label class="form-check-label" for="rememberMe">Recuerdame</label>
                    </div>
                    <input type="submit"  value="Iniciar Sesion" class="btn btn-warning" onclick= "#">
                    <button type="button" class="btn btn-secondary" onclick="location.href='DatosPersonales.php'">Registrarse</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/login-->
        <!--/barra navegacion-->
    
        <!--Header-->
        <img src="imgs/pentakill banner.jpg" class="img-fluid" width="100%" alt="Pentakill Banner" style="border: 20px"><br><br>
        <!--/Header-->

        <!--Contenido-->
        <center style="margin:20px">
          <div class="row justify-content-center">
            <div class="col-4">
              <div class="container-sm p-3 mb-2 rounded-3 border border-warning border-5 text-warning">
                <h2 style="color:gold" align="middle">Registro</h2><br>
                <form action="insertar.php" method="POST" class="row g-3" style="color: gold">
                  <p align="center">Nombre</p>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nombres" name="Nombre" aria-label="First name">
                    </div>
                    
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos" aria-label="Last name"><br>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="Usuario" class="form-label">Usuario</label><br>
                    <input type="text" class="form-control" name="Usuario" placeholder="Usuario" id="Ususario"><br>
                  </div>

                  <div class="mb-3">
                    <label for="Contraseña" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" placeholder="Contraseña" name="Contraseña" id="Contraseña"> <br>
                  </div>

                  <div class="mb-3">
                    <p align="center">Email</p>
                    <input type="text" class="form-control" placeholder="Email" name="Email"> <br><br>
                    <label for="Direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" placeholder="Direccion" name="Direccion" id="Direccion"> <br>
                  </div>

                  <div class="mb-3">
                    <label for="FechaNacimiento" class="form-label">Fecha de nacimiento</label><br>
                    <input type="date" class="form-date" name="FechaNacimiento" id="FechaNacimiento"><br>
                  </div>

                  <div class="mb-3">
                    <label for="Edad" class="form-label">Edad</label>
                    <input type="number"  class="form-control" name="Edad" min="1" max="100" id="Edad">
                  </div>

                  <div class="justify-content-center">
                      <label for="Sexo" class="form-label">Sexo</label><br>
                      <div class="form-check form-check-inline w-25">
                          <input id="Masculino" class="form-check-input" type="radio" value="Masculino" name="Sexo">
                          <label for="Masculino" class="form-check-label">Masculino</label>
                      </div>

                      <div class="form-check form-check-inline w-25">
                          <input id="Femenino" class="form-check-input" type="radio" value="Femenino" name="Sexo">
                          <label for="Femenino" class="form-check-label">Femenino</label><br>
                      </div>

                      <div class="form-check form-check-inline w-25">
                          <input id="Otro" class="form-check-input" type="radio" value="Otro" name="Sexo">
                          <label for="Otro" class="form-check-label">Otro</label>
                      </div>
                  </div><br>

                  <label for="ColorPreferido" class="form-label">Color preferido</label>
                    <select class="form-select" name="ColorPreferido" id="ColorPreferido">
                      <option>Rojo</option>
                      <option>Verde</option>
                      <option>Azul</option>
                      <option>Amarillo</option>
                      <option>Morado</option>
                      <option>Cafe</option>
                      <option>Negro</option>
                      <option>Blanco</option>
                    </select>
                    <input type="submit" class="btn btn-warning" value="Registrar" onclick= "#">
                </form><br>

                <a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginD">Borrar una Cuenta</a>
                <div class="modal fade" id="loginD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog  bg-dark text-warning">
                    <div class="modal-content">
                      <div class="modal-header  bg-dark">
                        <h5 class="modal-title" id="titulo">Borrar Cuenta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body  bg-dark">
                        <form action="Delete.php" method="POST" class="row g-3" style="color: gold">
                            <div class="mb-3">
                                <label class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña" />
                            </div>
                            <input type="submit" value="Borrar" class="btn btn-warning">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-secondary" onclick="location.href=''" disabled>Editar datos de una cuenta</button>
              </div>
            </div>
          </div><br><br>
          <!--/Contenido-->

          <!--Footer-->
          <div class="text-center">
              <img src="imgs/logo pentakill.png" style="width 400px; height: 400px" alt="logo pentakill">
          </div>
          <div class="container-sm p-3 w-50 mb-2 rounded-3 border border-warning border-5 text-warning" >
              <div>
              <p style="font-size: 100%">
                  Pagina creada por: Willy Bown <br>
                  disculpen si me equivoque en algo que dormi 4 horas con suerte
              </p>
              </div>
          </div>
          <!--/Footer-->
    </body>
>>>>>>> 344557d (Agregado de index y login mas organico pero no funcional del todo por el momento)
</html>