<?php

	require('connect.php');
	$con = conectar();
    session_start();

	$nombre_cliente = $_POST['nombre_cliente'];
	$apellido_cliente= $_POST['apellido_cliente'];
	$rut= $_POST['rut'];
	$correo=$_POST['correo'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$fecha_nacimiento=$_POST['fecha_nacimiento'];
	$sexo=$_POST['sexo'];

	
	$consulta_insertar = "INSERT INTO cliente (ID_cliente, nombre_cliente, apellido_cliente, rut, correo, sexo , password , direccion, fecha_nacimiento, puntos) VALUES ('','$nombre_cliente','$apellido_cliente','$rut','$correo','$sexo','$password','NULL','$fecha_nacimiento','NULL')";

	$resultado_insertar = mysqli_query($con, $consulta_insertar);

	header("Location: iniciar_sesion_visitar.php");

?>