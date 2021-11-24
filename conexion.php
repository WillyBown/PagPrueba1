<<<<<<< HEAD
<?php
function conectar(){
    $host= "localhost";
    $user= "root";
    $pass= "";
    
    $db= "pagpentakill";

    $con= mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$db);

    return $con;
}
=======
<?php
function conectar(){
    $host= "localhost";
    $user= "root";
    $pass= "";
    $db= "pagpentakill";

    $con= mysqli_connect($host,$user,$pass,$db);

    return $con;
}
>>>>>>> 344557d (Agregado de index y login mas organico pero no funcional del todo por el momento)
?>