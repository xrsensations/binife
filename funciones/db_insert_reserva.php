<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo $_POST["cliente"];
echo $_POST["hospedaje"];
$cliente = $_POST["cliente"];
$entrada = $_POST["entrada"];
$salida = $_POST["salida"];
$hospedaje = $_POST["hospedaje"];
$personas = $_POST["personas"];
$comentarios = $_POST["comentarios"];
include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';

    $sql = "INSERT INTO bini_reservas (cliente_id, hospedaje_id, fecha_entrada, fecha_salida, personas, comentarios) VALUES 
    ($cliente, $hospedaje, '$entrada','$salida', $personas, '$comentarios')";
    
    // $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn,$sql)) {
        //echo "<script>location.reload()</script>";
        header("Location: ../forms/form_insertar_reserva.php");
            exit();
        
    }else{
        echo 'querry_error' . mysqli_error($conn);
    }    
     
?>