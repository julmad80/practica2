<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		
		if (!empty($_POST["edad1"]) && !empty($_POST["edad2"]) && !empty($_POST["edad3"] && is_numeric($_POST["edad1"]) &&is_numeric($_POST["edad2"]) && is_numeric($_POST["edad3"]) )) {
			
			echo "La media de las edades introducidas es: ";
			echo ($_POST["edad1"]+$_POST["edad2"]+$_POST["edad3"]/3);

		}else {
			echo "Introduzca un valor numérico";
		}			
	?>
	<form action="#" method="POST">
		<input type="number" name="edad1" id="edad1">
		<input type="number" name="edad2" id="edad2">
		<input type="number" name="edad3" id="edad3">
		<input type="submit" value="Enviar">
	</form>

</body>
</html>