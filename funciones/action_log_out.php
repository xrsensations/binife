<?php 
    session_start();
    session_unset();
    unset($_SESSION['nombre']);
    unset($_SESSION['trabajador_id']);
    unset($_SESSION['tipo']);
    header("Location: ../index.php");
?>