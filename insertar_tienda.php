<?php
    
    require('connect.php');
    session_start();
    $con = conectar();
    
    $ID_productor = $_SESSION["ID_productor"];

	$nombre_tienda = $_POST["nombre_tienda"];
	$ubicacion = $_POST["ubicacion"];
	$rubro = $_GET["rubro"];


	$consulta21 = "INSERT INTO tienda VALUES 
    ('', $nombre_tienda','$ubicacion','$ID_productor','$rubro','')";

	$resultado21 = mysqli_query($con, $consulta21);

    
    echo '<script>alert("Tienda publicada con exito")</script>';
    echo "<script>location.href='perfil_productor.php'</script>";

?>