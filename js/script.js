$(document).ready(function () {
    $("#sidebarCollapse").on("click", function () {
      $("#sidebar").toggleClass("active");
    });
  });


function mostrarHospedaje(id_cliente){
  select = document.getElementById("select_hospedaje")
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200){
        select.innerHTML = xmlhttp.responseText;
        select.disabled = false;
      };
  };
  xmlhttp.open("POST", "../funciones/action_ver_hospedajes.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send('id=' + id_cliente);
  return;
  
}  

function actualizarSalida(entrada){
  salida = document.getElementById("fechaSalida")
  salida.disabled = false;
  var date = new Date(entrada);
  date.setDate(date.getDate() + 1);
  salida.min = date.toLocaleDateString('en-CA');
  salida.value = date.toLocaleDateString('en-CA');
  salida.focus();
}  

<<<<<<< HEAD
function toggleDropdown() {
  var dropdown = document.querySelector('.dropdown-content');
  dropdown.classList.toggle('show');
}
=======
function toggleDropdown(span) {
  var ul = span.nextElementSibling;
  console.log(ul);
  ul.classList.toggle('show');
}

$(document).ready(function() {
  // Cuando se cambia la opción del campo select o se escribe en el campo de búsqueda
  $('#filtro, #busqueda').on('change keyup', function() {
    var filtro = $('#filtro').val();
    var busqueda = $('#busqueda').val();
    // Realizar la petición Ajax
    $.ajax({
      url: '../funciones/action_select_clientes_ajax.php',
      method: 'POST',
      data: { filtro: filtro, busqueda: busqueda },
      success: function(response) {
        $('#resultado').html(response);
      }
    });
  });
});
>>>>>>> d05dc20 (albaran)
