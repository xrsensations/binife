<?php
// Realizar la solicitud HTTP
$url = 'https://taovisual.com/binife/tabla.html';
$html = file_get_contents($url);

// Crear un objeto DOMDocument y cargar el HTML
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

// Encontrar los elementos <b> dentro del <tbody>
$bElements = [];
$tbody = $dom->getElementsByTagName('tbody')->item(0);
$elements = $tbody->getElementsByTagName('b');
foreach ($elements as $element) {
    $bElements[] = $element->nodeValue;
}

// Imprimir los elementos <b>
echo '<pre>';
print_r($bElements);
echo '</pre>';

// Realizar el web scraping y obtener los datos en $bElements

// Generar el contenido HTML para mostrar los datos
?>