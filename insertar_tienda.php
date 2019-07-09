<?php
    
    require('connect.php');
    session_start();
    $con = conectar();

    $ID_productor = $_GET['ID_productor'];
	$nombre_tienda = $_POST['nombre_tienda'];
	$ubicacion = $_POST['ubicacion'];
	$rubro = $_POST['rubro'];
    


	$consulta_insert = "INSERT INTO tienda (ID_tienda, nombre_tienda, ubicacion, latitud, longitud, ID_productor, rubro, imagen) VALUES 
    ('', '$nombre_tienda','$ubicacion', 'NULL', 'NULL', '$ID_productor','$rubro','NULL')";

	$resultado_insert = mysqli_query($con, $consulta_insert);

    
    echo '<script>alert("Tienda publicada con exito")</script>';
    echo "<script>location.href='perfil_productor.php'</script>";

?>