<?php
	
	$conexion2 = mysqli_connect("localhost", "root", "", "bop");


	$nombre_tienda = $_POST['nombre_tienda'];
	$ubicacion = $_POST['ubicacion'];
    $ID_productor = $_POST["$ID_productor"];
	$rubro = $_POST['rubro'];


	$consulta21 = "INSERT INTO tienda (`nombre_tienda`,`ubicacion`,`ID_productor`,`rubro`) VALUES 
    ($nombre_tienda','$ubicacion','$ID_productor','$rubro')";

	$resultado21 = mysqli_query($conexion2, $consulta21);

    session_start();
    
    echo '<script>alert("Tienda publicada con exito")</script>';
    echo "<script>location.href='perfil_productor.php'</script>";

?>