<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
   

    $sql = "SELECT * FROM bini_albaranes WHERE equipo_id = $equipo_id";

    $result = mysqli_query($conn, $sql);

    echo '<div class = "trabajos">';
    foreach($result as $entrada){
        echo'<div class = "trabajo">
            <p>'.$entrada['descripcion'].'</p><br>
            <button class= "btn btn-primary">Ver tareas</button><br><br>
            <button class= "btn btn-primary">Acabado</button> 
            </div>   
         ';
        }
    echo'</div>';
    mysqli_close($conn);
?>