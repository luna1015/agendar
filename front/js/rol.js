async function cargarRol(ev) {
  // el formulario ya no enviará los datos, lo haremos nosotros mediante AJAX
  ev.preventDefault();
  // estamos enviando ya los datos?
  if (cargarRol.enviando) { return; }
  cargarRol.enviando = true;
  // obtenemos el formulario y la zona donde mostrar el resultado
  var form = document.querySelector("form");
  var result = document.querySelector(".form-rol");
  result.innerHTML = "Enviando, por favor espera...";
  // obtenemos los datos del formulario
  //var datos = new FormData(form);
  var datos = { 
				activo_rol: 1,
				eliminado_rol: 0				
			};
  // preramos la información de envio
  var init = {
    method: form.method,
    body: JSON.stringify(datos)
  };
  var action = "../../back/rol/listar.php";
  // petición ajax con fetch
  try {
    var response = await fetch(action, init);
    if (response.ok) {
      // obtenemos la respuesta del servidor web
      // se supone que el servidor nos responderá
      // si todo ha ido bien o no
      var respuesta = await response.json();
	  var filas = "";
      // asumimos que todo ha ido bien,
      // damos las gracias y limpiamos el formulario
	  if ( respuesta.length > 0 ) {
		  filas += "<option value='_'>--Seleccionar--</option> ";
		  for (item of respuesta) {			  
			  filas += "<option ";
			  filas += "value='"+item.id_rol+"'>";
			  filas += item.nombre_rol;
			  filas += "</option>";
		  } // End for
	  } else {
		  filas += "No hay resultados de la consulta.";
	  }
      result.innerHTML = filas;
    } else {
      throw new Error(response.statusText);
    }
  } catch (err) {
    result.innerHTML = "Error al enviar los datos del formulario: " + err.message;
  }
  // permitimos volver a enviar el formulario de nuevo
  cargarRol.enviando = false;
}

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("load", cargarRol);
});