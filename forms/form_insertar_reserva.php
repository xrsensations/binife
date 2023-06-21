<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';?>

<?php

    //connection to database
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';

    $sql = "SELECT * FROM bini_clientes";    
    $result = mysqli_query($conn, $sql);

?>

<div id="content" class = "">
    <div class = "row">
        <form class = "w-75 md-25 mx-auto p-5 forms">
            <h3><strong>Añadir una nueva reserva</strong></h3><br>
            <div class = "row">
                    <div class ="w-100">
                        <div class="d-flex w-100">
                            <div class="mb-3 w-50 me-2">
                            <label for="cliente" class="form-label">Cliente</label>
                            <select class="form-control" name ="cliente" required> 
                                <option hidden disabled selected> - Elige un cliente - </option>
                                <?php                               
                                foreach($result as $cliente){
                                    echo'<option value="'.$cliente['cliente_id'].'">'.$cliente['nombre_comercial'].'</option>';
                                }
                                ?>
                            </select>
                            </div>
                            <div class="mb-3 w-50">
                                <label for="hospedaje" class="form-label">Hospedaje</label>
                                <select class="form-control" name ="customer" disabled> 
                                    
                                </select>
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <div class="mb-3 w-50 me-2">
                                <label for="direccion" class="form-label">Fecha de entrada</label>
                                <input type="date" class="form-control" name="entrada" min="<?= date('Y-m-d'); ?>" value="<?= date('Y-m-d'); ?>">
                            </div>
                            <div class="mb-3 w-50">
                                <label for="postal" class="form-label">Fecha de salida</label>
                                <input type="date" class="form-control" name="salida" min="<?= date('Y-m-d'); ?>" value="<?= date('Y-m-d'); ?>">
                            </div>
                        </div>
                    <div class="mb-3">
                        <label for="personas" class="form-label">Personas</label>
                        <input type="number" class="form-control" name ="personas">
                    </div>
                    <div class="mb-3"> 
                        <label for="comentarios" class="form-label">Comentarios</label>
                        <textarea class="form-control" name ="comentarios"></textarea>
                    </div>
                </div>          
            </div>
            

            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>