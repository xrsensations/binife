<?php 

    if(isset($_POST['añadir'])){
        $equipo_id = $_POST['equipo_id'];
        $trabajador_id = $_POST['trabajador_id'];
        $fecha = date("Y").'-'.date("m").'-'.date("d");
        
        //connection to database
        include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO bini_lineas_equipos (linea_id, equipo_id, trabajador_id, fecha) VALUES (DEFAULT, $equipo_id, $trabajador_id, '$fecha')";
        
        if (mysqli_query($conn,$sql)) {
            //echo "<script>location.reload()</script>";
            header("Location: action_ver_equipo.php?equipo_id=".$equipo_id."");
            exit();
        }else{
            echo 'querry_error' . mysqli_error($conn);
        }    
    }   
    } 

?>