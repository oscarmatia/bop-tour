<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Imagenes en Base de Datos</title>
</head>

<?php

	include 'connect.php';
	if(isset($_POST['save']))
	{
		$DBImagen->uploadImage($_FILES);
	}
	
?>

<body>	
	<form action="" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<input type="file" name="imagen">
		</div>
		
		<input type="submit" name="save">
		
	</form>
	<br>
	<table>
		
		<tr>
			
			<th>#</th>
			<th>Imagen</th>
			
			
		</tr>
		
		<?php
		
			$DBImagen = viewImages();
		
		?>
		
	</table>
</body>
</html>