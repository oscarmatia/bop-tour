<?php 
include 'connect.php';
$con = conectar();
session_start();

$consulta2='SELECT ID_producto_artesanal, nombre_producto, cantidad, descripcion,precio,comuna,categoria_producto from producto_artesanal';
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
				

				<table class="tablita">

					<tr style="margin-left: 2%;">

						<th class="eu">Id</th>
						<th class="eu">nombre</th>
						<th class="eu">Cantidad</th>
						<th class="eu">Descripción</th>
						<th class="eu">Precio</th>
						<th class="eu">Comuna</th>
						<th class="eu">Categoria</th>

					</tr>

					<?php
					while($fila=mysqli_fetch_array($resultado)){
						echo "<tr>";
						echo "<td>".$fila["ID_producto_artesanal"]."</td>";
						echo "<td>".$fila["nombre_producto"]."</td>";
						echo "<td>".$fila["cantidad"]."</td>";
						echo "<td>".$fila["descripcion"]."</td>";
						echo "<td>".$fila["precio"]."</td>";
						echo "<td>".$fila["comuna"]."</td>";
						echo "<td>".$fila["categoria_producto"]."</td>";
						echo "</tr>";
					}
					?>

				</table>



			</center>







		</div>


	</div>


</body>
</html>