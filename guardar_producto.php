<?php 

$conexion = new mysqli("localhost", "root", "", "bop-tour");

$titulo=$_POST['nombre_producto'];
$categoria=$_POST['categoria_producto'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$region=$_POST['region'];
$comuna=$_POST['comuna'];
$cantidad=$_POST['cantidad'];


$insertar_producto = "INSERT INTO producto_artesanal (nombre_producto,categoria_producto,descripcion, precio, region,comuna, cantidad ) VALUES ('$titulo','$categoria','$descripcion','$precio','$region','$comuna', '$cantidad')";
$result = mysqli_query($conexion,$insertar_producto);


?>