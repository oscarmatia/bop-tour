<?php
    require('connect.php');
    $con = conectar();
    session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Locomocion</title>
    <link rel="stylesheet" href="locomocion.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="redireccion_cerrar_sesion.js"></script>
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
        <a href="principal_registrado.php"><img src="logo.png" alt="" class="logo">
        </a>
        <a href="perfil_usuario.php" style="color: white; margin-left: 6%;">VOLVER A PERFIL</a>
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
    <div class="general">
        <h1 style="color: white; margin-top: 2%; margin-left: 5%; font-family: Roboto;">Agregar Transporte</h1>
        <hr style="color: wheat;">
        <p style="color:wheat; margin-top: 2%; margin-left: 3%;">Ingresa el tipo de vehiculo que posees y si no posees ingresa 'Sin locomocion'</p>
        <br>
        <div class="rellenar">
           <div class="title">
               <i class="material-icons" style="color: white; margin-left: 1%; margin-top: 0.2%;">
               forward
               </i>
               <p style="color: wheat; opacity: 1; margin-left: 1%; margin-top: 0.4%;">Inserta los siguientes datos:</p>
               <br>
           </div>
           
           <form action="insertar_locomocion.php" method="post">
             
              <div style="margin-left: 1%;">
                 <br>
                  <label style="color: white;">Tipo vehiculo:   </label>
                  <input class="inp" type="text" name="vehiculo" value="" size="60" style="margin-left: 5%;">
              </div>
              <br>
              <div style="margin-left: 1%;">
                  <label style="color: white;">Descripcion: </label>
                  <input class="inp" type="text" name="descripcion" size="60" style="margin-left: 5.9%;">
              </div>
              <br>
             <div style="margin-left: 0%;">
                <input type="hidden" name="ID_cliente" value="<?php echo $ID_cliente ?>">  
             </div>
             
             <input class="boton2" type="submit" name="" value="Agregar vehiculo" style="padding: 1%; margin: 4%; margin-left: 45%; color: white;"> 
            </form>
                       
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