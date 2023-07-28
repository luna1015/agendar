async function cargarFormulario(ev) {
  // el formulario ya no enviará los datos, lo haremos nosotros mediante AJAX
  ev.preventDefault();
  // estamos enviando ya los datos?
  if (cargarFormulario.enviando) { return; }
  cargarFormulario.enviando = true;
  // obtenemos el formulario y la zona donde mostrar el resultado
  var form = document.querySelector("form");
  var result = document.querySelector(".form-msg");
  result.innerHTML = "Enviando, por favor espera...";
  // obtenemos los datos del formulario
  //var datos = new FormData(form);
  var datos = { 
				id_funcion: form.elements['id'].value
			};
  // preparamos la información de envio
  var init = {
    method: form.method,
    body: JSON.stringify(datos)
  };
  // petición ajax con fetch
  try {
    var response = await fetch(form.action.replace('actualizar','listar'), init);
    if (response.ok) {
      // obtenemos la respuesta del servidor web
      // se supone que el servidor nos responderá
      // si todo ha ido bien o no
      var respuesta = await response.json();
	  var mensaje = "";
      // asumimos que todo ha ido bien,
      // damos las gracias y limpiamos el formulario
	  if ( respuesta.length > 0 ) {
		  for (item of respuesta) {
			  form.elements['nombre'].value = item.nombre_funcion;
			  form.elements['descripcion'].value = item.descripcion_funcion;
			  form.elements['id_esteticista'].value = item.id_esteticista_fk;
			  form.elements['activo'].value = item.activo_funcion;
		  } // End for
		  mensaje = "Consulta exitosa.";
	  } else {
		  mensaje = "No hay resultados de la consulta.";
	  }
      result.innerHTML = mensaje;
    } else {
      throw new Error(response.statusText);
    }
  } catch (err) {
    result.innerHTML = "Error al enviar los datos del formulario: " + err.message;
  }
  // permitimos volver a enviar el formulario de nuevo
  cargarFormulario.enviando = false;
}

async function enviarFormulario(ev) {
  // el formulario ya no enviará los datos, lo haremos nosotros mediante AJAX
  ev.preventDefault();
  // estamos enviando ya los datos?
  if (enviarFormulario.enviando) { return; }
  enviarFormulario.enviando = true;
  // obtenemos el formulario y la zona donde mostrar el resultado
  var form = document.querySelector("form");
  var result = document.querySelector(".form-msg");
  result.innerHTML = "Enviando, por favor espera...";
  // obtenemos los datos del formulario
  //var datos = new FormData(form);
  var datos = { 
				id_funcion: form.elements['id'].value,
				nombre_funcion: form.elements['nombre'].value,
				descripcion_funcion: form.elements['descripcion'].value,
				id_esteticista_fk: form.elements['id_esteticista'].value,
				activo_funcion: form.elements['activo'].value
			};
  // preparamos la información de envio
  var init = {
    method: form.method,
    body: JSON.stringify(datos)
  };
  // petición ajax con fetch
  try {
    var response = await fetch(form.action, init);
    if (response.ok) {
      // obtenemos la respuesta del servidor web
      // se supone que el servidor nos responderá
      // si todo ha ido bien o no
      var respuesta = await response.json();
      // asumimos que todo ha ido bien,
      // damos las gracias y limpiamos el formulario
      result.innerHTML = respuesta.mensaje;
    } else {
      throw new Error(response.statusText);
    }
  } catch (err) {
    result.innerHTML = "Error al enviar los datos del formulario: " + err.message;
  }
  // permitimos volver a enviar el formulario de nuevo
  enviarFormulario.enviando = false;
}

document.addEventListener("DOMContentLoaded", function() {  
  window.addEventListener("load", cargarFormulario);
  document.querySelector("form").addEventListener("submit", enviarFormulario);
});