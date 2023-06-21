<?php 

        $tarifa_id = $_POST['tarifa_id'];
        $servicio_id = $_POST['servicio_id'];
        $concepto = $_POST['concepto'];
        $precio = $_POST['precio'];
        $IVA = $_POST['IVA'];
        $total = $_POST['total'];
        
        //connection to database
        include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO bini_lineas_tarifa (linea_id, tarifa_id, servicio_id, concepto, precio, IVA, total) VALUES (DEFAULT, $tarifa_id, $servicio_id, '$concepto', '$precio, $IVA, $total)";
        
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