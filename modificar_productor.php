<?php
    require('connect.php');
    session_start();
    $con = conectar();

    $nombre_productor = $_POST["nombre_productor"];
    $apellido_productor = $_POST["apellido_productor"];
    $sexo = $_POST["sexo"];
    $direccion = $_POST["direccion"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $num_visitas = $_POST["num_visitas"];
    $num_compras = $_POST["num_compras"];
    $ID_productor = $_POST["ID_productor"];

    $consulta_modificar_productor =  "UPDATE  productor SET nombre_productor = '$nombre_productor', apellido_productor = '$apellido_productor', sexo = '$sexo', direccion = '$direccion', fecha_nacimiento = '$fecha_nacimiento', num_visitas = '$num_visitas', num_compras = '$num_compras' WHERE ID_productor = '$ID_productor'";

    $resultado_modificar_productor = mysqli_query($con, $consulta_modificar_productor);

    echo '<script>alert("Actualizado con exito")</script>';
    echo "<script>location.href='perfil_productor.php'</script>";
?>
