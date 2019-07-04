<?php
	include("connect.php");
?>

<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
		<link rel="stylesheet" href="principal.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script src="funciones.js"> </script>		
	</head>

	<body>
		<img src="camino_campo.jpg" alt="" class="imagen_fondo">
		
		<div class="barra_navegacion">
			<a href="principal.php">
				<img src="logo.png" alt="" class="logo">
			</a>		
		</div>	
		
	<form action="" method="post">
	
		<div class="boton">
			<input type="button" value="Iniciar Sesión" id="botonsito" onclick="redireccion_iniciar_sesion()">
		</div>
		
	</form>	
        
		<div class="que_quieres_hacer_hoy">
		
			<center>
			<h1>BIENVENIDOS A BOP TOUR</h1>
				<div class="titulo">
					<b>¿Qué quieres hacer hoy?</b>
				</div>
			</center>							
		</div>
		
	
		<a href="iniciar_sesion_comprar.php" class="btn2 green2" style="text-decoration: none" ><b>Comprar</b></a>
		
		<a href="iniciar_sesion_visitar.php"  class="btn green" style="text-decoration: none" >Visitar</a>
			
		<div class="texto">
			<center>
				<b>Productos Artesanales</b>
			</center>
		</div>
			
		<div class="texto2">
			<center>
				<b>lugares Turísticos</b>
			</center>
		</div>	
				
		<footer class="footer">
		<div class="central">
			
				<div class="siguenos">
					<b>Siguenos</b>				</div>
			
				<a href="https://www.facebook.com/Bop-tour-391667081681891/?modal=admin_todo_tour" target="_blank">
					<img src="fb.png" alt="" class="facebook">
				</a>
				
				<a href="https://www.instagram.com/bop_tour/" target="_blank">
					<img src="insta.png" alt="" class="instagram">
				</a>
				
				<a href="https://twitter.com/BopTour" target="_blank">
					<img src="twitter.png" alt="" class="twitter">
				</a>
		</div>	
		</footer>	
	</body>
</html>