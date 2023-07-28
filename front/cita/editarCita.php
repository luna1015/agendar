<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Cita</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="../js/cliente.js"></script>
	<script src="../js/servicio.js"></script>
	<script src="../js/esteticista.js"></script>
	<script src="js/actualizar.js"></script>
</head>	
<body>
	<div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
    </div>	
	<label class="tituloGeneral">Editar Cita</label>   
	<form action="../../back/cita/actualizar.php" method="post" class="estiloFormulario">
    <fieldset id="estiloFieldset">
        <legend>Información General</legend>        
		<div class="elementoFormulario">
			<label for="forCliente">Cliente:</label>
			<select id="id_cliente" name="id_cliente" class="form-cliente">
			</select>                  
		</div>	   
		<div class="elementoFormulario">
			<label for="forServicio">Servicio:</label>
			<select id="id_servicio" name="id_servicio" class="form-servicio">
		   </select>                  
		</div> 	   
		<div class="elementoFormulario">
			<label for="forEsteticista">Esteticista:</label>
			<select id="id_esteticista" name="id_esteticista" class="form-esteticista">
		   </select>                  
		</div>
		<div class="elementoFormulario">
			<label for="forFechaCita">Fecha Cita:</label>
				<input type="date" id="fechaCita" name="fechaCita" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forHoraInicioCita">Hora Inicio:</label>
				<input type="time" id="horaInicioCita" name="horaInicioCita" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forHoraFinCita">Hora Fin:</label>
				<input type="time" id="horaFinCita" name="horaFinCita" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forCostoCita">Costo Cita:</label>
			<input type="number" id="costoCita" name="costoCita" value="" required>
		</div>
		<div class="elementoFormulario">
			<label for="forEstadoCita">Activa:</label>
			<input type="radio" id="activoSi" name="activo" value="1" checked="checked">Si
			<input type="radio" id="activoNo" name="activo" value="0">No
		</div>
		<div class="botonFormulario">
			<input type="submit" value="Aceptar"> 
			<a href="listarCitas.php"><input type="button" value="Cancelar"></a>
		</div>
		<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>">
		<div class="form-msg"></div>
	</fieldset>
	</form>	
</body>
</html>
