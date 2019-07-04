<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil usuario</title>
    <link rel="stylesheet" href="perfil_usuario.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="redireccion_cerrar_sesion.js"></script>
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
        <a href="principal_registrado.php"><img src="logo.png" alt="" class="logo">
        </a>
    </div>
    <img src="perfil.jpg" alt="" class="perfil_imagen">
    <div class="sesion_usuario">
        <center>
            Hola
<?php
            echo $_SESSION['nombre_cliente'];
            echo ' ';
?>
           !!
        </center>
    </div>
    <form action="cerrar_sesion.php" method="post">
        <div class="boton">
            <input type="button" value="Cerrar sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
        </div>
    </form>
    <div class="contenedor">
        <div class="izquierda">
            <img src="perfil.jpg" alt="" class="perfil_imagen2">
	    <i class="material-icons" id="icon1" onclick="subir_foto()">
                add_circle_outline
        </i>
	    <div class="nombre_cliente">
	    <center>
	            <p style="color:white;margin-left: 16%; float:left;">
<?php
                echo $_SESSION['nombre_cliente']; 
                echo ' ';
?>
                </p>                
            <a href="editar_perfil_usuario.php" id="perfil">Editar perfil</a>
        </center>
	    </div>
      <ul class="lista">
          <li style="margin-top:2%; color: white;">Puntos acumulados: 
<?php
              echo $_SESSION['puntos'];
?>      
          </li>
          <li style="margin-top:2%; color: white;">Puntos vencidos: 0</li>
      </ul>
       <hr align="center" class="linea">
        </div>
        <div class="derecha">
            <p style="color: white; margin-top: 2%; margin-left: 5%;">Mis Rutas</p>
            <hr style="color: black; margin-top: 1%;">
            <p style="color: white; margin-top: 2%; margin-left: 5%;">Ruta 1 <a href="compartir_ruta.php"><i class="material-icons" style="color:white; float: right; margin-right: 8%;">
                share
            </i>
            </a>
            </p>
            
            <p style="color: white; margin-top: 2%; margin-left: 5%;">Ruta 2
            <a href="compartir_ruta.php"><i class="material-icons" style="color:white; float: right; margin-right: 8%;">
                share
            </i>
            </a>
            </p>
            
        </div>
        <div class="derecha_boton">
           <a href="promociones.php">
            <input type="button" id="boton_canjear" value="Canjear Promociones">
           </a>
        </div>
        <div class="derecha_boton_new">
            <a href="cambiar_usuario.php">
                <input type="button" id="boton_cambiar" value="Quiero convertirme en productor!">
            </a>
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