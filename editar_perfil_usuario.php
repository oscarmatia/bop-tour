<?php
    require('connect.php');
    $con = conectar();
    session_start();

    $ID_cliente = $_GET["ID_cliente"];

    $consulta_editar_perfil_cliente =  "SELECT * FROM cliente WHERE ID_cliente='$ID_cliente'";

    $resultado_editar_perfil_cliente = mysqli_query($con, $consulta_editar_perfil_cliente);

    while($row = mysqli_fetch_assoc($resultado_editar_perfil_cliente)){
        
        $nombre_cliente = $row["nombre_cliente"];
        $apellido_cliente = $row["apellido_cliente"];
        $sexo = $row["sexo"];
        $direccion = $row["direccion"];
        $fecha_nacimiento = $row["fecha_nacimiento"];
        $puntos = $row["puntos"];
        $ID_cliente = $row["ID_cliente"];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar perfil</title>
    <link rel="stylesheet" href="editar_perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="redireccion_cerrar_sesion.js"></script>
    
</head>
<body>
    <div class="contenedor">
        <div class="barra_navegacion">
			    <img src="logo.png" alt="" class="logo">
	    </div>
            <a href="perfil_usuario.php"> 
	            <img src="perfil.jpg" alt="" class="perfil_imagen">
	        </a>
        <div class="sesion_usuario">
        <center>
            Hola
<?php
            echo $_SESSION['nombre_cliente'];
            echo ' ';
            echo $_SESSION['apellido_cliente'];
?>
           !!
        </center>
        </div>
        <form action="cerrar_sesion.php" method="post">
            <div class="boton">
                <input type="button" value="Cerrar sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
            </div>
        </form>
    </div>
    
    <h2 style="position: absolute; color: white; margin-top: 6%; margin-left: 10%;">Editar perfil usuario</h2>
    <center>
    <div class="formulario">
    
    <h3 style="position: absolute; color: white; margin-top: 4%; margin-left: 35%;">Aqui puedes modificar los datos:</h3> 
      
      <form action="modificar_cliente.php" style="position: absolute; color: white; margin-left: 35%; margin-top: 8%;" method="post">
       <input type="text" name="nombre_cliente" value="<?php echo $nombre_cliente ?>" id="nombre" size="40"> <br>
       <input type="text" name="apellido_cliente" value="<?php echo $apellido_cliente ?>" id="apellido" size="40"><br>
       <input type="text" name="sexo" value="<?php echo $sexo ?>" id="sexo" size="40"><br>
       <input type="text" name="direccion" value="<?php echo $direccion ?>" id="direccion" size="40"><br>
       <input type="text" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento ?>" id="fecha_nacimiento" size="40"><br>
       <input type="text" name="puntos" value="<?php echo $puntos ?>" id="num_visitas" size="40"><br>
       <input type="hidden" name="ID_cliente" value="<?php echo $ID_cliente ?>" id="id" size="40"> <br>
       
       <input type="submit" value="Editar perfil" class="boton_edit">
       
       </form>
         
        <a href="perfil_usuario.php" style="color: white; float: left; margin-top: 1.5%; margin-left: 2%;">VOLVER A PERFIL</a> 
    </div>
    
         
    </center>
    <footer class="footer"></footer>
		<div class="central">
			
				<div class="siguenos">
					<b>Siguenos</b>				</div>
			
				<a href="https://www.facebook.com/Bop-tour-391667081681891/?modal=admin_todo_tour" target="_blank">
					<img src="fb.png" alt="" class="facebook">
				</a>
				
				<a href="https://www.instagram.com/bop_tour/" target="_blank">
					<img src="insta.png" alt="" class="instagram">
				</a>
				
				<a href="https://twitter.com/BopTour" target="_blank">
					<img src="twitter.png" alt="" class="twitter">
				</a>
		</div>
</body>
</html>