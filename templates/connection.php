<?php

$conn = mysqli_connect('localhost', 'root', '', 'binife');  
//checking connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>