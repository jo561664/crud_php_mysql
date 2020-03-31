<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<h2>Login</h2><br>
				<form action="">
					<input class="form-control input-sm text-center" type="text" placeholder="Usuario"></iput><br>
					<input class="form-control input-sm text-center" type="text" placeholder="Contraseña"></iput><br>
					<input class="btn btn-primary" type="submit" value="Iniciar">
				</form>
			</div>	
		</div>
	</div>
	<?php 
	if (isset($_POST['foto']) and isset($_POST['nombre']) and and isset($_POST['apellido']) and and isset($_POST['email']) and isset($_POST['clave'])):
		require_once "./proceso/insert.php";

	 ?>
</body>
</html>