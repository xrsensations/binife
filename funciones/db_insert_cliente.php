<?php 
    
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    $sql = "SELECT * FROM bini_clientes"

    $result = mysqli_query($conn, $sql);

    echo ' <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">';
    foreach($result as $entrada){
        echo'<option>'.$entrada['nombre'].' '.$entrada['apellidos'].'</option>';
        }
    echo'</select>
    </div>';

?>