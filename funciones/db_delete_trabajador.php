<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';

    $sql = "DELETE FROM bini_trabajadores WHERE trabajador_id = $_GET[id]";
    
    // $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn,$sql)) {
        //echo "<script>location.reload()</script>";
        header("Location: ../ver_trabajadores.php");
            exit();
        
    }else{
        echo 'querry_error' . mysqli_error($conn);
    }    
     
?>