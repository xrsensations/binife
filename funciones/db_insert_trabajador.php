<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$estado = "disponible";
$email = $_POST["email"];
$password = $_POST["password"];
$tipo = $_POST["tipo"];

include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';

    $sql = "INSERT INTO bini_trabajadores (nombre, apellidos, estado, email, `password`, tipo) VALUES 
    ('$nombre', '$apellidos', '$estado','$email', '$password', '$tipo')";
    
    // $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn,$sql)) {
        //echo "<script>location.reload()</script>";
        header("Location: ../ver_trabajadores.php");
            exit();
        
    }else{
        echo 'querry_error' . mysqli_error($conn);
    }    
     
?>