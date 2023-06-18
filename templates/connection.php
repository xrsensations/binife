<?php
$conn = mysqli_connect('localhost', 'root', '', 'binife');  
// mysqli_set_charset($conn, "utf8");
$conn->set_charset("utf8");
//checking connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>