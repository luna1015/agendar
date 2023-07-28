<!DOCTYPE html>
<html>
<head>    
    <title>Detalle Cliente</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="js/detalle.js"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
    </div>
    <label class="tituloGeneral">Detalle Cliente</label>
   <form action="../../back/cliente/listar.php" method="post" class="estiloFormulario">
    <fieldset id="estiloFieldset">
        <legend>Información General</legend>
            <div class="elementoFormulario">
                <label for="forDocumento">Documento:</label>
				<input type="number" id="documento" name="documento" value="" readonly>
            </div>
			<div class="elementoFormulario">
                <label for="forTipoDocumento">Tipo Documento:</label>
                    <input type="text" id="tipoDocumento" name="tipoDocumento" value="" readonly>
            </div>
            <div class="elementoFormulario">
                <label for="forNombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="" readonly> 
            </div>
            <div class="elementoFormulario">
                <label for="forApellido">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="" readonly>
            </div>
            <div class="elementoFormulario">
                <label for="fechaNacimiento2">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" readonly>
            </div>
            <div class="elementoFormulario">
                <label for="forDireccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" value="" readonly>
            </div>
            <div class="elementoFormulario">
                <label for="forCelular">Celular:</label>
                    <input type="number" id="celular" name="celular" value="" readonly>
            </div>
            <div class="elementoFormulario">
                <label for="forEmail">Email:</label>
                    <input type="email" id="email" name="email" value="" readonly>
            </div>
            <div class="elementoFormulario">
                <label for="Foractivo">Activo:</label>
                <input type="radio" id="activoSi" name="activo" value="1" checked="checked" disabled>Si
                <input type="radio" id="activoNo" name="activo" value="0" disabled>No
            </div> 
            <div class="botonFormulario">
                <a href="listarClientes.php"><input type="button" value="Volver"></a>
            </div>
			<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>">
			<div class="form-msg"></div>
    </fieldset>
   </form>
</body>
</html>