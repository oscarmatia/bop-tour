<?php
    require('connect.php');
    $con = conectar();
    session_start();

    $ID_productor = $_GET['ID_productor'];

    $nombre_producto = $_POST['nombre_producto'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria_producto = $_POST['categoria_producto'];
    
        


    $consulta_add_products = "INSERT INTO producto_artesanal (ID_producto_artesanal, nombre_producto, ID_productor, imagen, cantidad, descripcion, precio, categoria_producto) VALUES ('', '$nombre_producto', '$ID_productor', 'NULL', '$cantidad', '$descripcion', '$precio', '$categoria_producto')";

    $resultado_add_products = mysqli_query($con, $consulta_add_products);

    echo '<script>alert("Agregado con exito")</script>';
    echo "<script>location.href='perfil_productor.php'</script>";

?>


<?php 


