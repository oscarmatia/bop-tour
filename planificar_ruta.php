<?php
    require('connect.php');
      session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Planificar Ruta</title>
    <link rel="stylesheet" href="planificar_ruta.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="redireccion_cerrar_sesion.js"></script>
    <script src="redireccion_cerrar_sesion.js"></script>
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
        <a href="principal_registrado.php">
            <img src="logo.png" alt="" class="logo">
        </a>
        <a href="principal_registrado.php" style="color:white; margin-top: 10%; margin-left: 6%;">VOLVER ATRAS</a>
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
    <div class="contenedor_principal">
        <h3 style="color: white; margin-top: 1%; margin-left: 3%;">Planifica tu ruta</h3>
        <h5 style="color: white; margin-top: 1%; margin-left: 3%;">Se buscarán las mejores opciones disponibles conforme a tus necesidades</h5>
        <hr style="color: wheat; margin-top: 2%;">
        <div class="seccion1">
           <label style="color:white;">Región:  </label>
            <select name="regiones" id="">
                <option>I</option>
                <option>II</option>
                <option>III</option>
                <option>IV</option>
                <option>V</option>
                <option>VI</option>
                <option>VII</option>
                <option>VIII</option>
                <option>IX</option>
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
                <option>XIII</option>
                <option>XIV</option>
                <option>XV</option>
                <option>XVI</option>
            </select>
            <label style="color:white;">Provincia</label>
            <select name="provincia" id="">
                <option value="">Concepcion</option>
            </select>
            <label style="color: white;">Comuna</label>
            <select name="comuna" id="">
                <option value="">Concepcion</option>
                <option value="">San Pedro de la Paz</option>
                <option value="">Talcahuano</option>
            </select>
        </div>
        <div class="seccion2">
            <label style="color: white;">Pesos</label>
            <input type="text" value="" placeholder="maximo de pesos chilenos">
            <label style="color: white;">Locomocion</label>
            <select name="transporte" id="">
                <option value="">Bus</option>
                <option value="">Auto particular</option>
                <option value="">Locomocion colectiva</option>
            </select>
        </div>
        <a href="resultados_planificar_ruta.php">
            <input type="buttom" value="Buscar" id="boton_buscar">
        </a>
        <a href="gestionar_tour.php">
            <input type="button" value="Gestionar" id="boton_gestionar">
        </a>
    </div>
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
