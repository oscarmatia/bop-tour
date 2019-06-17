<?php

	function mostrar_buscado()
	{
		$busqueda = $_POST['busqueda'];

		$conexion = mysqli_connect("localhost", "root", "", "bop-tour");

		$consulta = "SELECT * FROM producto_artesanal WHERE nombre_producto like '%".$busqueda."%' ";

		$resultado = mysqli_query($conexion, $consulta);
		
		echo $busqueda;
		echo "<br>";
		echo $resultado;

		while($fila = mysqli_fetch_array($resultado))
		{
			echo "<li>Producto:   $fila[nombre_producto] <br> ";

			echo "<td> Descripcion:  $fila[descripcion] <br>";

			echo " <td>  Stock: $fila[cantidad] <br>";

			echo "<td> Precio Unitario:  $fila[precio] <br><br>";
		}

		session_start();
		header("location: principañ_registrado_comprar.php");
	}

		
?>