<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    $sql = "SELECT cliente_id, nombre_comercial, nombre_fiscal, direccion, CP, poblacion, provincia, pais, telefono, email FROM bini_clientes";

    $result = mysqli_query($conn, $sql);

    echo '<div id="content" class = ""><div class="scrollme" style:><table class="table table-responsive table-bordered table-container">
    <thead class="table-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">COMERCIAL</th>
        <th scope="col">FISCAL</th>
        <th scope="col">DIRECCIÓN</th>
        <th scope="col">CP</th>
        <th scope="col">POBLACION</th>
        <th scope="col">PROVINCIA</th>
        <th scope="col">PAIS</th>
        <th scope="col">TELEFONO</th>
        <th scope="col">EMAIL</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>';
    foreach($result as $entrada){
        echo'
        <tr>
            <td>'.$entrada['cliente_id'].'</td>
            <td>'.$entrada['nombre_comercial'].'</td>
            <td>'.$entrada['nombre_fiscal'].'</td>
            <td>'.$entrada['direccion'].'</td>
            <td>'.$entrada['CP'].'</td>
            <td>'.$entrada['poblacion'].'</td>
            <td>'.$entrada['provincia'].'</td>
            <td>'.$entrada['pais'].'</td>
            <td>'.$entrada['telefono'].'</td>
            <td>'.$entrada['email'].'</td>
            <td><form action = "db_delete_cliente.php" method = "POST">
            <input type = "number" value = "'.$entrada['cliente_id'].'" name = "cliente_id" hidden>
            <button type = "submit" class = "btn btn-danger">Eliminar</button>
            </form></td>
            <td><form action = "/binife/funciones/action_ver_equipo.php" method = "POST">
            <input type = "number" value = "'.$entrada['cliente_id'].'" name = "cliente_id" hidden>
            <button type = "submit" class = "btn btn-primary">Editar</button>
            </form></td>
        </tr>
        ';
        }
    echo'</tbody></table></div></div></div>';
    mysqli_close($conn);
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';
?>