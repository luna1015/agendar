<?php

session_id("sisas");
session_start();

if ( isset($_GET["token"]) ) {
	$_SESSION["token"] = $_GET["token"];
}

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menú Principal</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div>
		<img src="imagen/logoBody.png" class="logoBodyCare"/>
		<div class="rectanguloLogo">&nbsp;</div>
	</div>
	<div class="menuPrincipal"><a href="../index.php">Salir</a></div>
	<table id="tablaMenu">
		<tr>
			<td>Citas</td>
			<td>Clientes</td>
			<td>Esteticista</td>
			<td>Servicios</td>
		</tr>

		<tr>
			<td>
				<a href="cita/listarCitas.php">
					<img src="imagen/citas.jpg"alt="Citas">
				</a>
			</td>	
			<td>
				<a href="cliente/listarClientes.php">
					<img src="imagen/clientes.jpg" alt="Clientes">
				</a>
			</td>
			<td>
				<a href="esteticista/listarEsteticistas.php">
						<img src="imagen/esteticista.jpg" alt="Esteticista">
				</a>
			</td>
			<td>
				<a href="servicio/listarServicios.php">
						<img src="imagen/servicios.jpg" alt="Servicios">
				</a>
			</td>
		</tr>

		<tr>
			<td>Funciones</td>
			<td>Roles</td>
			<td>Usuarios</td>
		</tr>

		<tr>
			<td>
				<a href="funcion/listarFunciones.php">
						<img src="imagen/funciones.jpg" alt="Funciones">
				</a>
			</td>
			<td>
				<a href="rol/listarRoles.php">
						<img src="imagen/roles.jpg" alt="Roles">
				</a>
			</td>
			<td>
				<a href="usuario/listarUsuarios.php">
					<img src="imagen/usuarios.jpg" alt="Usuarios">
				</a>
			</td>
		</tr>
	</table>
</body>
</html>
