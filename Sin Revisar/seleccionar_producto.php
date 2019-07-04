<?php


	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	$consulta = "SELECT * FROM producto_artesanal ";
					
	$resultado = mysqli_query($conexion, $consulta);

	$nombre ="";
				
	while($fila = mysqli_fetch_array($resultado))
	{
		if($fila[nombre_producto] != $nombre)
		{
			echo " <input type="checkbox" name="producto_artesanal"> $fila[nombre_producto] <br> ";
		}
		
		$nombre =$fila[nombre_producto];
	}

?>