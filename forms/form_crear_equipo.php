<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';
?>

<div id="content" class = "">
        <form action ="/binife/funciones/db_insert_equipo.php" class = "w-75 md-25 mx-auto p-5 forms" method = "POST">
            <h3><strong>Crea un nuevo equipo</strong></h3><br>
                    
                    <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name ="descripcion">
                    </div>  
                    <input type="submit" class="btn btn-primary" value = "Crear"/>
        </form>
    </div>
</div>
<!-- </div> -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>