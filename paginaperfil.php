<?php
	require("connect.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>subir imagen puñetera al server</title>
</head>
<body>
	
	<form method='POST' action='cambiodatospersonales.php' enctype="multipart/form-data">
    <input type='file' name='UploadImage'>
    <input type='submit' value="submit">
	</form>
		
</body>
</html>