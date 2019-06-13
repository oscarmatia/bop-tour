<?php

	$busqueda = $_POST['busqueda'];

	$conexion = mysqli_connect("localhost", "root", "", "bop");

	$consulta = "SELECT * FROM producto_artesanal WHERE nombre_producto='$busqueda' ";
					
	$resultado = mysqli_query($conexion, $consulta);
				
	while($fila = mysqli_fetch_array($resultado))
	{
		echo "<li>Producto:   $fila[nombre_producto] <br> ";
		
		echo "<td> Descripcion:  $fila[descripcion] <br>";
			
		echo " <td>  Stock: $fila[cantidad] <br>";
				
		echo "<td> Precio Unitario:  $fila[precio] <br><br>";
	}

?>