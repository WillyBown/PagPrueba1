<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Comentario</title>
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
                        <label class="form-label">Contrase??a</label>
                        <input type="password" class="form-control" id="Contrase??a" name="Contrase??a" placeholder="Contrase??a" />
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
        <center>
            <!--Header-->
            <img src="imgs/pentakill banner.jpg" class="img-fluid" width="100%" alt="Pentakill Banner" style="border: 20px"><br><br>
            <!--/Header-->
        <!--Contenido-->

            <div class="row justify-content-center">
                <div class="col-6">
                    <h2 style="color:gold" align="middle">Comenta</h2>
                    <div class="container-sm p-3 w-50 mb-2 rounded-3 border border-warning border-5 text-warning">
                        <form>
                            Ingresa tu nombre completo: <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Nombre"></p>
                            Deja un mensaje:<textarea class="form-control" aria-label="With textarea" name="mensaje"></textarea><br>
                            <input type="submit" class="btn btn-warning" value="Enviar la informaci??n"><br><br>
                        </form>
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
        </center>
    </body>
=======
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Comentario</title>
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
                        <label class="form-label">Contrase??a</label>
                        <input type="password" class="form-control" id="Contrase??a" name="Contrase??a" placeholder="Contrase??a" />
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
        <center>
            <!--Header-->
            <img src="imgs/pentakill banner.jpg" class="img-fluid" width="100%" alt="Pentakill Banner" style="border: 20px"><br><br>
            <!--/Header-->
        <!--Contenido-->

            <div class="row justify-content-center">
                <div class="col-6">
                    <h2 style="color:gold" align="middle">Comenta</h2>
                    <div class="container-sm p-3 w-50 mb-2 rounded-3 border border-warning border-5 text-warning">
                        <form>
                            Ingresa tu nombre completo: <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Nombre"></p>
                            Deja un mensaje:<textarea class="form-control" aria-label="With textarea" name="mensaje"></textarea><br>
                            <input type="submit" class="btn btn-warning" value="Enviar la informaci??n"><br><br>
                        </form>
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
        </center>
    </body>
>>>>>>> 344557d (Agregado de index y login mas organico pero no funcional del todo por el momento)
</html>