<?php

session_id("sisas");
session_start();

if ( !isset($_SESSION["token"]) || $_SESSION["token"] != TOKEN_SESSION ) {
	exit("Acceso restringido.");
}

?>