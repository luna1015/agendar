<!DOCTYPE html>
<html>
    <head>
        <title>Editar Función</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<script src="../js/cliente.js"></script>
		<script src="../js/servicio.js"></script>
		<script src="../js/esteticista.js"></script>
		<script src="js/actualizar.js"></script>
        <meta charset="utf-8"/>
    </head>
<body>
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>    
    </div>
    <label class="tituloGeneral">Editar Función</label>
        <form action="../../back/funcion/actualizar.php" method="post" class="estiloFormulario">
            <fieldset id="estiloFieldset">
                <legend>Información General</legend>                
                <div class="elementoFormulario">
                    <label for="Fornombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="">
                </div>
                <div class="elementoFormulario textoAlinear">
                    <label for="Fordescripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" cols="34" rows="4"></textarea>
                </div>
				<div class="elementoFormulario">
					<label for="forEsteticista">Esteticista:</label>
					<select id="id_esteticista" name="id_esteticista" class="form-esteticista">
				   </select>                  
			   </div> 
                <div class="elementoFormulario">
                    <label for="Foractivo">Activo:</label>
                    <input type="radio" id="activoSi" name="activo" value="1" checked="checked">Si
                    <input type="radio" id="activoNo" name="activo" value="0">No
                </div> 
                <div class="botonFormulario">
                    <input type="submit" value="Aceptar"> 
                    <a href="listarFunciones.php"><input type="button" value="Cancelar"></a>
                </div>
				<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>">
				<div class="form-msg"></div>
            </fieldset>       
        </form>
</body>    
</html>