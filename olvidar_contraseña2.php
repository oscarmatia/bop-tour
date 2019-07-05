<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Olvido contraseña</title>
    <link rel="stylesheet" href="olvidar_contraseña.css">
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
        <a href="principal.php"><img src="logo.png" alt="" class="logo">
        </a>
    </div>
    <div class="olvido">
       <div class="titulo">
            <h1>Recupera tu cuenta</h1>
       </div>
       <div class="adentro">
           <p style="color:white;">Tu contraseña es: </p>
           <?php
                echo '$password';
           ?>
           <br><br><br><br><br><br>
           <a href="principal.php">
               <input type="button" value="Volver al menu principal" class="boton2">
           </a>
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