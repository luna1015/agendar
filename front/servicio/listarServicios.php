<!DOCTYPE html>
<html>
<head>    
    <title>Listado de Servicios</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="js/listar.js"></script>
    <meta charset="utf-8"/>
</head>
    <body>    
        <div>
        <img src="../imagen/logoBody.png" class="logoBodyCare">
        <div class="rectanguloLogo">&nbsp;</div>
        </div>
        <label class="tituloGeneral">Listado de Servicios</label>
        <div class="menuPrincipal"><a href="../menu.php">Menú Principal</a></div>

            <form action="../../back/servicio/listar.php" method="post" class="estiloFormulario">
            <fieldset>
                <legend>Filtros de consulta</legend>
                    <div class="elementoFormulario">
                        <label for="forNombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="">     
                    </div>
                    <div class="elementoFormulario textoAlinear">
                        <label for="Fordescripcion">Descripción:</label>
                        <textarea id="descripcion" name="descripcion" cols="34" rows="4"></textarea>     
                    </div>
                    <div class="elementoFormulario">
                        <label for="forTarifa">Tarifa:</label>
                        <input type="number" id="tarifa" name="tarifa" value="">
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
                        <label for="forNuevo">Nuevo Servicio </label>
                        <a href="nuevoServicio.php">
							<img src="../imagen/signoMas.png">
                        </a>
                    </div> 
                    <div class="elementoTabla">
						<table id="lista">
							<tr>
								<th>Servicio</th>
								<th>Descripcion</th>
								<th>Tarifa</th>
								<th>Acciones</th>
							</tr>
							<tbody class="form-msg">
							</tbody>
						</table>
					</div>
        </fieldset>
    </form>
</body>
</html>