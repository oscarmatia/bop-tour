<?php
// Conexion a la base de datos
		$user = "root";
		$pass = "";
		$server = "localhost";
		$db = "bop-tour";
		$con = mysqli_connect($server, $user, $pass) or die ("Error al conectar a la base de datos".mysql_error());
		
		mysqli_select_db($con, $db);


		require('funciones.php');

if ($_GET['id'] > 0)
{
    // Consulta de búsqueda de la imagen.
    $consulta = "SELECT imagen, tipo_imagen FROM imagenes WHERE imagen_id={$_GET['id']}";
    $resultado = @mysqli_query($con, $consulta) or die(mysql_error());
    $datos = mysqli_fetch_assoc($resultado);

    $imagen = $datos['imagen']; // Datos binarios de la imagen.
    $tipo = $datos['tipo_imagen'];  // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    header("Content-type: $tipo");
    // A continuación enviamos el contenido binario de la imagen.
    echo $imagen;
}
?>			