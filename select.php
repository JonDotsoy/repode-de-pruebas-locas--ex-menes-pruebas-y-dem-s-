<?php 
include ("conectar.php");

$con=mysql_connect($host,$user,$pass) or die ("no funciona");
mysql_select_db($db,$con) or die ("no funciona la bd");

$registro=mysql_query("SELECT * FROM  productos") or die ("Houston tenemos un problema:" .mysql_error());

while ($reg=mysql_fetch_array($registro)) {

	echo $reg['nombre'];
	echo $reg['cantidad'];
	echo $reg['precio'];
	
}



 ?>