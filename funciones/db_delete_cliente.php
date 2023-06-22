<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    // if(isset($_POST['eliminar'])){
        $cliente_id = $_POST['cliente_id'];
        
        //connection to database
        include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
        
        $sql = "DELETE FROM bini_clientes WHERE cliente_id = $cliente_id";
        
        if (mysqli_query($conn,$sql)) {
            //echo "<script>location.reload()</script>";
            header("Location: db_select_clientes.php");
            exit();
        }else{
            echo 'querry_error' . mysqli_error($conn);
        }    
        mysqli_close($conn);
    

?>