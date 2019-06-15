<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Publicar Tienda</title>
        <link rel="stylesheet" href="publicar_tienda.css">
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
   <a href="perfil_productor.php"><img src="perfil.jpg" alt="" class="perfil_imagen">
   </a>
   <div class="sesion_usuario" style="margin-top: 0.9%;">
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
			<input type="button" value="Cerrar Sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
		</div>
		
	</form>
    <div class="general">
        <h1 style="color: white; margin-top: 2%; margin-left: 5%; font-family: Roboto;">Publica tu tienda</h1>
        <hr style="color: wheat;">
        <p style="color:wheat; margin-top: 2%; margin-left: 3%;">Tu tienda será publicado si cumple con las reglas de nuestro sistema.</p>
        <br>
        <div class="rellenar">
           <div class="title">
               <i class="material-icons" style="color: white; margin-left: 1%; margin-top: 0.2%;">
               forward
               </i>
               <p style="color: wheat; opacity: 1; margin-left: 1%; margin-top: 0.4%;">Información de tu tienda:</p>
               <br>
           </div>
           
           <form class="" action="insertar_tienda.php" method="post">
             
              <div style="margin-left: 1%;">
                 <br>
                  <label style="color: white;">Nombre de la tienda:   </label>
                  <input class="inp" type="text" name="nombre_tienda" value="" size="60">
              </div>
              <br>
              <div style="margin-left: 1%;">
                  <label style="color: white;">Dirección de la tienda:   </label>
                  <input class="inp" type="text" name="ubicacion" value="" size="59">
              </div>
              <br>
              <div style="margin-left: 1%;">
                  <label style="color: white;">Rubro de la tienda:   </label>
                  <input class="inp" type="text" name="rubro" value="" size="63">
              </div>
              <br>
              <div style="margin-left: 1%;">
              <form enctype="multipart/form-data" action="subir_imagen.php" method="POST">
                  <label style="color: white;">Subir imagen de la tienda:</label>
                <input name="uploadedfile" type="file" />
                
              </form>
             </div>
             <input class="boton2" type="submit" name="Publicar" value="Publicar Tienda" style="padding: 1%; margin: 4%; margin-left: 45%;"> 
             
            </form>
                       
        </div>
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