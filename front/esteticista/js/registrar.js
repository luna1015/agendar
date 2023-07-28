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
				numero_documento_esteticista: form.elements['documento'].value,
				tipo_documento_esteticista: form.elements['tipoDocumento'].value,
				nombre_esteticista: form.elements['nombre'].value,
				apellidos_esteticista: form.elements['apellidos'].value,
				fecha_nacimiento_esteticista: form.elements['fechaNacimiento'].value,
				direccion_esteticista: form.elements['direccion'].value,
				celular_esteticista: form.elements['celular'].value,
				email_esteticista: form.elements['email'].value,				
				activo_esteticista: form.elements['activo'].value,
				eliminado_esteticista: 0
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
      form.reset();
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
  document.querySelector("form").addEventListener("submit", enviarFormulario);
});