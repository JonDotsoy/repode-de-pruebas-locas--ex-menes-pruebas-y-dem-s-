<?php 

	if (isset($_COOKIE["userid"])){
		echo "<span style=\" color: white \"> Hola, ".$_COOKIE["userid"]." </span>";
		echo "<span><a href=\"?closesession=true\">Cerrar cesión</a></span>";
	}

	if (isset($_GET["closesession"])) {
		// Eliminal la cookie del usuario
		setcookie('userid', null, -1, '/');
		// Redirecciona a la pagina principal
		header("Location: .");
	}

?>