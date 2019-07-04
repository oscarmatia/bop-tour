<?php

require_once 'funciones.php';

if(!empty($_POST)){
      if (subir_fichero('Images','campofotografia'))
	  {
		  echo 'Archivo recibido correctamente';
		  echo "<img src="obtenerfotografia.php?id=1">";
	  }
         
}
?>	