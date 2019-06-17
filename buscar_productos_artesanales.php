<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	

	<?php

		$busqueda = $_POST['busqueda'];

		$conexion = mysqli_connect("localhost", "root", "", "bop-tour");
	
		$consulta = "SELECT * FROM producto_artesanal WHERE nombre_producto like '%".$busqueda."%' ";
						
		$resultado = mysqli_query($conexion, $consulta);
					
		while($fila = mysqli_fetch_array($resultado))
		{
	
		
			echo "<li>Producto:   $fila[nombre_producto] <br> 
			
			<td> Descripcion:  $fila[descripcion] <br>
				
			<td>  Stock: $fila[cantidad] <br>
					
			<td> Precio Unitario:  $fila[precio] <br><br>";
			
		
	
   		}
    session_start();
	?>
	
	


	
</body>
</html>