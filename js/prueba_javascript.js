var body = document.getElementsByTagName('body')[0];

// Obtener todas las tablas dentro del elemento body
var tabla = "";
var tablas = body.getElementsByTagName('table');

// Verificar que exista al menos una tabla
if (tablas.length >= 2) {
  // Obtener la segunda tabla (índice 1)
  tabla = tablas[1];
}

// Obtener todos los elementos 'tr' dentro de la tabla
var filas = tabla.getElementsByTagName('tr');

// Crear un array para almacenar los elementos 'tr' seleccionados
var arrayFilasSeleccionadas = [];

var encontrarVivienda = false;

// Recorrer las filas y seleccionar los elementos 'tr' entre los 'tr' que contienen "vivienda"
for (var i = 0; i < filas.length; i++) {
  var contenido = filas[i].innerText.toLowerCase(); // Convertir a minúsculas para realizar una comparación sin distinción de mayúsculas y minúsculas

  if (contenido.includes('vivienda')) {
    encontrarVivienda = !encontrarVivienda; // Cambiar el estado de encontrarVivienda
    continue; // Saltar a la siguiente iteración
  } else if (contenido.trim() === "") {
    if (encontrarVivienda) {
      break;
    }
  }

  if (encontrarVivienda && contenido.trim() !== "" && !contenido.includes('vivienda')) {
    arrayFilasSeleccionadas.push(filas[i]);
  }
}

// Ahora puedes utilizar el arrayFilasSeleccionadas como desees
console.log(arrayFilasSeleccionadas);
