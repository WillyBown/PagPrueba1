<?php
    include("conexion.php");
    $con= conectar();
    session_start();

    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];

     $sql = "SELECT * from usuarios where Usuario = '$Usuario' and Contraseña = '$Contraseña'";
     $query = mysqli_query($con,$sql);
     $array = mysqli_num_rows($query);

     if($array>0){
        $_SESSION['username']= $Usuario;
        header("location: home.php");
     }else{
        echo "Datos incorrectos, intente otra vez.";
     }
?>