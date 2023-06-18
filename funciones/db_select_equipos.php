<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    $sql = "SELECT equipo_id, descripcion FROM bini_equipos";

    $result = mysqli_query($conn, $sql);

    echo '<table class="table table-bordered">
    <thead class="table-light">
    <tr>
        <th scope="col">EQUIPO ID</th>
        <th scope="col">DESCRIPCIÓN</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>';
    foreach($result as $entrada){
        echo'
        <tr>
            <td>'.$entrada['equipo_id'].'</td>
            <td>'.$entrada['descripcion'].'</td>
            <td><form action = "/binife/funciones/action_ver_equipo.php" method = "POST">
            <input type = "number" value = "'.$entrada['equipo_id'].'" name = "equipo_id" hidden>
            <button type = "submit" class = "btn btn-primary">Ver integrantes</button>
            </form></td>
        </tr>
        ';
        }
    echo'</tbody></table><button class ="btn btn-primary">Crear equipo</button>';

?>