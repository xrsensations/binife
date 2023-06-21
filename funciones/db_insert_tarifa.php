<?php 

        $descripcion = $_POST['descripcion'];
        $cliente_id = $_POST['cliente_id'];
        $fecha_inicio = $_POST['fecha_inicial'];
        $fecha_final = $_POST['fecha_final'];
        
        //connection to database
        include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO bini_tarifa (tarifa_id, descripcion, cliente_id, fecha_inicio, fecha_final) VALUES (DEFAULT, $equipo_id, $cliente_id, '$fecha_inicio', '$fecha_final')";
        
        if (mysqli_query($conn,$sql)) {
            //echo "<script>location.reload()</script>";
            header("Location: tarifas.php");
            exit();
        }else{
            echo 'querry_error' . mysqli_error($conn);
        }    
    }
    mysqli_close($conn);   


?>