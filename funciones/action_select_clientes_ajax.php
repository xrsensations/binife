<?php


// Realizar la consulta en base a los valores recibidos
// Aquí debes escribir tu consulta específica en PHP para obtener los resultados filtrados
$filtro = $_POST['filtro'];
$busqueda = $_POST['busqueda'];
echo $busqueda;
// Ejemplo de consulta
include $_SERVER['DOCUMENT_ROOT'].'/binife/templates/connection.php';
$sql = "SELECT * FROM bini_clientes WHERE nombre_comercial LIKE '$busqueda%'";
if (!empty($filtro)) {
    $sql .= " AND opcion = '$filtro'";
}

// Ejecutar la consulta y obtener los resultados
$resultado = $conexion->query($sql);

// Generar el HTML de los resultados
$html = '';

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $html .= '<div>' . $fila['nombre_comercial'] . 'hola</div>';
    }
} else {
    $html = 'No se encontraron clientes';
}


echo $html;


?>