<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';?>

<div id="content" class = "">
        <form class = "w-75 md-25 mx-auto p-5 forms">
            <h3><strong>Dar alta tarifa</strong></h3><br>
                    <div class ="col-md-6">
                    <div class="mb-3">
                    <label for="comercial" class="form-label">Concepto</label>
                    <input type="text" class="form-control" name ="comercial">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" name ="precio">
                    </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>