<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>QueSomos</title>
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
        <center>
            <!--Header-->
            <img src="imgs/pentakill banner.jpg" class="img-fluid" width="100%" alt="Pentakill Banner" style="border: 20px"><br><br>
            <!--/Header-->
        <!--Contenido-->
        <h2 style="color:gold" align="middle">Que Somos?</h2>
        <div class="container-sm p-3 w-50 mb-2 rounded-3 border border-warning border-5 text-white">
            <div class="texto">
                <p class="h4 text-warning">Esta pagina esta creada con el objetivo de tener la discografia de la banda pentakill en un solo
                    lugar y de forma ordenada. Principalmente se creo para promocionar el 3er disco de la banda pero
                    luego de empezar con el 3er album la pagina se expandira a medida que se me ocurran nuevas cosas</p>
                </p>
            </div><br>
            <div class="container container-fluid">
                <div class="row gx-5">
                    <div class="col">
                        <img src="https://pbs.twimg.com/media/DF2AHFvUAAEbbtj.jpg" alt="ICON1" width="200" height="200"><br>
                    </div>
                    <div class="col">
                        <img src="https://pbs.twimg.com/media/DF2AHmrVwAAgkez.jpg" alt="ICON2" width="200" height="200"><br>
                    </div>
                    <div class="col">
                        <img src="https://pbs.twimg.com/media/DF2AIEmUMAEs7vU.jpg" alt="ICON3" width="200" height="200"><br>
                    </div>
                </div>
            </div><br>
            <div class="autor">
                <p class="h4 text-warning">Autor de la pagina: Willy Bown<br>Estudiante de Ingenieria Civil en Computacion e Informatica en la Universidad de Atacama</p>
            </div>
        </div>

        <center style="margin:20px">

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
    </html>