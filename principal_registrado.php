<?php
    require('connect.php');
	session_start();
?>


<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>principal</title>
		<link rel="stylesheet" href="principal_registrado.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script src="principal_registrado.js"> </script>
		<script src="redireccion_cerrar_sesion.js"></script>
	</head>

	<body>
		<img src="camino_campo.jpg" alt="" class="imagen_fondo">
		
		<div class="barra_navegacion">
			<a href="principal_registrado.php">
				<img src="logo.png" alt="" class="logo">
			</a>		
				
		</div>
		
		<a href="perfil_usuario.php"><img src="perfil.jpg" alt="" class="perfil_imagen"></a>
		
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
			<input type="button" value="Cerrar Sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
		</div>
		
	</form>	

		<div class="que_quieres_hacer_hoy">
			<center>
				<div class="titulo">
					<b>¿Qué quieres hacer hoy?</b>
				</div>
			</center>							
		</div>
		
	
		<a href="comprar_producto_artesanal.php" class="btn2 green2" style="text-decoration: none" ><b>Comprar</b></a>
		
		<a href="planificar_ruta.php"  class="btn green" style="text-decoration: none" >Visitar</a>
			
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
				
		<footer class="footer"></footer>
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
	</body>
</html>