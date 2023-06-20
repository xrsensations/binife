<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    $sql = "SELECT trabajador_id, nombre, apellidos FROM bini_trabajadores WHERE estado = 'disponible' AND tipo = 'limpieza'";

    $result = mysqli_query($conn, $sql);

    echo ' <div class = "d-flex gap-5">
    <a href = "../equipos.php" class ="btn btn-primary">Volver atras</a>
    <p>Añade un trabajador:</p>
    <form action = "/binife/funciones/db_select_trabajadores.php" method = "POST" class =  "d-flex gap-3"><div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1" name = "trabajador_id">';
    foreach($result as $entrada){
        echo'<option value = "'.$entrada['trabajador_id'].'">'.$entrada['nombre'].' '.$entrada['apellidos'].'</option>';
        }
    echo'</select>
    </div>
    <input type = "number" name = "equipo_id" value = "'.$equipo_id.'" hidden>
        <input class ="btn btn-info" type = "submit" name = "añadir" value = "Añadir"></form>
    </div>
    </div>
    </div>';

?>