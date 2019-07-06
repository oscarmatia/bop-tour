<?php
session_start();
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Publicar producto artesanal</title>
</head>
<link rel="stylesheet" type="text/css" href="publicar_producto_artesanal.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
<body>


	<img class="imagen-campo" src="camino_campo.jpg">

	<div class="barra-1">
		<div class="barra_navegacion">
			<img src="logo.png" alt="" class="logo">
		</div>
		<img src="perfil.jpg" alt="" class="perfil_imagen"style="margin-bottom: 1%; margin-right: 10%;">
		
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
			<ul  class="list-1">

				<li class="li1" id="efect"><a href="publicar_producto_artesanal.php">Publicar producto artesanal</a></li>
				<li class="li1" id="efect"><a href="mis_productos.php">Mis productos</a></li>

			</ul>
		</div>	

	</div>

	<div class="promociona-text">

		<h1 style="color: white;">Promociona tu producto</h1>
		<hr width="55%;">	

		<h3 style="margin-top: 3%; color: white;">Tu producto será publicado si cumple con las reglas de nuestro sistema</h3>
	</div>

	
	<form action="guardar_producto_artesanal.php" class="formulario-producto">
		<div class="barra-3">

			<div class="cuadrado-1">


				<div class="sub-cuadrado" >


					<p class="info-p">Información de tu producto</p>

					<div class="categoria-producto">  


						<p class="cat-p">Categoría producto</p>  

						<select name="categoria_producto" class="categoria" required>
							<option value="Cervecita"> Cervecita </option>
							<option value="Vino"> Vino </option>
							<option value="Miel">Miel</option>
							<option value="Otro">Otro</option>

						</select>



					</div> 


					<div class="cont-titulo">     
						<p class="tit ">  Título </p>        
						<input name="nombre_producto"id="titulo_anuncio" type="text"  required>  
					</div>



					<div class="cont-descripcion">
						<div id="text-area">
							<p class="desc-p">Descripción</p>
							<textarea name="descripcion" rows="4" required pattern="[A-Za-z]{15}">
							</textarea>
						</div>
					</div>








				</div>


				<div class="sub-cuadrado2">

					<div class="cont-precio">     
						<p class="pre ">Precio</p>        
						<input name="precio"id="precio" type="text"  required>  
					</div>

					<div class="cont-cant">     
						<p class="cant ">Cantidad</p>        
						<input name="cantidad"id="cantidad" type="text"  required>  
					</div>


					<div class="cont-imagen">  
						<div class="select-img">
							<p >Seleccionar imagen</p> 
						</div> 

						<div class="subir_imagen " id="help">
							<p id="texto">Agregar imagenes</p>
							<input class="imagen-i" id="input-seleccionar" type="file"  name="imagen[]" multiple>

						</div>

						<div id="hola"> </div>    

					</div>  



				</div>

			</div>


		</div>

		<div class="sep">
			
		</div>

		<!-- PARA CUADRADO QUE CONTIENE REGION Y COMUNA !!! -->
		<div class="barra-4">

			<div class="cuadrado-1">


				<div class="sub-cuadrado" >


					<div class="region">  


						<p class="cat-r">Región</p>  

						<select name="region" id="select-region" required>

							<option value="Metropolitana">Metropolitana</option>
							<option value="Tarapacá">I.- Región de Tarapacá</option>
							<option value="Antofagasta">I.- Región de Antofagasta</option>
							<option value="Atacama">III.- Región de Atacama</option>
							<option value="Coquimbo">IV.- Región de Coquimbo</option>
							<option value="Valparaíso">IV.- Región de Valparaíso</option>
							<option value="Libertador Bernardo O'higgins">IV.- Región del Libertador Bernardo O'higgins</option>
							<option value="Maule">VII.- Región del Maule</option>
							<option value="Bío Bío">VIII.- Región del Bío Bío</option>
							<option value="Araucanía">IVX.- Región de Araucanía</option>
							<option value="Los Lagos">X.- Región de Los Lagos</option>
							<option value="Aysén">XII.- Región de Aysén</option>
							<option value="Magallanes y Antártica">XIII.- Región de Magallanes y Antártica</option>
							<option value="Los Ríos">XIV.- Región de Los Ríos</option>
							<option value="Arica y parinacota">XV.- Región de Arica y Parinacota</option>
						</select>



					</div> 

					<div class="comuna">  


						<p class="cat-c">Comuna</p>  

						<select name="comuna" id="select-comuna" required>

							<option value="Talcahuano">Talcahuano</option>
							<option value="San Pedro">San Pedro</option>
							<option value="Chiguayante">Chiguayante</option>
							>
						</select>



					</div> 




				</div>



			</div>

		</div>

		<div class="boton-promocionar">
			<center>

				<input class="btn blue" type="submit" value="Promocionar">

			</center>

		</div>


	</form>



</body>
</html>