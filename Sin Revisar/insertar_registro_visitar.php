<?php

	
	$conexion = mysqli_connect("localhost", "root", "", "bop");

	$nombre_cliente = $_POST['nombre_cliente'];
	$apellido_cliente= $_POST['apellido_cliente'];
	$rut= $_POST['rut'];
	$correo=$_POST['correo'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$fecha_nacimiento=$_POST['fecha_nacimiento'];
	$sexo=$_POST['sexo'];

	
	$consulta = "INSERT INTO cliente (`ID_cliente`,`nombre_cliente`,`apellido_cliente`,`rut`,`correo`,`sexo`,`password`,`direccion`,`fecha_nacimiento`,`puntos`) VALUES ('','$nombre_cliente','$apellido_cliente','$rut','$correo','$sexo','$password','NULL','$fecha_nacimiento','NULL')";

	$resultado = mysqli_query($conexion, $consulta);

	header("Location: iniciar_sesion_visitar.php");

?>