<?php
    include("conexion.php");
    $con= conectar();

    $Usuario= $_POST['Usuario'];
    $Contraseña= $_POST['Contraseña'];

    $sql= "DELETE FROM usuarios WHERE Usuario='$Usuario' AND Contraseña='$Contraseña'";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: DatosPersonales.php");
    }
    else{
    }
?>