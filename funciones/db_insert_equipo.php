<?php 

    
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    $sql = "INSERT INTO bini_lineas_equipos (linea_id, equipo_id, trabajador_id, fecha) VALUES(DEFAULT, $equipo_id)";

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