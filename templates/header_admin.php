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
    <script src="https://kit.fontawesome.com/3f23fcb941.js" crossorigin="anonymous"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-light" id ="nav">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="/binife/img/binife.png" alt="" width ="100"></a>
    <img src="/binife/img/barra-de-menus.png" alt="" id="sidebarCollapse" width="40">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
        <?php if($var_nombre != " "){
          echo'<a class="btn btn-outline-danger" href = "/binife/funciones/action_log_out.php">Cerrar sesión</a>';
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
          <a href="/binife/admin.php"><i class="fa-solid fa-sliders"></i>&nbsp;Panel</a>
        </li>
        <li class="dropdown">
          <span onclick="toggleDropdown(this)" class ="span_dropdown"><i class="fa-solid fa-list-check"></i>&nbsp;Albaranes&nbsp;<i class="fa-solid fa-caret-down"></i></span>
          <ul class="dropdown-content list-unstyled ms-2">
            <li><a href="/binife/forms/form_crear_albaran.php">Crear albarán</a></li>
            <li><a href="/binife/funciones/db_select_clientes.php">Ver albaranes</a></li>
            <!-- <li>Subelemento 3</li> -->
          </ul>
        </li>
        <li class="dropdown">
          <span onclick="toggleDropdown(this)" class ="span_dropdown"><i class="fa-regular fa-user"></i>&nbsp;Clientes&nbsp;<i class="fa-solid fa-caret-down"></i></span>
          <ul class="dropdown-content list-unstyled ms-2">
            <li><a href="/binife/forms/form_alta_cliente.php">Alta cliente</a></li>
            <li><a href="/binife/funciones/db_select_clientes.php">Ver clientes</a></li>
            <!-- <li>Subelemento 3</li> -->
          </ul>
        </li>
        <li class="dropdown">
          <span onclick="toggleDropdown(this)" class ="span_dropdown"><i class="fa-solid fa-clipboard-list"></i>&nbsp;Reservas&nbsp;<i class="fa-solid fa-caret-down"></i></span>
          <ul class="dropdown-content list-unstyled ms-2">
            <li><a href="/binife/forms/form_insertar_reserva.php">Añadir reserva</a></li>
            <li><a href="/binife/reservas.php">Ver reservas</a></li>
            <!-- <li>Subelemento 3</li> -->
          </ul>
        </li>
        <!-- <li>
          <a href="/binife/forms/form_alta_cliente.php">Alta cliente</a>
        </li> -->
        <li>
          <a href="/binife/tarifas.php"><i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;Tarifas</a>
        </li>
        <li>
          <a href="/binife/equipos.php"><i class="fa-solid fa-people-group"></i>&nbsp;Equipos</a>
        </li>
        <li>
          <a href="/binife/scraping.php"><i class="fa-solid fa-laptop-code"></i>&nbsp;Scraping</a>
        </li>
        
        <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tarifas
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Nueva tarifa</a></li>
          <li><a class="dropdown-item" href="/binife/forms/form_alta_tarifa.php">Alta de la tarifa</a></li>
          <li><a class="dropdown-item" href="#">Opción 3</a></li>
        </ul>
      </li>
        <li>
          <a href="#">Crear reserva</a>
        </li> -->
    </ul>
      </ul>
    </nav>
