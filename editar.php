<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./librerias/style.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Formulario de registro</h2>
		<br>
		<form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
			<div class="form_">
				<label for="foto">Foto</label>
				<input class="form-control input-sm" type="file" id="foto" name="foto"><br>
				<label for="nombre">Nombre</label>
				<input class="form-control input-sm" type="text" id="nombre" name="nombre"><br>
				<label for="apellido">Apellido</label>
				<input class="form-control input-sm" type="text" id="apellido" name="apellido"><br>
				<label for="email">E-mail</label>
				<input class="form-control input-sm" type="email" id="email" name="email"><br>
			</div>
			<div class="form_">
				<h4>Opcional</h4>
				<label for="clave1">Clave original</label>
				<input class="form-control input-sm" type="password" id="clave1" name="clave1"><br>
				<label for="clave2">Nueva clave</label>
				<input class="form-control input-sm" type="password" id="clave2" name="clave2"><br>
				<label for="clave3">Confirmar clave</label>
				<input class="form-control input-sm" type="password" id="clave3" name="clave3"><br>
			</div><br>
			<input class="btn btn-warning" type="submit" value="Actualizar">
		</form>
	</div>
</body>
</html>