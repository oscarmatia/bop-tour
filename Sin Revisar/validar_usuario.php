<?php

	require("connect.php");

	$correo  =  $_POST['correo'];
	$password=  $_POST['password'];

	$sql_iniciar_sesion_productor = "SELECT * FROM productor WHERE  correo='$correo' and password='$password'";

	$sql_iniciar_sesion_cliente = "SELECT * FROM cliente WHERE  correo='$correo' and password='$password'";

	$result_productor = mysqli_query($con, $sql_iniciar_sesion_productor);
	$result_cliente   = mysqli_query($con, $sql_iniciar_sesion_cliente);

	
	if( mysqli_num_rows($result_productor) ) //el usuario es productor
	{
		session_start();
		
		$row_productor = mysqli_fetch_assoc($result_productor);
		
		$_SESSION['ID_productor'] = $row_productor["ID_productor"];
		$_SESSION['nombre_productor'] = $row_productor["nombre_productor"];
		$_SESSION['apellido_productor'] = $row_productor["apellido_productor"];
		$_SESSION['rut'] = $row_productor["rut"];
		$_SESSION['correo'] = $row_productor["correo"];
		$_SESSION['password'] = $row_productor["password"];
		$_SESSION['sexo'] = $row_productor["sexo"];
		$_SESSION['direccion'] = $row_productor["direccion"];
		$_SESSION['fecha_nacimiento'] = $row_productor["fecha_nacimiento"];
		$_SESSION['num_visitas'] = $row_productor["num_visitas"];
		$_SESSION['num_compras'] = $row_productor["num_compras"];
		
		header("Location:perfil_productor.php");
		
	}
	else if( mysqli_num_rows($result_cliente) ) //el usuario es cliente
	{
		session_start();
		
		$row_cliente = mysqli_fetch_assoc($result_cliente);
		
		$_SESSION['ID_cliente'] = $row_productor["ID_cliente"];
		$_SESSION['nombre_cliente'] = $row_productor["nombre_cliente"];
		$_SESSION['apellido_cliente'] = $row_productor["apellido_cliente"];
		$_SESSION['rut'] = $row_productor["rut"];
		$_SESSION['correo'] = $row_productor["correo"];
		$_SESSION['password'] = $row_productor["password"];
		$_SESSION['sexo'] = $row_productor["sexo"];
		$_SESSION['direccion'] = $row_productor["direccion"];
		$_SESSION['fecha_nacimiento'] = $row_productor["fecha_nacimiento"];
		$_SESSION['puntos'] = $row_productor["puntos"];
		
		header("Location:perfil_usuario.php");
	}
	else
	{
		echo "no se encontro el usuario en la base de datos";
	}

?>