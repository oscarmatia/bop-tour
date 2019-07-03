<?php
	
    require('connect.php');
    $con = conectar();

	$correo = $_POST['correo'];
	$password = $_POST['password'];

	$consulta3 = "SELECT * FROM productor WHERE correo='$correo' and password='$password' ";

	$resultado3 = mysqli_query($con, $consulta3);

    while($row=mysqli_fetch_assoc($resultado3)){
        $ID_productor = $row["ID_productor"];
		$nombre_productor = $row["nombre_productor"];
		$apellido_productor = $row["apellido_productor"];
        $rut = $row["rut"];
        $correo = $row["correo"];
        $password = $row["password"];
        $sexo = $row["sexo"];
        $direccion = $row["direccion"];
        $fecha_nacimiento = $row["fecha_nacimiento"];
        $num_visitas = $row["num_visitas"];
        $num_compras = $row["num_compras"];
	}

	$row = mysqli_num_rows($resultado3);
    
    $consulta4 = "SELECT * FROM tienda WHERE ID_productor ='$_SESSION['ID_productor']' ";
    $resultado4 = mysqli_query($con, $consulta4);
    
    while($row2 = mysqli_fetch_assoc($resultado4)){
        $nombre_tienda = $row["nombre_tienda"];
    }

	session_start();

	$_SESSION['nombre_productor'] = $nombre_productor;
    $_SESSION['apellido_productor'] = $apellido_productor;
    $_SESSION['num_visitas'] = $num_visitas;
    $_SESSION['num_compras'] = $num_compras;
    $_SESSION['ID_productor'] = $ID_productor;
    $_SESSION['nombre_tienda'] = $nombre_tienda;

	header("Location: perfil_productor.php");

	if($row > 0)
	{
		$_SESSION['login_user_sys']=$correo; // Iniciando la sesion
		header("location: perfil_productor.php"); // Redireccionando a la pagina perfil.php
	}
	else
	{
		echo "Hola, soy la funcion VALIDAR.PHP";
	}

	

	mysqli_free_result($resultado3);

	mysqli_close($con);