<!DOCTYPE html>
<html>
<head>
	<title>Taller</title>
</head>
<body>
	<?php 
		include ('models/modelo.php');
		if((isset($_POST['nombre'])) && (isset($_POST['precio']))){
			$nuevoServicio = new Service();
			$servA = $nuevoServicio->setServicio($_POST['nombre'], $_POST['precio']);
		}
	 ?>
	<h1>Nuevo servicio</h1>
	<form action=# method="post">
		<input type="text" name="nombre">
		<input type="number" name="precio">
		<input type="submit" value="afegir">
	</form>

	<a href="controllers/controlador.php">Listado de Servicios</a>


</body>
</html>