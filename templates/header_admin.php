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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/binife/css/style.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="/binife/img/binife.png" alt="" width ="100"></a>
    <img src="/binife/img/barra-de-menus.png" alt="" id="sidebarCollapse" width="40">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 lg-end">
            <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
        <?php if($var_nombre == " "){

          echo'<a class="btn btn-outline-success" href = "/binife/login.php">Log in</a>';
        }else{
          echo'<a class="btn btn-outline-danger" href = "/binife/funciones/action_log_out.php">Log out</a>';
        }?>
    </div>
</nav>  
</header>
<body>
<!--<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">
    <li>
        Alta cliente
    </li>
</ul>

</aside>-->
<div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h5>Panel de administrador</h5>
      </div>
      <ul class="list-unstyled">
        <li>
          <a href="/binife/forms/form_alta_cliente.php">Alta cliente</a>
        </li>
        <li>
          <a href="#">Acerca de</a>
        </li>
        <li>
          <a href="#">Contacto</a>
        </li>
      </ul>
    </nav>
