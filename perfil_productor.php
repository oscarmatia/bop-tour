<?php
	include("connect.php");
	$con= conectar();

    $consulta = "SELECT * FROM productor";
    $resultado = mysqli_query($con,$consulta);

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
                    while($row = mysqli_fetch_assoc($resultado)){
                       echo $row['nombre_productor']; 
                        echo ' ';
                       echo $row['apellido_productor']; 
                    }     
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
            
            $consulta = "SELECT * FROM productor";
            $resultado = mysqli_query($con,$consulta);
            
                    while($row = mysqli_fetch_assoc($resultado)){
                       echo $row['nombre_productor']; 
                        echo ' ';
                       echo $row['apellido_productor']; 
                    }     
                ?>
                
            <a href="editar_perfil.php" id="perfil">Editar perfil</a>
	    </center>
	    </div>
	    <hr align="center" class="linea">
	    <ul>
	        <li class="lista">N° visitas: </li>
            <li class="lista">N° compras: </li>
	    </ul>
	</div>
	<div class="derecha">
	    <div class="arriba">
       
        <div class="title">
        <i class="material-icons" id="icon2">
            local_parking
        </i>
        <p id="text1">Mis productos</p>
        </div>
        <hr align="center" id="linea2">
        <div class="productos">
            <p id="products">producto 1</p>
            <p id="products">producto 2</p>
        </div>
        <br>
        
        <div class="iconos">
	        <i class="material-icons" id="icon_add">
                add_circle
            </i>
            <p id="text_add">Agregar producto</p>
            
            <i class="material-icons" id="icon3">
                add_circle
            </i>
            <p id="text3">Actualizar stock</p>
	    </div>
	    
	    </div>
	    <hr align="center" class="linea2"> 
	    <div class="abajo">
       
        <div class="titulo">
            <i class="material-icons" id="icon2">
                arrow_forward_ios
            </i>
            <p id="text1">Tienda</p>
        </div>
        <hr align="center" class="linea2">
        
        <div class="tiendas">
            
            <p id="tiends">tienda 1</p>
        </div>
        
        <div class="iconos2">
           <i class="material-icons" id="icon4">
                add_circle
           </i>
           <p id="text4">Publicar tienda</p>
            
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