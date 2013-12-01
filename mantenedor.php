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

	$conect = mysql_connect($host,$user,$pass);
	mysql_select_db($db,$conect);

	if (mysqli_connect_errno())
	  {
	  	$ret = false;
	 	# die ("Failed to connect to MySQL: " . mysqli_connect_error() . "<br>");
	  }
		#echo "insert into usuarios (usuario,password) values ('$userin','$passin')<br>";

	 	// si existe un error como que ya exista el usuario inmediatamente adbierte
	if (!mysql_query("insert into usuarios (usuario,password) values ('$userin','$passin');",$conect)){
	  	$ret = false;
	    # die('Error: ' . mysqli_error($con)."<br>");
	}

	mysql_close($conect);

	return $ret;
}