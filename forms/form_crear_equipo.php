<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';?>

<div id="content" class = "">
        <form class = "w-75 md-25 mx-auto p-5 forms">
            <h3><strong>Crea un nuevo equipo</strong></h3><br>
                    
                    <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name ="descripcion">
                    </div>  
                    <button type="submit" class="btn btn-primary" name = "crear">Crear</button>
        </form>
    </div>
</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>