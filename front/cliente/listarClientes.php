<!DOCTYPE html>
<html>
<head>    
    <title>Listado de Clientes</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="js/listar.js"></script>
    <meta charset="utf-8"/>
</head>
<body>    
    <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
    </div>
    <label class="tituloGeneral">Listado de Clientes</label>
    <div class="menuPrincipal"><a href="../menu.php">Menú Principal</a></div>

    <form action="../../back/cliente/listar.php" method="post" class="estiloFormulario">
        <fieldset>
            <legend>Filtros de consulta</legend>
            <div class="elementoFormulario">
                <label for="forDocumento">Documento:</label>
                <input type="number" id="documento" name="documento" value="">
            </div>
            <div class="elementoFormulario">
				<label for="forNombre">Nombre:</label>
				<input type="text" id="nombre" name="nombre" value="">     
			</div>
			<div class="elementoFormulario">
				<label for="forApellidos">Apellidos:</label>
				<input type="text" id="apellidos" name="apellidos" value="">  
			</div>
            <div class="elementoFormulario">
                <label for="Foractivo">Activo:</label>
                <input type="radio" id="activoSi" name="activo" value="1" checked="checked">Si
                <input type="radio" id="activoNo" name="activo" value="0">No
				<div class="spaceLarge"></div>
				<input type="submit" value="Filtrar">
				<input type="reset" value="Resetear">
            </div> 
            <div class="elementoFormulario">
                <label for="forNuevo">Nuevo Cliente</label>
                <a href="nuevoCliente.php">
                    <img src="../imagen/signoMas.png" width="20px" height="20px">
                </a>
            </div> 
            <div class="elementoTabla">
            <table id="lista">
                <tr>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>
                </tr>
                <tbody class="form-msg">
            </div>    
            </table>
        </fieldset>
    </form>
</body> 
</html>