<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
    $equipo_id = $_POST['equipo_id'] ?? $_GET['equipo_id'];
    $sql = "SELECT trabajador_id, nombre, apellidos, equipo_id, descripcion FROM bini_equipo_trabajadores WHERE equipo_id = $equipo_id";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){

        echo '<div id="content" class = ""><table class="table">
        <thead class="table-light">
        <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">APELLIDOS</th>
        <th scope="col">EQUIPO ID</th>
        <th scope="col">DESCRIPCIÓN</th>
        <th scope="col"></th>
        </tr>
        </thead>
        <tbody>';
        
        foreach($result as $entrada){
            echo'
            <tr>
            <td>'.$entrada['nombre'].'</td>
            <td>'.$entrada['apellidos'].'</td>
            <td>'.$entrada['equipo_id'].'</td>
            <td>'.$entrada['descripcion'].'</td>
            <td>
            <form action = "/binife/funciones/db_delete_linea_equipo.php" method = "POST">
            <input type = "number" name = "trabajador_id" value = "'.$entrada['trabajador_id'].'" hidden>
            <input type = "number" name = "equipo_id" value = "'.$entrada['equipo_id'].'" hidden>
            <input type = "submit" class = "btn btn-danger" value = "Eliminar"></form>
            </td>
            </tr>
            ';
        }
        echo'</tbody></table>';
            include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/db_select_trabajadores.php';

        }else{
            echo '<div id="content" class = ""><p>No hay trabajadores en este equipo...</p><br>';
            include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/db_select_trabajadores.php';

        }

        mysqli_close($conn);

    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';
?>