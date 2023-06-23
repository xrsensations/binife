<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/header_admin.php';?>
<main class="container-fluid w-100 mx-auto" >
    <div id="content">

        <h3>Añadir cliente</h3>
        <table class="table text-center">
            <form action="funciones/db_insert_trabajador.php" method="post">
                <tr>
                    <td class="pb-4">
                        <input required type="text" class="form-control" placeholder="Inserta un nombre" name="nombre">
                    </td>
                    <td>
                        <input required type="text" class="form-control" placeholder="Inserta apellidos" name="apellidos">
                    </td>
                    <td>
                        <input required type="email" class="form-control" placeholder="Inserta un email" name="email">
                    </td>
                    <td>
                        <input required type="password" class="form-control" placeholder="Inserta una contraseña" name="password">
                    </td>
                    <td>
                        <select required class="form-control" name="tipo">
                            <option value="admin">Administrador</option>
                            <option value="limpieza" selected>Limpieza</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-info text-white w-100">Añadir cliente</button>
                    </td>
                </tr>
            </form>
        </table>
    
        <?php include $_SERVER['DOCUMENT_ROOT'].'/binife/funciones/db_crud_trabajadores.php';?>

    </div>
  </div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/footer.php';?>