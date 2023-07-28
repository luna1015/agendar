<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detalle Cita</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="js/detalle.js"></script>
</head>

<body>
	<div>
		<img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
	</div>
	
	<label class="tituloGeneral">Detalle Cita</label>
   
	<form action="../../back/cita/listar.php" method="post" class="estiloFormulario">
    <fieldset id="estiloFieldset">
        <legend>Información General</legend>
        <div class="elementoFormulario">
			<label for="ForCliente">Cliente</label>
			<input type="text" id="nombre_cliente" name="nombre_cliente" value="" readonly>	
		</div>
		<div class="elementoFormulario">
			<label for="ForServicio">Servicio</label>
			<input type="text" id="nombre_servicio" name="nombre_servicio" value="" readonly>	
		</div>
		<div class="elementoFormulario">
			<label for="Foresteticista">Esteticista</label>
			<input type="text" id="nombre_esteticista" name="nombre_esteticista" value="" readonly>	
		</div>
		<div class="elementoFormulario">
			<label for="forFechaCita">Fecha Cita:</label>
				<input type="date" id="fechaCita" name="fechaCita" value="" readonly>
		</div>
		<div class="elementoFormulario">
			<label for="forHoraInicioCita">Hora Inicio:</label>
				<input type="time" id="horaInicioCita" name="horaInicioCita" value="" readonly>
		</div>
		<div class="elementoFormulario">
			<label for="forHoraFinCita">Hora Fin:</label>
				<input type="time" id="horaFinCita" name="horaFinCita" value="" readonly>
		</div>
		<div class="elementoFormulario">
			<label for="forCostoCita">Costo Cita:</label>
			<input type="number" id="costoCita" name="costoCita" value="" readonly>
		</div>
		<div class="elementoFormulario">
			<label for="forEstadoCita">Activa:</label>
				<input type="radio" id="activoSi" name="activo" value="1" checked="checked" disabled>Si
				<input type="radio" id="activoNo" name="activo" value="0" disabled>No
		</div>
		<div class="botonFormulario">
			<a href="listarCitas.php"><input type="button" value="Volver"></a>
		</div>
		<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>">
		<div class="form-msg"></div>
	</fieldset>
	</form>	
</body>
</html>
