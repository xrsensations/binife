<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';?>


<div id="content" class = "">
        <form action ="/binife/funciones/db_insert_albaran.php" class = "w-75 md-25 mx-auto p-5 forms" method = "POST">
            <h3><strong>Crea un nuevo equipo</strong></h3><br>
                    
                    <div class="mb-3">
                    <select id="filtro">
                        <option value="">Todos</option>
                        <option value="opcion1">Opción 1</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
                    <input type="text" id="busqueda" placeholder="Escribe aquí para filtrar">

                    <div id="resultado"></div>
                    </div>  
                    <input type="submit" class="btn btn-primary" value = "Crear"/>
        </form>
    </div>
</div>
<!-- </div> -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>