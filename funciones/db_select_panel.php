<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    // $sql = "SELECT zona, nombre_hospedaje, estado, dias_transcurridos, dias_restantes FROM bini_panel";
    $sql = "CALL bini_calcular_panel";

    $result = mysqli_query($conn, $sql);
    // print_r($result['num_rows']);
    // echo '<table class="table table-bordered">
    // <thead class="table-light">
    // <tr>
    //     <th scope="col">Zona</th>
    //     <th scope="col">Nombre</th>
    //     <th scope="col">Estado</th>
    //     <th scope="col">Anterior servicio</th>
    //     <th scope="col">Siguiente servicio</th>
    //     <th scope="col">DESC</th>
    //     <th scope="col">HOY</th>
    // </tr>
    // </thead>
    // <tbody>';
    // ...
// Ejecutar la consulta
if ($conn->multi_query($sql)) {
    do {
        // Recuperar el resultado de la consulta actual
        if ($result = $conn->store_result()) {
            // Procesar los datos de la tabla actual
            while ($row = $result->fetch_assoc()) {
                // Hacer algo con los datos, por ejemplo, imprimirlos
                echo $row['var_zona'] . " - " . $row['var_nombre'] . "<br>";
            }
            // Liberar el resultado actual
            $result->free();
        }
        // Descartar los resultados pendientes
        if ($conn->more_results()) {
            $conn->next_result();
        }
    } while ($conn->more_results());
} else {
    echo "Error al ejecutar el procedimiento almacenado: " . $conn->error;
}
// ...

    // foreach($result as $entrada){
    //     echo'<tr>
    //         <td>'.$entrada['var_zona'].'</td>
    //         <td>'.$entrada['var_nombre'].'</td>';
    //         if($entrada['var_estado'] == "sucio"){
    //            echo '<td class ="bg-danger">'.$entrada['var_estado'].'</td>'; 
    //         }else if($entrada['var_estado'] == "limpio"){
    //             echo '<td class ="bg-success">'.$entrada['var_estado'].'</td>'; 
    //         }else{
    //             echo '<td class ="bg-warning">'.$entrada['var_estado'].'</td>'; 
    //         }
    //         echo'
    //         <td>'.$entrada['dias_transcurridos'].'dias</td>
    //         <td>'.$entrada['dias_restantes'].' dias</td>
    //         <td>entrada</td>
    //         <td><input type="checkbox" class="form-check-input"></td>
    //      <tr>';
    //     }
    // echo'</tbody></table>';

?>