<?php
    require ('connect.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="opinion_hospedaje.css">
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


		<h3 style="color: white; margin-top: 1.5%; margin-left: 3%; text-decoration: underline;">Criticas, opiniones y/o sugerecias: Lugares Turisticos</h3>
		<hr style="color: wheat; margin-top: 2%;">


		<div class="seccion1">


			<h4 style="margin-top: 7%; margin-left: 5%;">Realice su colaboración: </h4>

			<div class="tipo">  

				<p class="p-tipo">Tipo (*):</p>  

				<select name="critica" id="select-tipo" required>

					<option value="Crítica">Crítica</option>
					<option value="Opinión">Opinión</option>
					<option value="Sugerencia">Sugerencia</option>

				</select>

			</div> 

			
			<div class="contenedor-clasificacion">

				<form>

					<p class="p-class">Clasificación (*):</p>  

					<p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
--><label for="radio5">★</label>
</p>
</form>

</div>


<div class="cont-descripcion">
	<div id="text-area">
		<p class="desc-p">Descripción (*):</p>
		<textarea name="descripcion" rows="4" required pattern="[A-Za-z]{15}">
		</textarea>
	</div>
</div>

<a  href="">
	<input type="button" value="Gestionar" style="color: white; background-color: green; border: solid; border-color: green; text-align: center; margin-top: 12%; margin-left: 50%; padding-left: 4%; padding-right: 5%;padding-top: 2%; padding-bottom: 2%; float: right; margin-right: 36%;">
</a>

</div>

<div class="seccion2">

	<h4 style="margin-top: 7%; margin-left: 5%;">BLOG </h4>
	
	<div class="opinion">
		<a href="perfil_usuario.php">
			<img src="perfil.jpg" alt="" class="perfil_b">
		</a>

	</div>

	<div class="opinion">
		<a href="perfil_usuario.php">
			<img src="perfil.jpg" alt="" class="perfil_b">
		</a>

	</div>

	<div class="opinion">
		<a href="perfil_usuario.php">
			<img src="perfil.jpg" alt="" class="perfil_b">
		</a>

	</div>




</div>








</div>




</body>
</html>