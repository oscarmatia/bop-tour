<?php
	require('connect.php');
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comprar Producto</title>
	<link rel="stylesheet" href="principal_registrado_comprar.css">
	
	<script src="principal_registrado.js"> </script>
	<script src="redireccion_cerrar_sesion.js"></script>
	<link rel="stylesheet" href="buscar_productos_artesanales.php">
</head>
<body>
	<img src="camino_campo.jpg" alt="" class="imagen-fondo">
	
	<div class="barra_navegacion">
				<a href="principal.php">
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
	
	
	
	<center>
		<div class="contenedor_busqueda">
			<div class="box">
  				<div class="container-4">
   				
   					<form action="buscar_productos_artesanales.php" method="post">
   						<input type="search" name="busqueda" id="search" placeholder="Search...">
   					</form>
   				
    				
  				</div>
			</div>	
		</div>
	</center>
	

?>			
	
	
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












































