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