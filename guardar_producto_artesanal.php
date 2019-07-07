?>

<?php
require('connect.php');
session_start();

$nCategoria_producto = $_POST['categoria_producto'];
$nNombre_producto= $_POST['nombre_producto'];
$nDescripcion= $_POST['descripcion'];
$nPrecio= $_POST['precio'];
$nCantidad= $_POST['cantidad'];
//$nImagen[]= $_POST['imagen[]'];
$nRegion= $_POST['region'];
$nComuna= $_POST['comuna'];


$consulta= "SELECT categoria_producto,nombre_producto, descripcion,precio, precio,cantidad/*,imagen[]*/,region,comuna
FROM producto_artesanal
AND categoria_producto='$nCategoria_producto'
AND nombre_producto='$nNombre_producto'
AND descripcion='$nDescripcion'
AND precio='$nPrecio'
AND cantidad='$nCantidad' 
AND region='$nRegion'
AND comuna='$nComuna'";

header("Location:ventana_resultado_producto.php");

?>


<?php 

// $conexion = new mysqli("localhost", "root", "", "bop-tour");

// $titulo=$_POST['nombre_producto'];
// $categoria=$_POST['categoria_producto'];
// $descripcion=$_POST['descripcion'];
// $precio=$_POST['precio'];
// $region=$_POST['region'];
// $comuna=$_POST['comuna'];
// $cantidad=$_POST['cantidad'];


// $insertar_producto = "INSERT INTO producto_artesanal (nombre_producto,categoria_producto,descripcion, precio, region,comuna, cantidad ) VALUES ('$titulo','$categoria','$descripcion','$precio','$region','$comuna', '$cantidad')";
// $result = mysqli_query($conexion,$insertar_producto);



