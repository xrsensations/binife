<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
    $equipo_id = $_POST['equipo_id'];
    $sql = "SELECT nombre, apellidos, equipo_id, descripcion FROM bini_equipo_trabajadores WHERE equipo_id = $equipo_id";

    $result = mysqli_query($conn, $sql);

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
    echo'</tbody></table>
    
    <a href = "../equipos.php" class ="btn btn-primary">Volver atras</a>
    <a href = "../equipos.php" class ="btn btn-info">Añadir integrantes</a>
    </div>
    </div>
    ';
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';
?>