<!DOCTYPE html>
<html>
    <head>
        <title>Detalle Usuario</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<script src="js/detalle.js"></script>
        <meta charset="utf-8"/>
    </head>
<body>
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>    
    </div>
    <label class="tituloGeneral">Detalle Usuario</label>

        <form action="../../back/usuario/listar.php" method="post" class="estiloFormulario">
            <fieldset id="estiloFieldset">
                <legend>Información General</legend>                
                <div class="elementoFormulario">
					<label for="forNombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" value="" readonly>
				</div>
				<div class="elementoFormulario">
					<label for="forApellidos">Apellidos:</label>
					<input type="text" id="apellidos" name="apellidos" value="" readonly>     
				</div>
				<div class="elementoFormulario">
					<label for="forUsuario">Usuario:</label>
					<input type="text" id="usuario" name="usuario" value="" readonly>
				</div>
				<div class="elementoFormulario">
					<label for="forContrasena">Contraseña:</label>
					<input type="password" id="contrasena" name="contrasena" value="" readonly>
				</div>
				<div class="elementoFormulario">
					<label for="forRol">Rol</label>
                    <input type="text" id="nombre_rol" name="nombre_rol" value="" readonly>	
				</div>
                <div class="elementoFormulario">
                    <label for="Foractivo">Activo:</label>
                    <input type="radio" id="activoSi" name="activo" value="1" checked="checked" disabled>Si
                    <input type="radio" id="activoNo" name="activo" value="0" disabled>No
                </div> 
                <div class="botonFormulario">
                    <a href="listarUsuarios.php"><input type="button" value="Volver"></a>
                </div>
				<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>">
				<div class="form-msg"></div>
            </fieldset>       
        </form>
</body>    
</html>