<?php
    require('connect.php');
    $con = conectar();
    session_start();

    $ID_productor = $_GET['ID_productor'];
    $categoria_producto = $_POST['categoria_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $imagen[] = $_POST['imagen[]'];
    $region = $_POST['region'];
    $comuna = $_POST['comuna'];
    


    $consulta_add_products = "INSERT INTO producto_artesanal (ID_producto_artesanal, nombre_producto, ID_productor, imagen, cantidad, descripcion, precio, cut_comuna, cut_region, region, comuna, categoria_producto) VALUES ('', '$nombre_producto', '$ID_productor', 'NULL', '$cantidad', '$descripcion', '$precio', 'NULL', 'NULL', '$region', '$comuna', '$categoria_producto')";

    $resultado_add_products = mysqli_query($con, $consulta_add_products);

    echo '<script>alert("Agregado con exito")</script>';
    echo "<script>location.href='perfil_productor.php'</script>";

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



