<?php
	
	$conexion2 = mysqli_connect("localhost", "root", "", "bop");


	$nombre_tienda = $_POST['nombre_tienda'];
	$ubicacion= $_POST['ubicacion'];
	$rubro= $_POST['rubro'];
	$imagen=$_POST['imagen'];

	$consulta10 = "INSERT INTO tienda (`ID_tienda`,`nombre_tienda`,`ubicacion`,`1`,`rubro`,`imagen`) VALUES 
    ('','$nombre_tienda','$ubicacion','$ID_productor','$rubro','NULL')";

	$resultado20 = mysqli_query($conexion2, $consulta10);

    session_start();
	header("Location: perfil_productor.php");

?>