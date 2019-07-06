<?php 

include 'conexion.php';
session_start();

$consulta2='SELECT id, marca, descripcion, sku, precio from producto_artesanal';
$resultado=mysqli_query($conexion,$consulta2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mis Avisos</title>
</head>
<body>

	<link rel="stylesheet" type="text/css" href="mis_avisos.css">
	<body>

		<img src="camino_campo.jpg" alt="" class="imagen_fondo">
		<div class="barra_navegacion">
			<a href="principal_registrado.php">
				<img src="logo.png" alt="" class="logo">
			</a>
		</div>
		<a href="perfil_usuario.php">
			<img src="perfil.jpg" alt="" class="perfil_imagen">
		</a>
		<div class="sesion_usuario">
			<center>
				Hola
				<?php
				echo $_SESSION['nombre_productor'];
				?>
			</center>
		</div>
		<form action="cerrar_sesion.php" method="post">
			<div class="boton">
				<input type="button" value="Cerrar Sesion" id="botonsito" onclick="redireccion_cerrar_sesion()"> 
			</div>
		</form>

		<div class="contenedor_principal">


			<h3 style="color: white; margin-top: 1%; margin-left: 3%;">Mis Avisos</h3>
			<h5 style="color: wheat; margin-top: 1%; margin-left: 3%;">.....</h5>
			<hr style="color: wheat; margin-top: 2%;">



			<div class="seccion1">



			</div>



		</div>





	</body>
	</html>
