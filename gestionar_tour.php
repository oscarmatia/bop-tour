<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Gestionar</title>
	<link rel="stylesheet" type="text/css" href="gestionar_tour.css">
</head>
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
			echo $_SESSION['nombre_cliente'];
			?>
		</center>
	</div>
	<form action="cerrar_sesion.php" method="post">
		<div class="boton">
			<input type="button" value="Cerrar Sesion" id="botonsito" onclick="redireccion_cerrar_sesion()"> 
		</div>
	</form>
	<div class="contenedor_principal">
		<h3 style="color: white; margin-top: 1%; margin-left: 3%;">Planifica tu viaje</h3>
		<h5 style="color: wheat; margin-top: 1%; margin-left: 3%;">¿Dónde quieres ir?'</h5>
		<hr style="color: wheat; margin-top: 2%;">
		
		<div class="seccion1">

			<div class="cont-dest">     
				<p class="des ">Destino </p>        
				<input name="destino"id="destino" type="text"  required>  
			</div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12758.068648774599!2d-73.02870939999998!3d-36.92580725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1560717950496!5m2!1ses!2scl" width="400" height="250" frameborder="0" style="border:0;" class="mapa" allowfullscreen></iframe>

		</div>




		<div class="seccion2">

			<div class="cont-fecha_ida">     
				<p class="fe ">Fecha ida </p>        
				<input id="date" type="date" name="fecha_ida">
			</div>	

			<div class="cont-fecha_vuelta">     
				<p class="fe2 ">Fecha ida </p>        
				<input id="date" type="date" name="fecha_ida">
			</div>

			<div class="cont-cant-g">     
				<p class="cant2 ">Cantidad</p>        
				<input name="cantidad2"id="cantidad2" type="text"  required>  
			</div>	





		</div>

	</a>
	<a  href="gestionar_tour.php">
		<input type="button" value="Gestionar" style="color: white; background-color: green; border: solid; border-color: green; text-align: center; margin-top: -8.8%; margin-left: 70%; padding-left: 4%; padding-right: 5%;padding-top: 2%; padding-bottom: 2%; float: right; margin-right: 18%;">
	</a>
</div>






<meta charset="UTF-8">
<title>Gestionar</title>
<link rel="stylesheet" href="gestionar_tour.css">
</head>
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
			echo $_SESSION['nombre_cliente'];
			?>
			
		</center>
	</div>
	<form action="cerrar_sesion.php" method="post">
		<div class="boton">
			<input type="button" value="Cerrar Sesion" id="botonsito" onclick="redireccion_cerrar_sesion()"> 
		</div>
	</form>
	
	<footer class="footer">
		<div class="siguenos">
			<b>Siguenos</b>
			<center>
				<a href="https://www.facebook.com/Bop-tour-391667081681891/?modal=admin_todo_tour" target="_blank">
					<img src="fb.png" alt="" class="facebook">
				</a>
				<a href="https://www.instagram.com/bop_tour/" target="_blank">
					<img src="insta.png" alt="" class="instagram">
				</a>
				<a href="https://twitter.com/BopTour" target="_blank">
					<img src="twitter.png" alt="" class="twitter">
				</a>
			</center>
		</div>
	</footer>
</body>
</html>