<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    $sql = "SELECT * FROM bini_reservas ORDER BY reserva_id DESC";

    $result = mysqli_query($conn, $sql);
   
    echo '<table class="table table-bordered">
    <thead class="table-light">
    <tr>
        <th scope="col">ID de Reserva</th>
        <th scope="col">Cliente</th>
        <th scope="col">Hospedaje</th>
        <th scope="col">Entrada</th>
        <th scope="col">Salida</th>
        <th scope="col">Personas</th>
        <th scope="col">Comentarios</th>
        <th scope="col">Fecha de reserva</th>
    </tr>
    </thead>
    <tbody>';

    foreach($result as $reserva){
        echo'<tr>
            <td>'.$reserva['reserva_id'].'</td>
            <td>'.$reserva['cliente_id'].'</td>
            <td>'.$reserva['hospedaje_id'].'</td>
            <td>'.$reserva['fecha_entrada'].'</td>
            <td>'.$reserva['fecha_salida'].'</td>
            <td>'.$reserva['personas'].'</td>
            <td>'.$reserva['comentarios'].'</td>
            <td>'.$reserva['fecha_creacion'].'</td>';
    };
    echo'</tbody></table>';
    mysqli_close($conn);
?>