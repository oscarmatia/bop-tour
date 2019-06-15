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
        <img src="logo.png" alt="" class="logo">
    </div>
    <img src="perfil.jpg" alt="" class="perfil_imagen">
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
    <div class="contenedor">
        <div class="izquierda">
            
        </div>
        <div class="derecha">
            
        </div>
    </div>
    <footer class="footer">
     <div class="siguenos">
           <b>Siguenos</b>
     <center>
         
         <a href="https://www.facebook.com/Bop-tour-391667081681891/?modal=admin_todo_tour" target="_blank">    <img src="fb.png" alt="" class="facebook">
         </a>
				
         <a href="https://www.instagram.com/bop_tour/" target="_blank">
             <img src="insta.png" alt="" class="instagram">
         </a>
				
         <a href="https://twitter.com/BopTour" target="_blank">
		     <img src="twitter.png" alt="" class="twitter">
         </a>
        </center>
    </div>
   </footer>
</body>
</html>