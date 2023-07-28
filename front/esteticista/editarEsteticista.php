<!DOCTYPE html>
<html>
<head>    
    <title>Editar Esteticista</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="js/actualizar.js"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
    </div>
    <label class="tituloGeneral">Editar Esteticista</label>
   <form action="../../back/esteticista/actualizar.php" method="post" class="estiloFormulario">
    <fieldset id="estiloFieldset">
        <legend>Información General</legend>
        <div class="elementoFormulario">
            <label for="forDocumento">Documento:</label>
			<input type="number" id="documento" name="documento" value="" required>
        </div>
		<div class="elementoFormulario">
			<label for="forTipoDocumento">Tipo Documento:</label>
				<input type="text" id="tipoDocumento" name="tipoDocumento" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forNombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" value="" required> 
		</div>
		<div class="elementoFormulario">
			<label for="forApellido">Apellidos:</label>
			<input type="text" id="apellidos" name="apellidos" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="fechaNacimiento2">Fecha de Nacimiento:</label>
			<input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forDireccion">Dirección:</label>
				<input type="text" id="direccion" name="direccion" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forCelular">Celular:</label>
				<input type="number" id="celular" name="celular" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forEmail">Email:</label>
				<input type="email" id="email" name="email" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="Foractivo">Activo:</label>
			<input type="radio" id="activoSi" name="activo" value="1" checked="checked">Si
			<input type="radio" id="activoNo" name="activo" value="0">No
		</div> 
		<div class="botonFormulario">
			<input type="submit" value="Aceptar">  
			<a href="listarEsteticistas.php"><input type="button" value="Cancelar"></a>
		</div>
		<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>">
		<div class="form-msg"></div>
    </fieldset>
   </form>
</body>
</html>