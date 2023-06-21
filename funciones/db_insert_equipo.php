<?php 

    
    $descripcion = $_POST['descripcion'];
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO bini_equipos (equipo_id, descripcion) VALUES(DEFAULT, '$descripcion')";
    if(mysqli_query($conn, $sql)){
        
        header("Location: ../equipos.php");
        exit();
    }else{
        echo 'querry_error' . mysqli_error($conn);
    }    
}
   
    mysqli_close($conn);
?>