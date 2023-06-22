<?php
    
    $id = $_REQUEST['id'];
    
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';

    $sql = "SELECT * FROM bini_hospedajes WHERE cliente_id = $id";    
    $result = mysqli_query($conn, $sql);
    $hospedajes = mysqli_fetch_all($result, MYSQLI_ASSOC);

     // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $options = "<option hidden disabled selected> - Elige un hosepdaje - </option>";

    foreach($hospedajes as $hospedaje){
        $options.= '<option value="'.$hospedaje['hospedaje_id'].'">'.$hospedaje['nombre_hospedaje'].'</option>';
    }

    echo $options;

    
?>