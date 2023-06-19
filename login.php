<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header.php';?>
<!--====== SIGNIN ONE PART START ======-->
<form class = "mx-auto p-5 forms" method = "POST">
   <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" name = "email" id="exampleInputEmail1">
      <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
   </div>
   <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Contraseña</label>
         <input type="password" class="form-control" name = "password" id="exampleInputPassword1">
   </div>
   
   <button type="submit" name = "submit" class="btn btn-primary">Iniciar sesión</button>
</form>
<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/action_log_in.php';?>

</body>
</html>