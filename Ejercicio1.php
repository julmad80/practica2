<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio1</title>
</head>
<body>
	<h1>Ejercicio1</h1>
	<form action="#" mehod="post">
		<div>
			<label for="name">Nombre:</label>
		<input type="text" name="nombre" id="name">
		</div>
		<br>
		
		<div>
			<label for="apellido1">Primer apellido:</label>
			<!-- el label es una etiqueta no obligatoria -->
			<input type="apellido1" name="apellido1" id="apellido1">
		</div>
		<br>
		
		<div>
			<label for="apellido2">Segundo apellido:</label>
			 <input type="apellido2" name="apellido2" id="apellido2">	
		</div>

		<br>
		
		<div>
		<input type="submit">
		</div>

	</form>

		<?php

		// if ($_SERVER["REQUEST_METHOD"] == "POST")
		if(isset($_POST["nombre"])){
			if (empty($_POST["nombre"])) {
				echo "<p>El campo nombre está vacío</p>";
			}

			if (empty($_POST["apellido1"])) {
				echo "<p>El campo primer apellido está vacío</p>";
			}

			if (empty($_POST["apellido2"])) {
				echo "<p>El campo segundo apellido está vacío</p>";
			}

			if (!empty($_POST["nombre"] && !empty($_POST["apellido1"] && !empty($_POST["apellido2"])) {
				echo"<p>".$_POST["nombre"]." "
			}


		}

		?>

</body>
</html>