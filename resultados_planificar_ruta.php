<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="resultados_planificar_ruta.css">
    <script src="redireccion_cerrar_sesion.js"></script>
</head>
<body>
    <img src="camino_campo.jpg" alt="" class="imagen_fondo">
    <div class="barra_navegacion">
        <a href="principal_registrado.php">
            <img src="logo.png" alt="" class="logo">
        </a>
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
        </center>
    </div>
    <form action="cerrar_sesion.php" method="post">
        <div class="boton">
            <input type="button" value="Cerrar Sesion" id="botonsito" onclick="redireccion_cerrar_sesion()"> 
        </div>
    </form>
    <div class="contenedor">
        <h3 style="color:white; margin-left: 5%; margin-top: 2%;">Resultados</h3>
        <div class="caja_resultados">	
        
			 <table style="width:100%; color: white; text-align:center; border-color: white;" border="3">
				  <tr>
                    <th>Imagen</th>
				    <th>Lugar Turistico</th>
				    <th>Direccion</th>
				    <th>Comuna</th>
				    <th>Opciones</th>
				  </tr>
					<?php
                        require('connect.php');
                        $con = conectar();
                        
                        $consulta_lugar = "SELECT * FROM lugar_turistico JOIN comuna USING (cut_comuna)";
                 
                        $resultado_lugar = mysqli_query($con, $consulta_lugar);
                    
						while($row_r = mysqli_fetch_assoc($resultado_lugar)){
                            
                            $_SESSION['ID_lugar_turistico'] = $row_r['ID_lugar_turistico'];
                    ?>
                        <tr>
                            <td><img src="Images/<?php echo $row_r['imagen']; ?>" height="90px"></td>
                            <td><?php echo $row_r['nombre_lugar_turistico']; ?></td>
                            <td><?php echo $row_r['direccion']; ?></td>
                            <td><?php echo $row_r['nombre_comuna']; ?></td>
                            <td><a href="after_planificar_ruta.php?ID_lugar_turistico=<?php echo $_SESSION['ID_lugar_turistico']; ?>"><button style="background: green; border-color: green; color:white;">IR</button></a></td>
                        </tr>
                    <?php
					} 
					?>
			</table>
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