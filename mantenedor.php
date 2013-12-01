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

/**
 * Busca el usuario en la base de datos, lo verifica y debuelve un true si existe junto con la contraseña 
 *
 * @return bool
 **/
function login($userin,$passin)
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

  	if ($result = mysql_query("select * from usuarios where usuario = '$userin' and password = '$passin';",$conect))
  	{
  		$contador = 0;
  		while ($fila = mysql_fetch_array($result, MYSQL_ASSOC)) {
    		$contador = $contador + 1;
		}

		if ($contador == 0){
			$ret = false;
		}
  	} else {
  		$ret = false;
	    # die('Error: ' . mysqli_error($con)."<br>");
  	}

	mysql_close($conect);

	return $ret;
}