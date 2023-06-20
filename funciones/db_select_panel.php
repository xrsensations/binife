<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database

    // $sql = "SELECT zona, nombre_hospedaje, estado, dias_transcurridos, dias_restantes FROM bini_panel";
    $sql = "CALL bini_calcular_panel";

    $result = mysqli_query($conn, $sql);
   
    echo '<table class="table table-bordered">
    <thead class="table-light">
    <tr>
        <th scope="col">Zona</th>
        <th scope="col">Nombre</th>
        <th scope="col">Estado</th>
        <th scope="col">Anterior servicio</th>
        <th scope="col">Siguiente servicio</th>
        <th scope="col">DESC</th>
        <th scope="col">HOY</th>
    </tr>
    </thead>
    <tbody>';

    foreach($result as $entrada){
        echo'<tr>
            <td>'.$entrada['zona'].'</td>
            <td>'.$entrada['nombre'].'</td>';
            if($entrada['estado'] == "sucio"){
               echo '<td class ="bg-danger">'.$entrada['estado'].'</td>'; 
            }else if($entrada['estado'] == "limpio"){
                echo '<td class ="bg-success">'.$entrada['estado'].'</td>'; 
            }else{
                echo '<td class ="bg-warning">'.$entrada['estado'].'</td>'; 
            }
            echo'
            <td>'.$entrada['anterior'].'dias</td>
            <td>'.$entrada['siguiente'].' dias</td>
            <td>entrada</td>
            <td><input type="checkbox" class="form-check-input"></td>
         <tr>';
        }
    echo'</tbody></table>';

?>