<?php

	class DBImagen
	{
		private $DBConexion;
		
		function __construct($Conexion)
		{
			$this->DBConexion = $Conexion;
		}
		
		
		public function uploadImage($Imagen)
		{
			$ruta = "Images/".$Imagen['imagen']['name'];
			move_uploaded_file($Imagen['imagen']['tmp_name'], $ruta);
			$SQLStatement = $this->DBConexion->prepare("INSERT INTO producto_artesanal (imagen) VALUES (:url )");
			
			$SQLStatement->bindParam(":url", $ruta);
			
			$SQLStatement->execute(); 
		}
		
		public function viewImage()
		{
			$SQLStatement = $this->prepare("SELECT * FROM producto_artesanal");
			
			$SQLStatement = execute();
			
			while( $img = SQLStatement->fetch(PDO::FETCH_ASSOC) )
			{ 
?>				
				<tr>
					<td><?php  print($img['id']);  ?></td>
					<td><center><img src="<?php print($img['imagen']);  ?>" width="200" alt=""></center></td>
				</tr>
				
			}
		}
		
	}

?>