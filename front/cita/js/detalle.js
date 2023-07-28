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
				id_cita: form.elements['id'].value
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
	  var mensaje = "";
      // asumimos que todo ha ido bien,
      // damos las gracias y limpiamos el formulario
	  if ( respuesta.length > 0 ) {
		  for (item of respuesta) {
			  form.elements['fechaCita'].value = item.fecha_cita;
			  form.elements['horaInicioCita'].value = item.hora_inicio_cita;
			  form.elements['horaFinCita'].value = item.hora_fin_cita;
			  form.elements['costoCita'].value = item.costo_cita;
			  form.elements['nombre_cliente'].value = item.nombre_cliente+" "+item.apellidos_cliente;
			  form.elements['nombre_servicio'].value = item.nombre_servicio;
			  form.elements['nombre_esteticista'].value = item.nombre_esteticista+" "+item.apellidos_esteticista;
			  form.elements['activo'].value = item.estado_cita;
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

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("load", cargarFormulario);
});