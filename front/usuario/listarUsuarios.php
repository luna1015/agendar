<!DOCTYPE html>
<html>
    <head>    
        <title>Listado de Usuarios</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<script src="../js/rol.js"></script>
		<script src="js/listar.js"></script>
        <meta charset="utf-8"/>
    </head>
    <body>
        <div>
            <img src="../imagen/logoBody.png" class="logoBodyCare">
            <div class="rectanguloLogo">&nbsp;</div>
        </div>
        <label class="tituloGeneral">Listado de Usuarios</label>
        <div class="menuPrincipal"><a href="../menu.php">Menú Principal</a></div>
    
            <form action="../../back/usuario/listar.php" method="post" class="estiloFormulario">
            <fieldset>
			<legend>Filtros de Consulta</legend>
			<div class="elementoFormulario">
                <label for="forNombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="">
            </div>
            <div class="elementoFormulario">
                <label for="forApellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="">     
            </div>
			<div class="elementoFormulario">
                <label for="forUsuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" value="">
            </div>
			<div class="elementoFormulario">
				<label for="forRol">Rol:</label>
				<select id="id_rol" name="id_rol" class="form-rol">
			   </select>                  
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
                <label for="forNuevo">Nuevo Usuario</label>
                <a href="nuevoUsuario.php">
                <img src="../imagen/signoMas.png">
            </div> 
                </a>
            <div class="elementoTabla">
            <table id="lista">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
					<th>Rol</th>
                    <th>Acciones</th>
                </tr>
                <tbody class="form-msg">
				</tbody>
            </div>   
            </table> 
            </fieldset>
        </form>    
    </body>
</html>