<?php 


    
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
   

    $sql = "SELECT tarifa_id, descripcion, cliente_id, fecha_inicio, fecha_final FROM bini_tarifas";

    $result = mysqli_query($conn, $sql);

    echo '<table class="table">
    <thead class="table-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Descripción</th>
        <th scope="col">Cliente ID</th>
        <th scope="col">Fecha inicio</th>
        <th scope="col">Fecha final</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>';
    foreach($result as $entrada){
        echo'<tr>
            <td>'.$entrada['tarifa_id'].'</td>
            <td>'.$entrada['descripcion'].'</td>
            <td>'.$entrada['cliente_id'].'</td>
            <td>'.$entrada['fecha_inicio'].'</td>
            <td>'.$entrada['fecha_final'].'</td>
            <td><button class= "btn btn-primary">Dar de alta</button></td>
            <td><button class= "btn btn-danger">Eliminar</button></td>
            
         <tr>';
        }
    echo'</tbody></table>';

?>