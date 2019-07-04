<?php
$conexion = new mysqli("localhost", "root", "", "bop-tour");
$consulta = "SELECT * FROM producto_artesanal";
$resultado = mysqli_query($conexion,$consulta);
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mis Productos</title>
</head>
<link rel="stylesheet" type="text/css" href="publicar_producto_artesanal.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
<body>

	<script type="text/javascript">

		function ingresarAlumno(){
			var titulo = document.getElementById("titulo_anuncio").value;
			var categoria = document.getElementById("categoria_producto").value;
			var descripcion = document.getElementById("descripcion").value;
			var precio = document.getElementById("precio").value;
			var region = document.getElementById("region").value;
			var comuna = document.getElementById("comuna").value;
			var cantidad = document.getElementById("cantidad").value;



			var data = '&titulo='+titulo+'categoria='+categoria+'&descripcion='+descripcion+'&precio='+precio+'&region='+region+'&comuna='+comuna+'&cantidad='+cantidad;

			$.ajax({
				type: 'POST',
				url: 'guardar_producto.php',
				data: data,
				beforeSend: function() {
					console.log(data);
				},
				success: function(data) {
					console.log(data);
					location.reload();
				}
			})
			return false;
		};
	</script>




	<img class="imagen-campo" src="camino_campo.jpg">


	<div class="barra-1">



		<div class="iniciar-sesion">

			<div class="logo">
				<img src="logo.png">
			</div>

			<a class="ir-a-inicio" href="principal.php">Ir a inicio</a>

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
				
<!-- /*
				<table style="width:20%;text-align:center">
					<tr>
						<th>Titulo</th>
						<th>Categoria</th>
						<th>Descripcion</th>
						<th>Precio</th>
						<th>Region</th>
						<th>Comuna</th>
						<th>Cantidad</th>

					</tr>




					<?php
					while($row=mysqli_fetch_assoc($resultado)){
						echo "<tr>";
						echo "<td>".$row["titulo"]."</td>";
						echo "<td>".$row["categoria"]."</td>";
						echo "<td>".$row["descripcion"]."</td>";
						echo "<td>".$row["precio"]."</td>";
						echo "<td>".$row["region"]."</td>";
						echo "<td>".$row["comuna"]."</td>";
						echo "<td>".$row["cantidad"]."</td>";

						echo "</tr>";
					}
					?>
				</table>

				/* -->

			</center>







		</div>


	</div>










	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>