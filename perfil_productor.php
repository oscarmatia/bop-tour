<?php
require('connect.php');
session_start();
$con= conectar();
$consulta2='SELECT ID_producto_artesanal, nombre_producto, cantidad, descripcion,precio,comuna,categoria_producto from producto_artesanal';
$resultado=mysqli_query($con,$consulta2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil Productor</title>
    <link rel="stylesheet" href="perfil_productor.css">
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
           <b style="color:white;">
            <?php
            echo $_SESSION['nombre_productor']; 
            echo ' ';
            echo $_SESSION['apellido_productor'];   
            ?>
        </b>   
        <a href="editar_perfil_productor.php" id="perfil">Editar perfil</a>
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
        <center>


            <table class="tablita" style="color: white">

                <tr style="margin-left: 2%;">

                    <th class="eu">Id</th>
                    <th class="eu">nombre</th>
                    <th class="eu">Cantidad</th>
                    <th class="eu">Descripción</th>
                    <th class="eu">Precio</th>
                    <th class="eu">Comuna</th>
                    <th class="eu">Categoria</th>

                </tr>

                <?php
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["ID_producto_artesanal"]."</td>";
                    echo "<td>".$fila["nombre_producto"]."</td>";
                    echo "<td>".$fila["cantidad"]."</td>";
                    echo "<td>".$fila["descripcion"]."</td>";
                    echo "<td>".$fila["precio"]."</td>";
                    echo "<td>".$fila["comuna"]."</td>";
                    echo "<td>".$fila["categoria_producto"]."</td>";
                    echo "</tr>";
                }
                ?>

            </table>



        </center>
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
        <b style="color:white;">
            <?php       
//            
//            $consulta22 = "SELECT * FROM tienda WHERE ID_productor = '$ID_productor'";
//            
//            $resultado22 = mysqli_query($con, $consulta22);
//            
//            while($row2 = mysqli_fetch_assoc($resultado22)){
//                $nombre_tienda = row["nombre_tienda"];
//            }
            echo $_SESSION['ID_productor'];
            ?>       
        </b>
    </div>

    <div class="iconos2">
      <a href="publicar_tienda.php">
         <i class="material-icons" id="icon4">
            add_circle
        </i>
    Publicar tienda</a> 

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