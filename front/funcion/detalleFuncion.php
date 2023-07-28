<!DOCTYPE html>
<html>
    <head>
        <title>Detalle Función</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<script src="js/detalle.js"></script>
        <meta charset="utf-8"/>
    </head>
<body>
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>    
    </div>
    <label class="tituloGeneral">Detalle Función</label>

        <form action="../../back/funcion/listar.php" method="post" class="estiloFormulario">
            <fieldset id="estiloFieldset">
                <legend>Información General</legend>                
                <div class="elementoFormulario">
                    <label for="Fornombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="" readonly>
                </div>
                <div class="elementoFormulario textoAlinear">
                    <label for="Fordescripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" cols="34" rows="4" readonly></textarea>
                </div>
				<div class="elementoFormulario">
					<label for="Foresteticista">Esteticista</label>
                    <input type="text" id="nombre_esteticista" name="nombre_esteticista" value="" readonly>	
				</div>
                <div class="elementoFormulario">
                    <label for="Foractivo">Activo:</label>
                    <input type="radio" id="activoSi" name="activo" value="1" checked="checked" disabled>Si
                    <input type="radio" id="activoNo" name="activo" value="0" disabled>No
                </div> 
                <div class="botonFormulario">
                    <a href="listarFunciones.php"><input type="button" value="Volver"></a>
                </div>
				<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>">
				<div class="form-msg"></div>
            </fieldset>       
        </form>
</body>    
</html>