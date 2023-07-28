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
				nombre_usuario: form.elements['nombre'].value,
				apellidos_usuario: form.elements['apellidos'].value,
				user_usuario: form.elements['usuario'].value,
				password_usuario: form.elements['contrasena'].value,
				id_rol_fk: form.elements['id_rol'].value,
				activo_usuario: form.elements['activo'].value,
				eliminado_usuario: 0
			};
  // preparamos la información de envio
  var init = {
    method: form.method,
    body: JSON.stringify(datos)
  };
  // petición ajax con fetch
  try {
	if (form.elements['id_rol'].value == '_') {
		result.innerHTML = "Error al enviar los datos del formulario: Debe seleccionar un rol.";
	} else {
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
  } catch (err) {
    result.innerHTML = "Error al enviar los datos del formulario: " + err.message;
  }
  // permitimos volver a enviar el formulario de nuevo
  enviarFormulario.enviando = false;
}

document.addEventListener("DOMContentLoaded", function() {
  document.querySelector("form").addEventListener("submit", enviarFormulario);
});