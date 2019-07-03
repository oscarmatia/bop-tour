<?php

    session_start();
	
	$conexion2 = mysqli_connect("localhost", "root", "", "bop");


	$nombre_tienda = $_POST['nombre_tienda'];
	$ubicacion = $_POST['ubicacion'];
    $ID_productor = $_POST["ID_productor"];
	$rubro = $_POST['rubro'];


	$consulta21 = "INSERT INTO tienda ('nombre_tienda','ubicacion','ID_productor','rubro','imagen') VALUES 
    ($nombre_tienda','$ubicacion','$ID_productor','$rubro','NULL')";

	$resultado21 = mysqli_query($conexion2, $consulta21);

    
    echo '<script>alert("Tienda publicada con exito")</script>';
//    echo "<script>location.href='perfil_productor.php'</script>";

?>