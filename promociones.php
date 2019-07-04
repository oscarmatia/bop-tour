<?php
        session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promociones</title>
    <link rel="stylesheet" href="promociones.css">
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
			<a href="principal_registrado.php">
			    <img src="logo.png" alt="" class="logo">
            </a>
            <a href="perfil_usuario.php" style="color:white; margin-left: 6%; margin-top:1.2%; position:absolute;">Volver a perfil</a>
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
			<input type="button" value="Cerrar Sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
		</div>
	</form>
	<div class="contenedor">
	    <div class="co1">
        <center>
            <div class="titulo">
                <h1 style="color:white;">Promocion 1</h1>    
            </div>
            <div class="dentro">
                <h2>10% de descuento!</h2>
                <h2>en tu proxima compra de algun producto artesanal</h2>
                <br><br><br>
                <a href="canje_promociones.php">
                    <input type="button" value="Canjear Promocion" class="boton_canjear">
                </a>
            </div>  
        </center>          
	    </div>
	    <div class="co2">
        <center>
	        <div class="titulo">
                <h1 style="color:white;">Promocion 2</h1>    
            </div>
            <div class="dentro">
                <h2>25% de descuento!</h2>
                <h2>en tu proxima compra de algun producto artesanal</h2>
                <br><br><br>
                <a href="canje_promociones.php">
                    <input type="button" value="Canjear Promocion" class="boton_canjear">
                </a>
            </div>
        </center>
	    </div>
	    <div class="co3">
        <center>
	        <div class="titulo">
                <h1 style="color:white;">Promocion 3</h1>    
            </div>
            <div class="dentro">
                <h2>50% de descuento!</h2>
                <h2>en tu proxima compra de algun producto artesanal</h2>
                <br><br><br>
                <a href="canje_promociones.php">
                    <input type="button" value="Canjear Promocion" class="boton_canjear">
                </a>
            </div>
        </center>
	    </div>
	    <div class="co4">
        <center>
	        <div class="titulo">
                <h1 style="color:white;">Promocion 4</h1>    
            </div>
            <div class="dentro">
                <br><br>
                <h2>Degustacion gratis del producto que tu eligas</h2>
                <br><br><br>
                <a href="canje_promociones.php">
                    <input type="button" value="Canjear Promocion" class="boton_canjear">
                </a>
            </div>
        </center>
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