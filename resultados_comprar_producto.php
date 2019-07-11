<?php
    require('connect.php');
    $con = conectar();
    session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link rel="stylesheet" href="after_planificar.css">
    <script src="redireccion_cerrar_sesion.js"></script>
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
        </center>
    </div>
    <form action="cerrar_sesion.php" method="post">
        <div class="boton">
            <input type="button" value="Cerrar Sesion" id="botonsito" onclick="redireccion_cerrar_sesion()"> 
        </div>
    </form>
    <div class="contenedor">
       <center>
        <h3 style="color: white; margin-top: 4%;">Estás a 1,5 km de distancia, tu viaje programado costará aproximadamente $10.500</h3>
        <h3 style="color: white; margin-top: 2%;">Haz acumulado 20 puntos</h3>
        <h4 style="color: white; margin-top: 3%;">¡DISFRUTA!</h4>
        <a href="opinion_turistico.php"><button class="boton_opinion">Danos tu opinion</button></a>
        </center>
        <br><br><br><br><br>
        <a href="resultados_planificar_ruta.php" style="color: white; margin-top: 10%; margin-left: 5%;">VOLVER ATRAS</a>
        <a href="principal.php" style="color: white; margin-top: 10%; margin-left: 60%;">VOLVER AL MENU PRINCIPAL</a>
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