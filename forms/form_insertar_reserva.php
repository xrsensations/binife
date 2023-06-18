<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';?>

<div id="content" class = "">
    <div class = "row">
        <form class = "w-75 md-25 mx-auto p-5 forms">
            <h3><strong>Da de alta a un nuevo cliente</strong></h3><br>
            <div class = "row">
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
                    <div class="mb-3">
                        <label for="postal" class="form-label">Código postal</label>
                        <input type="text" class="form-control" name ="postal">
                    </div>
                    <div class="mb-3">
                    <label for="poblacion" class="form-label">Población</label>
                    <input type="text" class="form-control" name ="poblacion">
                    </div>
                </div>
                <div class ="col-md-6">
                        <div class="mb-3">
                            <label for="provincia" class="form-label">Província</label>
                            <input type="text" class="form-control" name ="provincia">
                        </div>
                        <div class="mb-3">
                            <label for="pais" class="form-label">País</label>
                            <input type="text" class="form-control" name ="pais">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name ="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <!--<div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>-->
                </div>
            
            </div>
            

            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>