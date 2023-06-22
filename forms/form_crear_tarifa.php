<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';

include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';

$sql = "SELECT * FROM bini_clientes";    
$result = mysqli_query($conn, $sql);

?>

<div id="content" class = "">
        <form action ="/binife/funciones/db_insert_tarifa.php" class = "w-75 md-25 mx-auto p-5 forms" method = "POST">
            <h3><strong>Crea una nueva tarifa</strong></h3><br>
                    
                    <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name ="descripcion">
                    </div>  
                    <div class="mb-3">
                        <select class="form-control" name ="cliente" required> 
                                <option hidden disabled selected> - Elige un cliente - </option>
                                <?php                               
                                foreach($result as $cliente){
                                    echo'<option value="'.$cliente['cliente_id'].'">'.$cliente['nombre_comercial'].'</option>';
                                }
                                ?>
                        </select>
                    </div>  
                    <div class="mb-3">
                    <label for="fecha_inicio" class="form-label">Fecha inicio</label>
                    <input type="date" class="form-control" name ="fecha_inicio">
                    </div>  
                    <div class="mb-3">
                    <label for="fecha_final" class="form-label">Fecha final</label>
                    <input type="date" class="form-control" name ="fecha_final">
                    </div>  
                    <input type="submit" class="btn btn-primary" value = "Crear"/>
        </form>
    </div>
</div>
<!-- </div> -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>