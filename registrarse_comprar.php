<?php

	include("connect.php");
	$con= conectar();

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    
    <link rel="stylesheet" href="registrarse.css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
        
  </head>
  
  <body>
    <div class="contenedor" style="">
      
      <div class="barra_navegacion">
      
      <a href="principal.php">
			<img src="logo.png" alt="" class="logo">
	  </a>
	  </div>	
     
    
      
      <div class="login">
       
        <div class="fondo">
         <br>
          <h3>Registro de nuevo cliente</h3>
          
           <form class="" action="insertar_registro_comprar.php" method="post">
           
            <p style="color: white">Nombre</p><br>
            <input class="inp" type="text" name="nombre_cliente" value="">
            
            <p style="color: white">Apellido</p><br>
            <input class="inp" type="text" name="apellido_cliente" value="">
            
            <p style="color: white">Rut</p><br>
            <input class="inp" type="text" name="rut" value="">
           
            
            <p style="color: white">Email</p><br>
            <input class="inp" type="text" name="correo" value="">
            
            <p style="color: white">Contraseña</p> <br>
            <input class="inp" type="password" name="password" value="">
            
            <p style="color: white">Ingrese Nuevamente su Contraseña</p> <br>
            <input class="inp" type="password" name="password2" value="">
            
            <p style="color: white; display: inline-block;">Fecha de Nacimiento</p> 
            <p style="color: white; font-size: 18px; display: inline-block;  margin-left:8%;">Sexo:</p> 
            <br>
            <br>
            <input type="date" name="fecha_nacimiento" step="1" min="1900-01-01" max="2019-05-13" value="aaaa-mm-dd" style ="display: inline-block;">

            <input type="radio" name="sexo" value="H" style="margin-left: 14%;"> <p style="color: white; display: inline-block; font-size: 18px; ">Hombre</p>
        	<input type="radio" name="sexo" value="M"> <p style="color: white; display: inline-block; font-size: 18px">Mujer</p>
          	
          	<br>
            
            <input class="boton" type="submit" name="Registro" value="Registrarme">
            
          </form>
          
          	
          
        </div>
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
