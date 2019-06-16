<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar</title>
    <link rel="stylesheet" href="gestionar_tour.css">
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
        <a href="principal_registrado.php">
            <img src="logo.png" alt="" class="logo">
        </a>
    </div>
        <a href="perfil_usuario.php">
		    <img src="perfil.jpg" alt="" class="perfil_imagen">
		</a>
    <div class="sesion_usuario">
        <center>
            Hola
<?php
				echo $_SESSION['nombre_cliente'];
?>
            !!
        </center>
    </div>
    <form action="cerrar_sesion.php" method="post">
        <div class="boton">
            <input type="button" value="Cerrar Sesion" id="botonsito" onclick="redireccion_cerrar_sesion()"> 
        </div>
    </form>
    
    <footer class="footer">
        <div class="siguenos">
            <b>Siguenos</b>
            <center>
            <a href="https://www.facebook.com/Bop-tour-391667081681891/?modal=admin_todo_tour" target="_blank">
                <img src="fb.png" alt="" class="facebook">
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