<?php 
	include ("conectar.php");

	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['cantidad']) && !empty($_POST['cantidad'])&& 
		isset($_POST['precio']) && !empty($_POST['precio'])) 
	
	{
	 //conectar a la base de datos
		$con=mysql_connect($host,$user,$pass) or die ("no funciona");
		mysql_select_db($db,$con) or die ("no funciona la bd");

		mysql_query("INSERT INTO productos (nombre, cantidad, precio) VALUES ('$_POST[nombre]','$_POST[cantidad]','$_POST[precio]')", $con);

    echo "Datos insertados";
	}
	else{
		echo "DENGER";
	}






 ?>