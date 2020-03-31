<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Formulario de registro</h2>
		<br>
		<form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
			<label for="foto">Foto</label>
			<input class="form-control input-sm" type="file" id="foto" name="foto"><br>
			<label for="nombre">Nombre</label>
			<input class="form-control input-sm" type="text" id="nombre" name="nombre"><br>
			<label for="apellido">Apellido</label>
			<input class="form-control input-sm" type="text" id="apellido" name="apellido"><br>
			<label for="email">E-mail</label>
			<input class="form-control input-sm" type="email" id="email" name="email"><br>
			<label for="clave">Clave</label>
			<input class="form-control input-sm" type="password" id="clave" name="clave"><br>
			
			<input class="btn btn-primary" type="submit" value="Registrar">
		</form>
	</div>
	<div class="text-center">
		<?php 
		if (isset($_FILES['foto']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['clave'])){
			require_once "./proceso/insert.php";
		}
		?>
	</div>

</body>
</html>
