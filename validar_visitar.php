<?php
    require('connect.php');
    $con = conectar();
    
	$correo = $_POST['correo'];
	$password = $_POST['password'];


	$consulta = "SELECT * FROM cliente WHERE correo='$correo' and password='$password' ";

	$resultado = mysqli_query($con, $consulta);

	$filas = mysqli_num_rows($resultado);

	$rows = mysqli_fetch_assoc($resultado);

	session_start();
	$_SESSION['nombre_cliente'] = $rows['nombre_cliente'];
    $_SESSION['apellido_cliente'] = $rows['apellido_cliente'];
    $_SESSION['puntos'] = $rows['puntos'];

	header("Location: principal_registrado_visitar.php");

	if($filas > 0)
	{
		$_SESSION['login_user_sys']=$correo; // Iniciando la sesion
		header("location: planificar_ruta.php"); // Redireccionando a la pagina profile.php
	}
	else
	{
		echo "Hola, soy la funcion VALIDAR.PHP";
	}

	

	mysqli_free_result($resultado);

	mysqli_close($conexion);

?>
