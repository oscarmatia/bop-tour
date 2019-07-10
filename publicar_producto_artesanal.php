<?php
    require('connect.php');
    $con = conectar();
    session_start();
    $ID_productor = $_GET['ID_productor'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Publicar producto artesanal</title>
	<link rel="stylesheet" type="text/css" href="publicar_producto_artesanal.css">
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
        <h1 style="color: white; margin-top: 2%; margin-left: 5%; font-family: Roboto;">Publica tu producto</h1>
        <hr style="color: wheat;">
        <p style="color:wheat; margin-top: 2%; margin-left: 3%;">Tu producto será publicado si cumple con las reglas de nuestro sistema.</p>
        <br>
        <div class="rellenar">
           <div class="title">
               <i class="material-icons" style="color: white; margin-left: 1%; margin-top: 0.2%;">
               forward
               </i>
               <p style="color: wheat; opacity: 1; margin-left: 1%; margin-top: 0.4%;">Información de tus productos:</p>
               <br>
           </div>
           
           <form action="guardar_producto_artesanal.php?ID_productor=<?php echo $_SESSION['ID_productor']; ?>" method="post">
             
              <div style="margin-left: 1%;">
                 <br>
                  <label style="color: white;">Nombre del producto: </label>
                  <input class="inp" type="text" name="nombre_producto" size="60" style="margin-left: 7%;">
              </div>
              <br>
              <div style="margin-left: 1%;">
                  <label style="color: white;">Cantidad del producto:</label>
                  <input class="inp" type="text" name="cantidad" size="60" style="margin-left: 6.5%;">
              </div>
              <br>
              <div style="margin-left: 1%;">
                  <label style="color: white;">Descripcion del producto:</label>
                  <input class="inp" type="text" name="descripcion" size="60" style="margin-left: 5%;">
              </div>
              <br>
              <div style="margin-left: 1%;">
                  <label style="color: white;">Precio del producto: </label>
                  <input type="text" name="precio" style="margin-left: 8%;" size="60">

             </div>
             <br>
             <div style="margin-left: 1%;">
                <label style="color: white;">Categoria del producto:</label>
                <input type="text" name="categoria_producto" size="60" style="margin-left: 6.2%;">
                 
             </div>
             <div style="margin-left: 1%;">
                <input type="hidden" name="ID_productor" value="<?php echo $ID_productor ?>">  
             </div>
             
             <input class="boton2" type="submit" name="Publicar" value="Agregar Producto" style="padding: 1%; margin: 4%; margin-left: 45%; color: white;"> 
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