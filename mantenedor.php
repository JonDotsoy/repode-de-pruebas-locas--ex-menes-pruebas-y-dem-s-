<?php 

include "conectar.php";

/**
* Manenedor maneja todas los datos
*/

/**
 * Creara un usuario en la base de datos
 *
 * @return void
 * @author bool
 **/
function creausuario($userin, $passin)
{
	global $host,$user,$pass,$db;
	$ret = true;

	$conect = mysql_connect($host,$user,$pass,$db);

	if (mysqli_connect_errno())
	  {
	  	$ret = false;
	 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	mysql_query($conect,"insert into usuarios (usuario,password) values ('$userin','$passin');");

	mysql_close($conect);

	return $ret;
}