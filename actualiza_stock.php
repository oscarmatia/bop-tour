<?php
    require('connect.php');
    $con = conectar();
    session_start();

    $ID_productor = $_GET['ID_productor'];
    $cantidad = $_POST['cantidad'];

    $consulta_agregar_stock = "UPDATE producto_artesanal SET cantidad = '$cantidad' WHERE ID_productor = '$ID_productor'";

    $resultado_agregar_stock = mysqli_query($con, $consulta_agregar_stock);

    echo '<script>alert("Actualizado con exito")</script>';
    echo "<script>location.href='perfil_productor.php'</script>";
?>