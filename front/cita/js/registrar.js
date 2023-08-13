function fechaActualFormateada(ev) {
	var form = document.querySelector("form");
	var f = new Date();
	var fechaFormateada = f.getFullYear() + "-" + ("0" + (f.getMonth() + 1)).slice(-2) + "-" + ("0" + (f.getDate())).slice(-2);
	form.elements['fechaCita'].value = fechaFormateada;
	form.elements['fechaCita'].min = fechaFormateada;
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
  var datos1 = { 
				id_esteticista_fk: form.elements['id_esteticista'].value,
				fecha_cita: form.elements['fechaCita'].value,
				hora_inicio_cita: form.elements['horaInicioCita'].value
			};
  // preparamos la información de envio
  var init1 = {
    method: form.method,
    body: JSON.stringify(datos1)
  };
  // petición ajax con fetch
  try {
	if (form.elements['id_cliente'].value == '_' 
		|| form.elements['id_servicio'].value == '_'  
		|| form.elements['id_esteticista'].value == '_') {
		result.innerHTML = "Error al enviar los datos del formulario: Debe seleccionar un cliente, servicio y esteticista.";
	} else if ( parseInt(form.elements['horaInicioCita'].value.replace(':','')) > 
				parseInt(form.elements['horaFinCita'].value.replace(':','')) ) {
		result.innerHTML = "La hora de finalización de la cita debe ser mayor a la hora de inicio. ";
	} else {
		var response1 = await fetch(form.action.replace('registrar','listar'), init1);
		if (response1.ok) {
			var respuesta1 = await response1.json();
			if ( respuesta1.length > 0 ) {
				result.innerHTML = "No hay disponibilidad con la esteticista en esa fecha y hora registrada.";
			} else {
				var datos = { 
							fecha_cita: form.elements['fechaCita'].value,
							hora_inicio_cita: form.elements['horaInicioCita'].value,
							hora_fin_cita: form.elements['horaFinCita'].value,
							id_cliente_fk: form.elements['id_cliente'].value,
							id_servicio_fk: form.elements['id_servicio'].value,
							id_esteticista_fk: form.elements['id_esteticista'].value,
							costo_cita: form.elements['costoCita'].value,
							estado_cita: form.elements['activo'].value,
							eliminado_cita: 0
						};
			    // preparamos la información de envio
			    var init = {
				  method: form.method,
				  body: JSON.stringify(datos)
			    };
				var response = await fetch(form.action, init);
				if (response.ok) {
				  // obtenemos la respuesta del servidor web
				  // se supone que el servidor nos responderá
				  // si todo ha ido bien o no
				  var respuesta = await response.json();
				  // asumimos que todo ha ido bien,
				  // damos las gracias y limpiamos el formulario
				  result.innerHTML = respuesta.mensaje;
				  form.reset();
				} else {
				  throw new Error(response.statusText);
				}
			}
		} else {
		  throw new Error(response.statusText);
		}
	}
  } catch (err) {
    result.innerHTML = "Error al enviar los datos del formulario: " + err.message;
  }
  // permitimos volver a enviar el formulario de nuevo
  enviarFormulario.enviando = false;
}

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("load", fechaActualFormateada);
  document.querySelector("form").addEventListener("submit", enviarFormulario);
});