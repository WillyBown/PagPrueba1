<?php
    include("conexion.php");
    $con= conectar();

    $Nombre= $_POST['Nombre'];
    $Apellidos= $_POST['Apellidos'];
    $Usuario= $_POST['Usuario'];
    $Contraseña= $_POST['Contraseña'];
    $Email= $_POST['Email'];
    $Direccion= $_POST['Direccion'];
    $FechaNacimiento= $_POST['FechaNacimiento'];
    $Edad= $_POST['Edad'];
    $Sexo= $_POST['Sexo'];
    $ColorPreferido= $_POST['ColorPreferido'];

    $sql= "INSERT INTO usuarios VALUES ('$Nombre','$Apellidos','$Usuario','$Contraseña','$Email','$Direccion','$FechaNacimiento','$Edad','$Sexo','$ColorPreferido')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: DatosPersonales.php");
    }
    else{
    }
?>