
<!--AQUI VA LA CONSULTA PARA QUE AGREGARLO A LA BD DE PRODUCTOR-->
<?php
    
    session_start();
    require('connect.php');
    $con = conectar();

	$nombre_productor = $_POST['nombre_productor'];
	$apellido_productor= $_POST['apellido_productor'];
	$rut = $_POST['rut'];
	$correo =$_POST['correo'];
	$password =$_POST['password'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	

	
	$consulta_add = "INSERT INTO productor (ID_productor, nombre_productor, apellido_productor, rut, correo, password, sexo, direccion, fecha_nacimiento , num_visitas, num_compras) VALUES ('','$nombre_productor','$apellido_productor','$rut','$correo','$password','$sexo','$direccion','$fecha_nacimiento','NULL','NULL')";

	$resultado_add = mysqli_query($con, $consulta_add);


    
	echo '<script>alert("Agregado con exito")</script>';
    echo "<script>location.href='principal.php'</script>";

?>