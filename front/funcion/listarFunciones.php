<!DOCTYPE html>
<html>
    <head>    
        <title>Listado de Funciones</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<script src="../js/esteticista.js"></script>
		<script src="js/listar.js"></script>
        <meta charset="utf-8"/>
    </head>
    <body>
        <div>
            <img src="../imagen/logoBody.png" class="logoBodyCare">
            <div class="rectanguloLogo">&nbsp;</div>
        </div>
        <label class="tituloGeneral">Listado de Funciones</label>
        <div class="menuPrincipal"><a href="../menu.php">Menú Principal</a></div>
    
            <form action="../../back/funcion/listar.php" method="post" class="estiloFormulario">
            <fieldset>
                <legend>Filtros de Consulta</legend>
               <div class="elementoFormulario">
                <label for="forNombre">Nombre:</label>
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
				<div class="spaceLarge"></div>
				<input type="submit" value="Filtrar">
				<input type="reset" value="Resetear">
            </div> 
            <div class="elementoFormulario">
                <label for="forNuevo">Nueva Función </label>
                <a href="nuevaFuncion.php">
                <img src="../imagen/signoMas.png">
            </div> 
                </a>
            <div class="elementoTabla">
            <table id="lista">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
					<th>Esteticista</th>
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