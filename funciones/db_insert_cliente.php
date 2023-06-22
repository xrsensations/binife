<?php 

    
    $comercial = $_POST['comercial'];
    $fiscal = $_POST['fiscal'];
    $direccion = $_POST['direccion'];
    $postal = $_POST['postal'];
    $poblacion = $_POST['poblacion'];
    $provincia = $_POST['provincia'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO bini_clientes (nombre_comercial, nombre_fiscal, direccion , CP, poblacion, provincia, pais, telefono, email) 
        VALUES('$comercial', '$fiscal', '$direccion', '$postal', '$poblacion', '$provincia', '$pais', '$telefono', '$email')";
        if(mysqli_query($conn, $sql)){
            
            header("Location: db_select_clientes.php");
            exit();
        }else{
            echo 'querry_error' . mysqli_error($conn);
        }    
    }
   
    mysqli_close($conn);
?>