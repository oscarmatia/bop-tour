<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Publicado</title>
</head>
<link rel="stylesheet" type="text/css" href="publicar_producto_artesanal.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
<body>

	<img class="imagen-campo" src="camino_campo.jpg">

	<div class="barra-1">

		<div class="barra_navegacion">
			<img src="logo.png" alt="" class="logo">
		</div>
		<img src="perfil.jpg" alt="" class="perfil_imagen" style="margin-bottom: 1%;">
		
		<div class="sesion_usuario">
			<center>

				<?php
				echo $_SESSION['nombre_productor'];
				echo ' ';
				echo $_SESSION['apellido_productor'];    
				?>

			</center>
		</div>
		<form action="cerrar_sesion.php" method="post">

			<div class="boton">
				<input type="button" value="Cerrar Sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
			</div>

		</form>


	</div>


	<div class="barra-2" style="padding-top: 0.5%;">

		<div>
			<ul class="list-1">

				<li class="li1" id="efect"><a href="publicar_producto_artesanal.php">Publicar producto artesanal</a></li>
				<li class="li1" id="efect"><a href="mis_productos.php">Mis productos</a></li>

			</ul>
		</div>	



	</div>

	<div class="promociona-text">

		<h1 style="color: white;">Producto publicado correctamente</h1>
		<hr width="80%;">	

	</div>

	
	<H1>PRODUCTO PUBLICADO CORRECTAMENTE</H1>
	<form action="perfil_productor.php">


		<input style="background-color: black;margin-left: 4%" class="btn blue" type="submit" value="Volver">


	</form>


</body>



</html>