<?php 
include 'connect.php';
$con = conectar();
session_start();

$consulta2='SELECT ID_producto_artesanal, nombre_producto, cantidad, descripcion,precio,comuna,categoria_producto from producto_artesanal';

$resultado = mysqli_query($con,$consulta2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mis Avisos</title>
	<link rel="stylesheet" type="text/css" href="mis_avisos.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
</head>
<body>


	<body>

		<img src="camino_campo.jpg" alt="" class="imagen_fondo">
		<div class="barra_navegacion">
			<a href="principal_registrado.php">
				<img src="logo.png" alt="" class="logo">
			</a>
		</div>
		<a href="perfil_productor.php">
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


			<h3 style="color: white; margin-top: 1%; margin-left: 3%;">Mis productos</h3>
			<h5 style="color: wheat; margin-top: 1%; margin-left: 3%;">Resultados</h5>
			<hr style="color: wheat; margin-top: 2%;">




			<div class="seccion1">



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
						while($fila = mysqli_fetch_array($resultado)){
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

					<a  href="publicar_producto_artesanal.php">
						<input style="margin-right: 45%;" type="button" value="Volver" class="boton_gestionar">
					</a>
				</center>




			</div>



		</div>





	</body>
	</html>