<?php
    require('connect.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Compartir Ruta</title>
    <link rel="stylesheet" href="compartir_ruta.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="redireccion_cerrar_sesion.js"></script>
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
   <div class="barra_navegacion">
			<img src="logo.png" alt="" class="logo">
   </div> 
   <a href="perfil_usuario.php"><img src="perfil.jpg" alt="" class="perfil_imagen">
   </a>
   <div class="sesion_usuario" style="margin-top: 0.9%;">
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
			<input type="button" value="Cerrar Sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
		</div>
		
	</form>
	
	<div class="general">
        <h1 style="color: white; margin-top: 2%; margin-left: 5%; font-family: Roboto;">Compartir ruta</h1>
        <hr style="color: wheat;">
        <p style="color:wheat; margin-top: 2%; margin-left: 3%;">Aqui podras seleccionar la red social donde podras compartir tus rutas.</p>
        <br>
        <div class="rellenar">
           <div class="title">
               <i class="material-icons" style="color: white; margin-left: 1%; margin-top: 0.2%;">
               forward
               </i>
               <p style="color: wheat; opacity: 1; margin-left: 1%; margin-top: 0.4%;">Redes Sociales</p>
               <br>
           </div>
           <center>
               <table class="tablita" style="color: white; text-align: center;">
                   <tr style="margin-left: 2%;">
                       <th>Red Social</th>
                       <th>Opciones</th>
                   </tr>
                   <tr>
                       <td><img src="fb.png" height="60px"></td>
                       <td><a href="https://www.facebook.com"><button style="color: white; background-color: green; border-color: green; cursor: pointer;">Compartir</button></a></td>
                   </tr>
                   <tr>
                       <td><img src="insta.png" height="60px"></td>
                       <td><a href="https://www.instagram.com"><button style="color: white; background-color: green; border-color: green; cursor: pointer;">Compartir</button></a></td>
                   </tr>
                   <tr>
                       <td><img src="twitter.png" height="50px"></td>
                       <td><a href="https://www.twitter.com"><button style="color: white; background-color: green; border-color: green; cursor: pointer;">Compartir</button></a></td>
                   </tr>
               </table>
           </center>
                  
                       
        </div>
    </div>
	
	
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