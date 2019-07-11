<?php
    require('connect.php');
    $con = conectar();
    session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link rel="stylesheet" href="buscar_productos_artesanales.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="redireccion_cerrar_sesion.js"></script>
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
        <a href="principal_registrado.php"><img src="logo.png" alt="" class="logo">
        </a>
    </div>
    <img src="perfil.jpg" alt="" class="perfil_imagen">
    <div class="sesion_usuario">
        <center>
            Hola
<?php
            echo $_SESSION['nombre_cliente'];
            echo ' ';
            echo $_SESSION['apellido_cliente'];
?>
           !!
        </center>
    </div>
    <form action="cerrar_sesion.php" method="post">
        <div class="boton">
            <input type="button" value="Cerrar sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
        </div>
    </form>
    
    <div class="contenedor">
      <h3 style="color: white; margin-left: 5%; margin-top: 2%;">Productos</h3>
       <center>
           <table class="tablita" style="color: white; text-align: center;">
               <tr>
                   <th>Imagen</th>
                   <th>Nombre producto</th>
                   <th>Descripcion</th>
                   <th>Cantidad</th>
                   <th>Precio unitario</th>
                   <th>Opciones</th>
               </tr>
                   <?php
                        $busqueda = $_POST['busqueda'];
	
                        $consulta_sear = "SELECT * FROM producto_artesanal WHERE nombre_producto like '%".$busqueda."%' ";
						
		                $resultado_sear = mysqli_query($con, $consulta_sear);
                   
                        while($fila_sear = mysqli_fetch_array($resultado_sear)){
                    ?>
                    <tr>
                        <td><img src="Images/<?php echo $fila_products['imagen']; ?>" height="20px"></td>
                        <td><?php echo $fila_sear['nombre_producto']; ?></td>
                        <td><?php echo $fila_sear['descripcion']; ?></td>
                        <td><?php echo $fila_sear['cantidad']; ?></td>
                        <td><?php echo $fila_sear['precio']; ?></td>
                        <td><a href="resultados_comprar_producto.php"><button style="color:white; background-color: green; border-color: green;">IR</button></a></td>
                    <?php
                        }
                   ?>
               </tr>
           </table>
       </center>
        
    </div>

	

	<?php

		
					
		while($fila_sear = mysqli_fetch_array($resultado_sear))
		{
	
		
			echo "<li>Producto:   $fila_sear[nombre_producto] <br> 
			
			<td> Descripcion:  $fila_sear[descripcion] <br>
				
			<td>  Stock: $fila_sear[cantidad] <br>
					
			<td> Precio Unitario:  $fila_sear[precio] <br><br>";
			
		
	
   		}
	?>
	
	

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