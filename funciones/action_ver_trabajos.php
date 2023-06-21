<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
    $trabajador_id = $_GET['q'];
    $sql1 = "SELECT equipo_id, descripcion FROM bini_equipo_trabajadores WHERE trabajador_id = $trabajador_id";
    
    $result1 = mysqli_query($conn, $sql1);
    
    $row = $result1->fetch_assoc();

    $equipo_id = $row["equipo_id"];
    $descripcion = $row["descripcion"];
    $sql = "SELECT nombre, apellidos, equipo_id, descripcion FROM bini_equipo_trabajadores  WHERE equipo_id = $equipo_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
 
        echo '<div class = "text-center border m-5 p-3">
        <h4>EQUIPO</h4>
        <p>'.$descripcion.'</p>
        <ul class = "list-unstyled">';
        foreach($result as $entrada){
            echo'
            <li>'.$entrada['nombre'].' '.$entrada['apellidos'].'</li>
            
            ';
        }
        echo'</ul></div>';
    }else{
        echo '<h4>Aún no tienes equipo...</h4>';
    }
    mysqli_close($conn);
?>