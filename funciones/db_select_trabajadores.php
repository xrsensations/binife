<?php 
    // include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
    $sql = "SELECT trabajador_id, nombre, apellidos 
    FROM bini_trabajadores 
    WHERE trabajador_id 
    NOT IN (SELECT trabajador_id FROM bini_lineas_equipos WHERE equipo_id = $equipo_id) AND estado = 'disponible' AND tipo = 'limpieza'";
    //$sql = "SELECT trabajador_id, nombre, apellidos FROM bini_trabajadores WHERE estado = 'disponible' AND tipo = 'limpieza'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){

        echo '<div class = "d-flex gap-5">
        <a href = "../equipos.php" class ="btn btn-primary">Volver atras</a>
        <p>Añade un trabajador:</p>
        <form action = "/binife/funciones/db_insert_linea_equipo.php" method = "POST" class =  "d-flex gap-3"><div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1" name = "trabajador_id">';
        foreach($result as $entrada){
            echo'<option value = "'.$entrada['trabajador_id'].'">'.$entrada['nombre'].' '.$entrada['apellidos'].'</option>';
        }
        echo'</select>
        </div>
        <input type = "number" name = "equipo_id" value = "'.$equipo_id.'" hidden>
        <input class ="btn btn-info" type = "submit" name = "añadir" value = "Añadir">
        </form>
        </div>
        </div>
        </div>';
    }else{
        echo'<div class ="d-flex gap-3"><a href = "../equipos.php" class ="btn btn-primary">Volver atras</a><p>No quedan más trabajadores</p></div>';
    }

?>