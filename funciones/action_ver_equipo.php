<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
    $equipo_id = $_POST['equipo_id'] ?? $_GET['equipo_id'];
    $sql = "SELECT nombre, apellidos, equipo_id, descripcion FROM bini_equipo_trabajadores WHERE equipo_id = $equipo_id";

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
            <td><button class = "btn btn-danger">Eliminar</button></td>
            </tr>
            ';
        }
        echo'</tbody></table>';
        include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/db_select_trabajadores.php';

        }else{
            echo "<p>No hay trabajadores en este equipo...</p><br>";
            include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/db_select_trabajadores.php';

        }

        /*<div class = "d-flex gap-5">
        <a href = "../equipos.php" class ="btn btn-primary">Volver atras</a>
        <p>Añade un trabajador:</p>
        <form method = "POST" class =  "d-flex gap-3"> ';
        include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/db_select_trabajadores.php';
        
echo'<input type = "number" name = "equipo_id" value = "'.$equipo_id.'" hidden>
        <input class ="btn btn-info" type = "submit" name = "añadir" value = "Añadir"></form>
    </div>
    </div>
    </div>*/
    //include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/db_insert_linea_equipo.php';

    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';
?>