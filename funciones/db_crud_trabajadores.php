<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $sql = "SELECT * FROM bini_trabajadores";

    $result = mysqli_query($conn, $sql);

    // Guardar el resultado en un array
    $trabajadores= mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo '<table class="table table-bordered text-center"><thead class="table-light">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">APELLIDOS</th>
        <th scope="col">ESTADO</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CONTRASEÑA</th>
        <th scope="col">TIPO</th>
        <th scope="col">OPCIONES</th>
    </tr>
    </thead>
    <tbody> ';
    foreach($trabajadores as $trabajador){
        if ($trabajador['tipo'] == "admin"){
            echo'<form action="#" method="get"><tr>
                <td>'.$trabajador['trabajador_id'].'</td>
                <td><input class="border-0 bg-white" name="nombre" value="'.$trabajador['nombre'].'"/></td> 
                <td><input class="border-0 bg-white" name="apellidos" value="'.$trabajador['apellidos'].'"/></td> 
                <td><input class="border-0 bg-white" name="estado" value="'.$trabajador['estado'].'"/></td>
                <td><input type="email" class="border-0 bg-white" name="email" value="'.$trabajador['email'].'"/></td>
                <td><input type="password" class="border-0 bg-white w-25" name="password" value="'.$trabajador['password'].'"/></td>
                <td><select required class="form-control" name="tipo" value="'.$trabajador['tipo'].'"><option value="admin">Administrador</option><option value="limpieza">Limpieza</option></select></td>
                <td><a href="funciones/db_update_trabajadores.php?id='.$trabajador['trabajador_id'].'&nombre='.$trabajador['nombre'].'&apellidos='.$trabajador['apellidos'].'&estado='.$trabajador['estado'].'&email='.$trabajador['email'].'&password='.$trabajador['password'].'&tipo='.$trabajador['tipo'].'" class="btn btn-info text-white me-2">Modificar</a><a href="funciones/db_delete_trabajador.php?id='.$trabajador['trabajador_id'].'" class="btn btn-danger">Eliminar</a></td> </form></tr>';
            ;
        }else{
            echo'<form action="#" method="get"><tr>
                <td>'.$trabajador['trabajador_id'].'</td>
                <td><input class="border-0 bg-white" name="nombre" value="'.$trabajador['nombre'].'"/></td> 
                <td><input class="border-0 bg-white" name="apellidos" value="'.$trabajador['apellidos'].'"/></td> 
                <td><input class="border-0 bg-white" name="estado" value="'.$trabajador['estado'].'"/></td>
                <td><input type="email" class="border-0 bg-white" name="email" value="'.$trabajador['email'].'"/></td>
                <td><input type="password" class="border-0 bg-white w-25" name="password" value="'.$trabajador['password'].'"/></td>
                <td><select required class="form-control" name="tipo" value="'.$trabajador['tipo'].'"><option value="admin">Administrador</option><option value="limpieza" selected>Limpieza</option></select></td>
                <td><a href="funciones/db_update_trabajadores.php?id='.$trabajador['trabajador_id'].'&nombre='.$trabajador['nombre'].'&apellidos='.$trabajador['apellidos'].'&estado='.$trabajador['estado'].'&email='.$trabajador['email'].'&password='.$trabajador['password'].'&tipo='.$trabajador['tipo'].'" class="btn btn-info text-white me-2">Modificar</a><a href="funciones/db_delete_trabajador.php?id='.$trabajador['trabajador_id'].'" class="btn btn-danger">Eliminar</a></td> </form></tr>';
            ;
        }
    }
    echo'</tbody></table>';
    

?>