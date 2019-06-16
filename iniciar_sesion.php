<!--
Iniciar Sesion productor
-->
    

<?php
	include("connect.php");
	$con= conectar();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion Productor</title>
    
    <link rel="stylesheet" href="iniciar_sesion.css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    
    <script src="redireccion_iniciar_sesion_productor.js"></script>
    
  </head>
  
  <body>
    <div class="contenedor" style="">
      
      <div class="barra_navegacion">
      
      <a href="principal.php">
			<img src="logo.png" alt="" class="logo">
	  </a>
	  	  
	  </div>	
        
      <div class="login">
        
          <img src="perfil.jpg" alt="User">
          <h3>Inicio de Sesión</h3>
          
           <form class="" action="validar_productor.php" method="post">
            
            <p style="color: white">Email</p><br>
            <input class="inp" type="text" name="correo" value="">
            <br>
            
            <p style="color: white">Contraseña</p> <br>
            <input class="inp" type="password" name="password" value="">
            <br>
            <a href="olvidar_contraseña.php" class="he">He olvidado mi contraseña</a>
            <br>
            
            <label for="" style="display: block; padding-left: 15px; text-indent: -15px;color: white; margin-top: 3%; margin-left: 25%;">
            <input type="checkbox" style="width: 13px; height: 13px; padding: 0; margin:0; vertical-align: bottom; position: relative; top: -1px; *overflow: hidden;">
            No cerrar sesion
            </label>
            <input class="boton" type="submit" name="inicio" value="Iniciar Sesión" onclick="sesion_iniciada_productor()">
            
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
