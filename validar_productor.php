<?php
	

	$correo = $_POST['correo'];
	$password = $_POST['password'];


	$conexion = mysqli_connect("localhost", "root", "", "bop");

	$consulta = "SELECT * FROM productor WHERE correo='$correo' and password='$password' ";

	$resultado = mysqli_query($conexion, $consulta);

	$filas = mysqli_num_rows($resultado);

	$rows = mysqli_fetch_assoc($resultado);

	session_start();

	$_SESSION['nombre_productor'] = $rows['nombre_productor'];
    $_SESSION['apellido_productor'] = $rows['apellido_productor'];
    $_SESSION['num_visitas'] = $rows['num_visitas'];
    $_SESSION['num_compras'] = $rows['num_compras'];
    $_SESSION['ID_productor'] = $rows['ID_productor'];

	header("Location: perfil_productor.php");

	if($filas > 0)
	{
		$_SESSION['login_user_sys']=$correo; // Iniciando la sesion
		header("location: perfil_productor.php"); // Redireccionando a la pagina profile.php
	}
	else
	{
		echo "Hola, soy la funcion VALIDAR.PHP";
	}

	

	mysqli_free_result($resultado);

	mysqli_close($conexion);