<?php
    require('connect.php');
    session_start();
    $con = conectar();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Inventario</title>
    <link rel="stylesheet" href="actualizar_stock.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="redireccion_cerrar_sesion.js"></script>
</head>
<body>
    <div class="contenedor">
        <div class="barra_navegacion">
			    <img src="logo.png" alt="" class="logo">
	    </div>
            <a href="perfil_productor.php"> 
	            <img src="perfil.jpg" alt="" class="perfil_imagen">
	        </a>
	        <a href="perfil_productor.php" class="refe">VOLVER A PERFIL PRODUCTOR</a>
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
                <input type="button" value="Cerrar sesión" id="botonsito" onclick="redireccion_cerrar_sesion()">
            </div>
        </form>
    </div>
    <div class="cajita">
    <h2 style="color: white; position: fixed; margin-top: 5%; margin-left: 7%;">Actualizar Inventario</h2>
   
        <b style="position: absolute; color: white; margin-top: 16%; margin-left: 8%;">Aqui se vera un listado de tus productos y el stock correspondiente, podras sobrescribir el stock para modificarlo</b>
        <form action="actualiza_stock.php">
        <table class="tablita">
            <tr>
                <th>Producto</th>
                <th>Stock</th>
            </tr>
            <tr>
                <th>producto1</th>
                <th><input type="number" value="5" placeholder="5"></th>
            </tr>
            <tr>
                <th>producto2</th>
                <th><input type="number" value="6" placeholder="6"></th>
            </tr>
<!--
<?php
                $consulta_act = "SELECT * FROM producto_artesanal WHERE ID_productor ='$ID_productor'";
            
                $resultado_act = mysqli_query($con, $consulta_act);
                       
                while($row = mysqli_fetch_assoc($resultado_act)){
                    
                echo "<tr>";
                echo "<td>".$row["nombre_producto"]."</td>";
                echo "<td>".$row["cantidad"]."</td>";
                echo "</tr>";
                }
?>
-->
        </table>
        <br>
        <input id="boton_update" type="submit" value="Actualizar Stock">
        </form>

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