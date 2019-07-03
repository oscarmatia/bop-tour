<?php


	function conectar()
	{
		$user = "root";
		$pass = "";
		$server = "localhost";
		$db = "bop";
		$con = mysqli_connect($server, $user, $pass) or die ("Error al conectar a la base de datos".mysql_error());
		
		mysqli_select_db($con, $db);
		
		return $con;
	}


?>


