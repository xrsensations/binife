<?php 
session_start();

if(isset($_SESSION['nombre']) != false){
    $var_nombre = $_SESSION["nombre"];
}else{
    $var_nombre = " ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binife</title>
    <link rel="stylesheet" href="/binife/ss/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" ><img src="img/binife.png" alt="" width ="100"></a>
    <?php
    if($var_nombre != ' ')
    echo '<a class="btn btn-outline-danger" href="/binife/funciones/action_log_out.php" type="submit">Cerrar sesión</a>';
    ?>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div> -->
  </div>
</nav>  
</header>
<body>