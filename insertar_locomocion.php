<?php
    require('connect.php');
    $con = conectar();
    session_start();

    $vehiculo = $_POST['vehiculo'];
	$descripcion= $_POST['descripcion'];
    $ID_cliente = $_POST['ID_cliente'];
	

	
	$consulta_add_auto = "INSERT INTO locomocion (ID_locomocion, vehiculo, ID_cliente) VALUES ('','$vehiculo','$ID_cliente')";

	$resultado_add_auto = mysqli_query($con, $consulta_add_auto);


    
	echo '<script>alert("Transporte agregado con exito")</script>';
    echo "<script>location.href='perfil_usuario.php'</script>";
?>