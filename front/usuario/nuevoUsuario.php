<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Usuario</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="../js/rol.js"></script>
	<script src="js/registrar.js"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
    </div>
    <label class="tituloGeneral">Nuevo Usuario</label>

        <Form action="../../back/usuario/registrar.php" method="post" class="estiloFormulario">
            <fieldset id="estiloFieldset">
                <legend>Información General</legend>
                <div class="elementoFormulario">
					<label for="forNombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" value="" required>
				</div>
				<div class="elementoFormulario">
					<label for="forApellidos">Apellidos:</label>
					<input type="text" id="apellidos" name="apellidos" value="" required>     
				</div>
				<div class="elementoFormulario">
					<label for="forUsuario">Usuario:</label>
					<input type="text" id="usuario" name="usuario" value="" required>
				</div>
				<div class="elementoFormulario">
					<label for="forContrasena">Contraseña:</label>
					<input type="password" id="contrasena" name="contrasena" value="" required>
				</div>
				<div class="elementoFormulario">
					<label for="forRol">Rol:</label>
					<select id="id_rol" name="id_rol" class="form-rol">
				   </select>                  
				</div>
                <div class="elementoFormulario">
                    <label for="Foractivo">Activo:</label>
                    <input type="radio" id="activoSi" name="activo" value="1" checked="checked">Si
                    <input type="radio" id="activoNo" name="activo" value="0">No
                </div> 
                <div class="botonFormulario">
                <input type="submit" value="Aceptar">  
                <a href="listarUsuarios.php"><input type="button" value="Cancelar"></a>
               </div>
				<div class="form-msg"></div>
            </fieldset>
        </Form>
</body>
</html>