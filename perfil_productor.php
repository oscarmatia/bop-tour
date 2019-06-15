<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil Productor</title>
    <link rel="stylesheet" href="productor.css">
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
   <img src="perfil.jpg" alt="" class="perfil_imagen">
		
    <div class="sesion_usuario">
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
	<div class="contenedor">
	    
	
	<div class="izquierda">
	    <img src="perfil.jpg" alt="" class="perfil_imagen2">
	    <i class="material-icons" id="icon1" onclick="subir_foto()">
                add_circle_outline
        </i>
	    <div class="nombre_productor">
	    <center>
<?php
                       echo $_SESSION['nombre_productor']; 
                        echo ' ';
                       echo $_SESSION['apellido_productor'];   
?>
                
            <a href="editar_perfil.php" id="perfil">Editar perfil</a>
	    </center>
	    </div>
	    <hr align="center" class="linea">
	    <ul>
	        <li class="lista">N° visitas: 
<?php
                echo  $_SESSION['num_visitas'];
?>
            </li>
            <li class="lista">N° compras: 
<?php
                echo  $_SESSION['num_compras'];
?>
            </li>
	    </ul>
	</div>
	<div class="derecha">
	    <div class="arriba">
       
        <div class="title">
        <i class="material-icons" id="icon2">
            local_parking
        </i>
        <p style="color: white;" id="text1">Mis productos</p>
        </div>
        <hr align="center" id="linea2">
        <div class="productos">
            <p style="color: white;" id="products">producto 1</p>
            <p style="color: white;" id="products">producto 2</p>
        </div>
        <br>
        
        <div class="iconos">
	        <i class="material-icons" id="icon_add">
                add_circle
            </i>
            <a href="publicar_producto_artesanal.php" style="color:white;" id="text_add">Agregar producto</a>
            
            <i class="material-icons" id="icon3">
                add_circle
            </i>
            <a href="actualizar_stock.php" style="color: white;" id="text3">Actualizar stock</a>
	    </div>
	    
	    </div>
	    <hr align="center" class="linea2"> 
	    <div class="abajo">
       
        <div class="titulo">
            <i class="material-icons" id="icon2">
                arrow_forward_ios
            </i>
            <p style="color: white;" id="text1">Tienda</p>
        </div>
        <hr align="center" class="linea2">
        
        <div class="tiendas">
<?php
            echo  $_SESSION['nombre_tienda'];
?>
        </div>
        
        <div class="iconos2">
           <i class="material-icons" id="icon4">
                add_circle
           </i>
           <a href="publicar_tienda.php" id="text4">Publicar tienda</a>
            
        </div>
        
	        
	    </div>
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