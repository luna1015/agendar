<!DOCTYPE html>
<html>
<head>
    <title>Crear Rol</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="js/registrar.js"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
    </div>
    <label class="tituloGeneral">Crear Rol</label>

        <form action="../../back/rol/registrar.php" method="post" class="estiloFormulario">
            <fieldset id="estiloFieldset">
                <legend>Información General</legend>
                <div class="elementoFormulario">
                    <label for="forNombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="" required> 
                </div>
                <div class="elementoFormulario textoAlinear">
                    <label for="Fordescripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" cols="34" rows="4"></textarea>     
                </div>
                <div class="elementoFormulario">
                    <label for="Foractivo">Activo:</label>
                    <input type="radio" id="activoSi" name="activo" value="1" checked="checked">Si
                    <input type="radio" id="activoNo" name="activo" value="0">No
                </div> 
                <div class="botonFormulario">
                    <input type="submit" value="Aceptar">  
                    <a href="listarRoles.php"><input type="button" value="Cancelar"></a>
                </div>
				<div class="form-msg"></div>
            </fieldset>
        </form>
</body>
</html>