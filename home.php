<?php

    include("conexion.php");
    $con= conectar();
    session_start();

    $sql= "SELECT * FROM usuarios";
    $query= mysqli_query($con,$sql);

    $Usuario = $_SESSION['username'];
    echo $Usuario;
    jkhjjk;
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Pentakill: lost chapter</title>
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
                <a class="nav-link active text-warning" href="Nosotros.php"> <?php echo $Usuario ?> </a>
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

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="imgs/pentakill skins 2.jpeg" style="height: 500px" class="d-block" alt="skins 1">
                </div>
                <div class="carousel-item">
                  <img src="imgs/pentakill skins.jpg" style="height: 500px" class="d-block" alt="skins 2">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div><br><br>

            <div class="row row-cols-md-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card border-warning border-5 bg-dark text-warning" style="width: 35.6rem;">
                    <iframe width="560" height="315" class="d-block w-70%" src="https://www.youtube.com/embed/5IWS7Y5KRhk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                      <h5 class="card-title"><em>Cancion que le da nombre al album</em></h5>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card border-warning border-5 bg-dark text-warning" style="width: 35.6rem;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/oUiOylPbfV0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                      <h5 class="card-title"><em>Cancion mas escuchada de la banda</em></h5>
                    </div>
                  </div>
                </div>
            </div><br><br>
            <div class="container-sm p-3 w-50 mb-2 rounded-3 border border-warning border-5 text-white">
                <p class="h4 text-warning">Pentakill es una banda de heavy metal del universo de League of legends. Esta banda vuelve este a??o
                    con 10 nuevas canciones y la reedicion acustica de su cancion mas escuchada </p>
            </div><br>
            <div class="container-sm p-3 w-50 mb-2 rounded-3 border border-warning border-5 text-warning" >
                <div>
                    <h2 class="h2 text-warning">Lista de canciones</h2>
                    <table class="table table-borderless table black text-warning">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lost Chapter</td>
                                <td>Pentakill, Jorn Lande</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Predator</td>
                                <td>Pentakill, Tre Watson, TELLE</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Edge of Night</td>
                                <td>Pentakill, Jorn Lande</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Gathering Storm</td>
                                <td>Pentakill, Jorn Lande, Noora Louhimo, Jose "Atlan" Aranda</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Conqueror</td>
                                <td>Pentakill, Tre Watson, TELLE</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Executioner's Calling</td>
                                <td>Pentakill, Jorn Lande, Tre Watson</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Stormrazor</td>
                                <td>Pentakill, Noora Louhimo</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Aftershock</td>
                                <td>Pentakill, Tre Watson</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Last Stand</td>
                                <td>Pentakill, Jorn Lande</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Redemption</td>
                                <td>Pentakill, Jorn Lande, Noora Louhimo</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Lightbringer - Acoustic</td>
                                <td>Pentakill, Jorn Lande</td>
                            </tr>
                        </tbody>
                    </table>
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

</html>
