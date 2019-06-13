<?php
	
	$conexion2 = mysqli_connect("localhost", "root", "", "bop");

    $ID_productor = $_GET["ID_productor"];

	$nombre_tienda = $_POST['nombre_tienda'];
	$ubicacion= $_POST['ubicacion'];
	$rubro= $_POST['rubro'];
	$imagen=$_POST['imagen'];

	$consulta10 = "INSERT INTO tienda (`ID_tienda`,`nombre_tienda`,`ubicacion`,`ID_productor`,`rubro`,`imagen`) VALUES 
    ('','$nombre_tienda','$ubicacion','$ID_productor','$rubro','NULL')";

	$resultado20 = mysqli_query($conexion2, $consulta10);

	header("Location: perfil_productor.php");

?>