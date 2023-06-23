<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $sql = "SELECT bini_reservas.*, bini_clientes.nombre_comercial AS nombre_comercial, bini_hospedajes.nombre_hospedaje AS hospedaje FROM bini_reservas 
    INNER JOIN bini_clientes ON bini_reservas.cliente_id = bini_clientes.cliente_id
    INNER JOIN bini_hospedajes ON bini_reservas.hospedaje_id = bini_hospedajes.hospedaje_id
    WHERE bini_reservas.fecha_entrada <= CURDATE() AND bini_reservas.fecha_salida >= CURDATE()
    ORDER BY bini_reservas.fecha_creacion DESC";
    
    $result = mysqli_query($conn, $sql);

    echo '<h2>Reservas activas</h2><br>
    <table class="table table-bordered text-center mb-5">
    <thead class="table-light">
    <tr>
        <th scope="col">ID DE RESERVA</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">HOSPEDAJE</th>
        <th scope="col">ENTRADA</th>
        <th scope="col">SALIDA</th>
        <th scope="col">Nº PERSONAS</th>
        <th scope="col">COMENTARIOS</th>
        <th scope="col">RESERVA CREADA</th>
    </tr>
    </thead>
    <tbody>';

    foreach($result as $reserva){
        $timestamp = $reserva['fecha_creacion'];
        $hora = date("H:i", strtotime($timestamp));
        $fecha = date("d-m-Y", strtotime($timestamp));

        echo'<tr>
            <td>'.$reserva['reserva_id'].'</td>
            <td>'.$reserva['nombre_comercial'].'</td>
            <td>'.$reserva['hospedaje'].'</td>
            <td>'.date("d-m-Y", strtotime($reserva['fecha_entrada'])).'</td>
            <td>'.date("d-m-Y", strtotime($reserva['fecha_salida'])).'</td>
            <td>'.$reserva['personas'].'</td>
            <td>'.$reserva['comentarios'].'</td>
            <td>'.$fecha . " (" . $hora.')</td>';
    };
    echo'</tbody></table>';

    $sql = "SELECT bini_reservas.*, bini_clientes.nombre_comercial AS nombre_comercial, bini_hospedajes.nombre_hospedaje AS hospedaje FROM bini_reservas 
    INNER JOIN bini_clientes ON bini_reservas.cliente_id = bini_clientes.cliente_id
    INNER JOIN bini_hospedajes ON bini_reservas.hospedaje_id = bini_hospedajes.hospedaje_id
    WHERE bini_reservas.fecha_entrada > CURDATE()
    ORDER BY bini_reservas.fecha_creacion DESC";
    
    $result = mysqli_query($conn, $sql);

    echo '<h2 class="mt-5">Próximas reservas</h2><br>
    <table class="table table-bordered text-center mb-5">
    <thead class="table-light">
    <tr>
        <th scope="col">ID DE RESERVA</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">HOSPEDAJE</th>
        <th scope="col">ENTRADA</th>
        <th scope="col">SALIDA</th>
        <th scope="col">Nº PERSONAS</th>
        <th scope="col">COMENTARIOS</th>
        <th scope="col">RESERVA CREADA</th>
    </tr>
    </thead>
    <tbody>';

    foreach($result as $reserva){
        $timestamp = $reserva['fecha_creacion'];
        $hora = date("H:i", strtotime($timestamp));
        $fecha = date("d-m-Y", strtotime($timestamp));

        echo'<tr>
            <td>'.$reserva['reserva_id'].'</td>
            <td>'.$reserva['nombre_comercial'].'</td>
            <td>'.$reserva['hospedaje'].'</td>
            <td>'.date("d-m-Y", strtotime($reserva['fecha_entrada'])).'</td>
            <td>'.date("d-m-Y", strtotime($reserva['fecha_salida'])).'</td>
            <td>'.$reserva['personas'].'</td>
            <td>'.$reserva['comentarios'].'</td>
            <td>'.$fecha . " (" . $hora.')</td>';
    };
    echo'</tbody></table>';

    $sql = "SELECT bini_reservas.*, bini_clientes.nombre_comercial AS nombre_comercial, bini_hospedajes.nombre_hospedaje AS hospedaje FROM bini_reservas 
    INNER JOIN bini_clientes ON bini_reservas.cliente_id = bini_clientes.cliente_id
    INNER JOIN bini_hospedajes ON bini_reservas.hospedaje_id = bini_hospedajes.hospedaje_id
    WHERE bini_reservas.fecha_salida < CURDATE()
    ORDER BY bini_reservas.fecha_creacion DESC";
    
    $result = mysqli_query($conn, $sql);

    echo '<h2 class="mt-5">Reservas finalizadas</h2><br>
    <table class="table table-bordered text-center">
    <thead class="table-light">
    <tr>
        <th scope="col">ID DE RESERVA</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">HOSPEDAJE</th>
        <th scope="col">ENTRADA</th>
        <th scope="col">SALIDA</th>
        <th scope="col">Nº PERSONAS</th>
        <th scope="col">COMENTARIOS</th>
        <th scope="col">RESERVA CREADA</th>
    </tr>
    </thead>
    <tbody>';

    foreach($result as $reserva){
        $timestamp = $reserva['fecha_creacion'];
        $hora = date("H:i", strtotime($timestamp));
        $fecha = date("d-m-Y", strtotime($timestamp));

        echo'<tr>
            <td>'.$reserva['reserva_id'].'</td>
            <td>'.$reserva['nombre_comercial'].'</td>
            <td>'.$reserva['hospedaje'].'</td>
            <td>'.date("d-m-Y", strtotime($reserva['fecha_entrada'])).'</td>
            <td>'.date("d-m-Y", strtotime($reserva['fecha_salida'])).'</td>
            <td>'.$reserva['personas'].'</td>
            <td>'.$reserva['comentarios'].'</td>
            <td>'.$fecha . " (" . $hora.')</td>';
    };
    echo'</tbody></table>';
    mysqli_close($conn);
?>