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
  <link rel="stylesheet" type="text/css" href="previo_registro.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">

</head>

<body>
  <div class="contenedor" style="">

    <div class="barra_navegacion">

      <a href="principal.php">
       <img src="logo.png" alt="" class="logo">
     </a>
   </div>	



   <div class="login">

    <div class="fondo" style="margin-right: 15%; width: 90%;">
     <br>
     <h3 style="margin-top: 5%;">Bienvenido a BOP-TOUR</h3>

     <center><h2 style="margin-top: 4%; color: white">Selecciona tu tipo de usuario antes de registrarte</h2></center>

     <div class="cont-tipo-usuario">


      <div class="cont-uu">
        <center>
         <a href="registrarse_comprar.php"><i style="font-size: 150px; color: white" class="material-icons">supervisor_account</i>
          <h2 style="color:white;margin-top: 5%;">Cliente</h2></a>


        </center>
      </div>

      <div class="cont-pp">
        <center>
          <a href="registrarse_visitar.php"><i style="font-size: 150px; color: white" class="material-icons">monetization_on </i>
            <h2 style="color: white; margin-top: 5%;">Productor</h2></a>

          </center>
        </div>  


      </div>



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
