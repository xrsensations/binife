<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';?>

<div id="content" class = "">
   
        <form class = "w-75 md-25 mx-auto p-5 forms">
            <h3><strong>Da de alta a un nuevo cliente</strong></h3><br>
                    <div class ="col-md-6">
                    <div class="mb-3">
                    <label for="comercial" class="form-label">Nombre comercial</label>
                    <input type="text" class="form-control" name ="comercial">
                    </div>
                    <div class="mb-3">
                        <label for="fiscal" class="form-label">Nombre fiscal</label>
                        <input type="text" class="form-control" name ="fiscal">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name ="direccion">
                    </div>  
                    <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>