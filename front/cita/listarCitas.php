<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado de Citas</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="../js/cliente.js"></script>
	<script src="../js/servicio.js"></script>
	<script src="../js/esteticista.js"></script>
	<script src="js/listar.js"></script>	
</head>
<body>
	<div>
		<img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
	</div>	
	<label class="tituloGeneral">Listado de Citas</label>
	<div class="menuPrincipal"><a href="../menu.php">Menú Principal</a></div>
	
	<form action="../../back/cita/listar.php" method="post" class="estiloFormulario">
	<fieldset>
		<legend>Filtro de Consulta</legend>		
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
				<input type="date" id="fechaCita" name="fechaCita" value=""> 
		</div>		
		<div class="elementoFormulario">
			<label for="forHoraInicioCita">Hora Inicio:</label>
			<input type="time" id="horaInicioCita" name="horaInicioCita" value="">
		</div>		
		<div class="elementoFormulario">
			<label for="forActivo">Activa:</label>
			<input type="radio" id="activoSi" name="activo" value="1" checked="checked">Si
			<input type="radio" id="activoNo" name="activo" value="0">No
			<div class="spaceLarge"></div>
			<input type="submit" value="Filtrar">
			<input type="reset" value="Resetear">
		</div>
		<div class="elementoFormulario">
			<label for="forNuevo">Nueva Cita</label>
				<a href="nuevaCita.php">
					<img src="../imagen/signoMas.png" width="20px" height="20px">
				</a>
		</div>
		<div class="elementoTabla">
			<table id="lista">
				<tr>
					<th>Cliente</th>
					<th>Servicio</th>
					<th>Fecha y Hora</th>
					<th>Acciones</th>
				</tr>
				<tbody class="form-msg">
			</table>
		</div>
	</fieldset>
	</form>
</body>
</html>
