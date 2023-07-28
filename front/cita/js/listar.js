function eliminarRegistro(id) {
	var estaSeguro = confirm("¿Esta seguro de eliminar el registro?");
	if (estaSeguro) {
		cargarFormulario(id);
	}
	return false;
}

async function cargarFormulario(idElement) {
  // estamos enviando ya los datos?
  if (cargarFormulario.enviando) { return; }
  cargarFormulario.enviando = true;
  // obtenemos el formulario y la zona donde mostrar el resultado
  var form = document.querySelector("form");
  var result = document.querySelector(".form-msg");
  var datos = { 
				id_cita: idElement,
				eliminado_cita: 1
			};
  // preparamos la información de envio
  var init = {
    method: form.method,
    body: JSON.stringify(datos)
  };
  // petición ajax con fetch
  try {
    var response = await fetch(form.action.replace('listar','actualizar'), init);
    if (response.ok) {
      listarSinFiltro();
    } else {
      throw new Error(response.statusText);
    }
  } catch (err) {
    result.innerHTML = "Error al enviar los datos del formulario: " + err.message;
  }
  // permitimos volver a enviar el formulario de nuevo
  cargarFormulario.enviando = false;
}

async function listarSinFiltro() {
  // estamos enviando ya los datos?
  if (listarSinFiltro.enviando) { return; }
  listarSinFiltro.enviando = true;
  // obtenemos el formulario y la zona donde mostrar el resultado
  var form = document.querySelector("form");
  var result = document.querySelector(".form-msg");
  result.innerHTML = "Enviando, por favor espera...";
  // obtenemos los datos del formulario
  //var datos = new FormData(form);
  var datos = { 
				eliminado_cita: 0
				
			};
  // preramos la información de envio
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
	  var filas = "";
      // asumimos que todo ha ido bien,
      // damos las gracias y limpiamos el formulario
	  if ( respuesta.length > 0 ) {
		  for (item of respuesta) {
			  filas += "<tr bgcolor='#f9f9f9'>";
			  filas += "<td>"+item.nombre_cliente+" "+item.apellidos_cliente+"</td>";
			  filas += "<td>"+item.nombre_servicio+"</td>";
			  filas += "<td>"+item.fecha_cita+" "+item.hora_inicio_cita+"</td>";
			  filas += "<td align='center'>";
			  filas += "<a href='detalleCita.php?id="+item.id_cita+"'><img src='../imagen/detalle.png'></a>";
			  filas += "<a href='editarCita.php?id="+item.id_cita+"'><img src='../imagen/editar.png'></a>";
			  filas += "<a href='' onclick='return eliminarRegistro("+item.id_cita+")'>";
			  filas += "<img src='../imagen/eliminar.png'></a>";
			  filas += "</td>";
			  filas += "</tr>";
		  } // End for
	  } else {
		  filas += "<tr><td align='center' colspan='4'>No hay resultados de la consulta.</td></tr>";
	  }
      result.innerHTML = filas;
    } else {
      throw new Error(response.statusText);
    }
  } catch (err) {
    result.innerHTML = "Error al enviar los datos del formulario: " + err.message;
  }
  // permitimos volver a enviar el formulario de nuevo
  listarSinFiltro.enviando = false;
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
				id_cliente: form.elements['id_cliente'].value,
				id_servicio: form.elements['id_servicio'].value,
				id_esteticista: form.elements['id_esteticista'].value,
				fecha_cita: form.elements['fechaCita'].value,
				hora_inicio_cita: form.elements['horaInicioCita'].value,
				estado_cita: form.elements['activo'].value,
				eliminado_cita: 0
				
			};
  // preramos la información de envio
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
	  var filas = "";
      // asumimos que todo ha ido bien,
      // damos las gracias y limpiamos el formulario
	  if ( respuesta.length > 0 ) {
		  for (item of respuesta) {
			  filas += "<tr bgcolor='#f9f9f9'>";
			  filas += "<td>"+item.nombre_cliente+" "+item.apellidos_cliente+"</td>";
			  filas += "<td>"+item.nombre_servicio+"</td>";
			  filas += "<td>"+item.fecha_cita+" "+item.hora_inicio_cita+"</td>";
			  filas += "<td align='center'>";
			  filas += "<a href='detalleCita.php?id="+item.id_cita+"'><img src='../imagen/detalle.png'></a>";
			  filas += "<a href='editarCita.php?id="+item.id_cita+"'><img src='../imagen/editar.png'></a>";
			  filas += "<a href='' onclick='return eliminarRegistro("+item.id_cita+")'>";
			  filas += "<img src='../imagen/eliminar.png'></a>";
			  filas += "</td>";
			  filas += "</tr>";
		  } // End for
	  } else {
		  filas += "<tr><td align='center' colspan='4'>No hay resultados de la consulta.</td></tr>";
	  }
      result.innerHTML = filas;
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
  window.addEventListener("load", enviarFormulario);
  document.querySelector("form").addEventListener("submit", enviarFormulario);
});