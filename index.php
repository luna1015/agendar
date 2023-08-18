<?php

session_id("sisas");
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ingreso Usuario</title>
    <link rel="stylesheet" type="text/css" href="front/css/style.css" />
	<script src="front/js/inicioSesion.js"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <div>
        <img src="front/imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
    </div>
    <label class="tituloGeneral">Ingreso Usuario</label>

        <form action="front/menu.php" method="post" class="estiloFormulario">
            <fieldset id="estiloFieldset">
                <legend>Datos Acceso</legend>
                <div class="elementoFormulario">
                    <label for="forUsuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" value="" required> 
                </div>
                <div class="elementoFormulario">
                    <label for="forContrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" value="" required>
					<input type="hidden" id="token" name="token" value=""> 
                </div>
                <div class="botonFormulario">
                    <input type="submit" value="Aceptar">
                </div>
				<div class="form-msg"></div>
            </fieldset>
        </form>
</body>
</html>