<?php
    require('connect.php');
    $con = conectar();
    session_start();

    $ID_productor = $_GET["ID_productor"];

    $consulta_editar_perfil =  "SELECT * FROM productor WHERE ID_productor='$ID_productor'";

    $resultado_editar_perfil = mysqli_query($con, $consulta_editar_perfil);

    while($row = mysqli_fetch_assoc($resultado_editar_perfil)){
        
        $nombre_productor = $row["nombre_productor"];
        $apellido_productor = $row["apellido_productor"];
        $sexo = $row["sexo"];
        $direccion = $row["direccion"];
        $fecha_nacimiento = $row["fecha_nacimiento"];
        $num_visitas = $row["num_visitas"];
        $num_compras = $row["num_compras"];
        $ID_productor = $row["ID_productor"];
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
            <a href="perfil_productor.php"> 
	            <img src="perfil.jpg" alt="" class="perfil_imagen">
	        </a>
        <div class="sesion_usuario">
        <center>
            Hola
<?php
            echo $_SESSION['nombre_productor'];
            echo ' ';
            echo $_SESSION['apellido_productor'];
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
    
    <h2 style="position: absolute; color: white; margin-top: 6%; margin-left: 10%;">Editar perfil productor</h2>
    <center>
    <div class="formulario">
    
    <h3 style="position: absolute; color: white; margin-top: 4%; margin-left: 35%;">Aqui puedes modificar los datos:</h3> 
      
      <form action="modificar_productor.php" style="position: absolute; color: white; margin-left: 35%; margin-top: 8%;" method="post">
      
       <input type="text" name="nombre_productor" value="<?php echo $nombre_productor ?>" id="nombre" size="40"> <br>
       <input type="text" name="apellido_productor" value="<?php echo $apellido_productor ?>" id="apellido" size="40"><br>
       <input type="text" name="sexo" value="<?php echo $sexo ?>" id="sexo" size="40"><br>
       <input type="text" name="direccion" value="<?php echo $direccion ?>" id="direccion" size="40"><br>
       <input type="text" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento ?>" id="fecha_nacimiento" size="40"><br>
       <input type="text" name="num_visitas" value="<?php echo $num_visitas ?>" id="num_visitas" size="40"><br>
       <input type="text" name="num_compras" value="<?php echo $num_compras ?>" id="num_compras" size="40"><br>
       <input type="hidden" name="ID_productor" value="<?php echo $ID_productor ?>" id="id" size="40"> <br>
       
       <input type="submit" value="Editar perfil" class="boton_edit">
       
       </form>
         
        <a href="perfil_productor.php" style="color: white; float: left; margin-top: 1.5%; margin-left: 2%;">VOLVER A PERFIL</a> 
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