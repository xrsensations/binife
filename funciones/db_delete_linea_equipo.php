<?php 

    // if(isset($_POST['eliminar'])){
        $equipo_id = $_POST['equipo_id'];
        $trabajador_id = $_POST['trabajador_id'];
        
        //connection to database
        include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
        
        $sql = "DELETE FROM bini_lineas_equipos WHERE equipo_id = $equipo_id AND trabajador_id = $trabajador_id";
        echo 'hola';
        if (mysqli_query($conn,$sql)) {
            //echo "<script>location.reload()</script>";
            header("Location: action_ver_equipo.php?equipo_id=".$equipo_id."");
            exit();
        }else{
            echo 'querry_error' . mysqli_error($conn);
        }    
    

?>