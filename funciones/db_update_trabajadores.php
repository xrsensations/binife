<form action="funciones/db_insert_trabajador.php" method="post">
                <tr>
                    <td class="pb-4">
                        <input required type="text" class="form-control" placeholder="Inserta un nombre" name="nombre" value="<?php echo $_GET['nombre']; ?>">
                    </td>
                    <td>
                        <input required type="text" class="form-control" placeholder="Inserta apellidos" name="apellidos" value="<?php echo $_GET['apellidos']; ?>">
                    </td>
                    <td>
                        <input required type="email" class="form-control" placeholder="Inserta un email" name="email" value="<?php echo $_GET['email']; ?>">
                    </td>
                    <td>
                        <input required type="password" class="form-control" placeholder="Inserta una contraseña" name="password" value="<?php echo $_GET['password']; ?>">
                    </td>
                    <td>
                        <select required class="form-control" name="tipo" value="<?php echo $_GET['tipo']; ?>">
                            <option value="admin">Administrador</option>
                            <?php if( $_GET['tipo']!="admin"){
                                echo "<option selected value='limpieza'>Limpieza</option>";
                            } else{
                                echo "<option value='limpieza'>Limpieza</option>";
                            } ?>
                            
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-info text-white w-100">Actualizar cliente</button>
                    </td>
                </tr>
            </form>