<?php
    require('connect.php');
    $con = conectar();
	session_start();
?>


<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Comprar producto artesanal</title>
		<link rel="stylesheet" href="comprar_producto_artesanal.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="buscar_productos_artesanales.php">
		
		<script src="redireccion_cerrar_sesion.js"></script>
				
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
				echo $_SESSION['nombre_cliente']
?>
                !!
				</center>
		</div>
		
		<form action="cerrar_sesion.php" method="post">
	
		<div class="boton">
			<input type="button" value="Cerrar Sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
		</div>
		
	</form>	
		
		<div class="productos_artesanales">
			<center><b>Productos Artesanales</b></center>
		</div>
		
		<form action="buscar_productos_artesanales.php" method="post" class="buscar">		    
				<input type="Buscar" placeholder="Buscar..." class="inp" name="busqueda">						
		</form>
<?php

			$consulta_sea = "SELECT DISTINCT nombre_producto FROM producto_artesanal ";
					
			$resultado_sea = mysqli_query($con, $consulta_sea);
			

			while($fila_sea = mysqli_fetch_array($resultado_sea))
			{
?>
				<br>
				<input type="radio" name="producto_artesanal"> 
<?php
				echo " $fila_sea[nombre_producto]  <br> ";
?>				
				<img src="<?php echo $fila_sea[imagen] ?>" >
<?php 
            }	
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