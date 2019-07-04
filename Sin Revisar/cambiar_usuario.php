<?php
    require('connect.php');
    $con = conectar();
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar de usuario a productor</title>
    <link rel="stylesheet" href="cambiar.css">
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
    
    <h2 style="position: absolute; color: white; margin-top: 6%; margin-left: 10%;">Inscribirse como productor</h2>
    <center>
    <div class="formulario">
    
    <h3 style="position: absolute; color: white; margin-top: 4%; margin-left: 35%;">Aqui tienes que escribir los datos de productor:</h3> 
      
      <form action="agregar_productor.php" style="position: absolute; color: white; margin-left: 35%; margin-top: 8%; width: 40%;">
       <label style="float:left;">Nombre productor:</label><input type="text" placeholder="Juanito" style="margin-left: 1%;"><br>
       <label style="float:left;;">Apellido productor:</label><input type="text" placeholder="Perez" style="margin-left: 1%;"><br>
       <label style="float:left;">Rut:</label><input type="text" placeholder="123456789" style="margin-left: 26%;"><br>
       <label style="float:left;">Correo:</label><input type="text" placeholder="example@example.com" style="margin-left: 21%;"><br>
       <label style="float:left;">Contraseña:</label><input type="password" placeholder="********" style="margin-left: 13%;"><br>
       <label style="float:left;">Sexo:</label><input type="text" name="" value="" placeholder="M o F" style="margin-left: 24%;"><br>
       <label style="float:left;">Direccion:</label><input type="text" style="margin-left: 16.5%;" placeholder="pasaje n°casa"><br>
       <label style="float:left;">Fecha nacimiento:</label><input type="date" style="margin-left: -1%;" placeholder=""><br>
       
       <input type="submit" value="Enviar" class="boton_enviar">
       
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