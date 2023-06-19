<?php 

if (isset($_POST['submit'])){
    $var_email = $_POST['email'];
    $password = $_POST['password'];
    
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    //connection to database
   

    $sql = "SELECT nombre, trabajador_id, tipo FROM bini_trabajadores WHERE email = '$var_email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $entrada){
       $nombre = $entrada["nombre"];
       $trabajador_id = $entrada["trabajador_id"];
       $tipo = $entrada["tipo"];
    }


    if ($nombre){
        session_start();
        $_SESSION['nombre'] = $nombre;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['trabajador_id'] = $trabajador_id;
        
        if($tipo == "admin"){
            echo '<script type="text/javascript">window.location.href = "admin.php";</script>';
        }else{
            echo '<script type="text/javascript">window.location.href = "trabajador.php?q='.$trabajador_id.'";</script>';

        }
    }else{
        echo '<script>alert("Incorrect password")</script>';
    }

}
?>