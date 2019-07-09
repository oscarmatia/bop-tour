<?php
    require('connect.php');
    session_start();
    $con = conectar();

    $nombre_cliente = $_POST["nombre_cliente"];
    $apellido_cliente = $_POST["apellido_cliente"];
    $sexo = $_POST["sexo"];
    $direccion = $_POST["direccion"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $puntos = $_POST["puntos"];
    $ID_cliente = $_POST["ID_cliente"];

    $consulta_modificar_cliente =  "UPDATE  cliente SET nombre_cliente = '$nombre_cliente', apellido_cliente = '$apellido_cliente', sexo = '$sexo', direccion = '$direccion', fecha_nacimiento = '$fecha_nacimiento', puntos = '$puntos' WHERE ID_cliente = '$ID_cliente'";

    $resultado_modificar_cliente = mysqli_query($con, $consulta_modificar_cliente);

    echo '<script>alert("Actualizado con exito")</script>';
    echo "<script>location.href='perfil_usuario.php'</script>";
?>
