<?php

include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO `bini_reservas`(`cliente_id`, `hospedaje_id`, `fecha_entrada`, `fecha_salida`, `personas`, `comentarios`) VALUES 
    ('$_POST['cliente']','$_POST['hospedaje']','$_POST['entra   da']','$_POST['salida']','$_POST['personas']'),'$_POST['comentarios']'";
    
    // $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn,$sql)) {
        //echo "<script>location.reload()</script>";
        ?>  <div class="text-center pt-5 text-info">  <?php echo 'Reserva creada con exito'; ?> </div> <?php
        
    }else{
        echo 'querry_error' . mysqli_error($conn);
    }    
}        
?>