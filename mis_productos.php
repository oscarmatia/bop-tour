<?php 
include 'connect.php';
$con = conectar();
session_start();

$consulta2='SELECT id, marca, descripcion, sku, precio from producto_artesanal';
$resultado=mysqli_query($con,$consulta2);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mis Productos</title>
</head>
<link rel="stylesheet" type="text/css" href="publicar_producto_artesanal.css">
<link rel="stylesheet" type="text/css" href="mis_productos.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
<body>



	<img class="imagen-campo" src="camino_campo.jpg">


	<div class="barra-1">



		<div class="iniciar-sesion">

			<div class="barra_navegacion">

				<a href="principal_registrado.php">
					<img src="logo.png" alt="" class="logoo">
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

		</div>

	</div>

	<div class="barra-2">

		<div>
			<ul class="list-1">

				<li class="li1" id="efect"><a href="publicar_producto_artesanal.php">Publicar producto artesanal</a></li>
				<li class="li1" id="efect"><a href="">Mis productos</a></li>

			</ul>
		</div>	



	</div>

	<div class="promociona-text">

		<h1>Listado de tus productos</h1>
		<hr width="55%;">	

		<h3 style="margin-top: 3%;">Tu producto será publicado si cumple con las reglas de nuestro sistema</h3>
	</div>


	<div class="barra-3">

		<div class="cuadrado-1">

			<h1>Resultados</h1>

			<center>
				


			</center>







		</div>


	</div>


</body>
</html>