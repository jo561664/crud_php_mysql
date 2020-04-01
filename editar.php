<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php 
		if (isset($_GET['id'])):
			$id = $_GET['id'];
			require_once "./php/conexion.php";
			$query = "SELECT * FROM tbl_usuario WHERE doc = '$id'";
			$consulta = SQL($query);
			$fila = $consulta->fetch_object();
	 ?>
	<div class="container">
		<h2 class="text-center">Actualizar registro</h2>
		<br>
		<form action="proceso/update.php" method="POST" autocomplete="off" enctype="multipart/form-data">
			<div class="form_">
				<input type="text" hidden="" name="id" value="<?php echo @$fila->doc; ?>">
				<label for="nombre">Nombre</label>
				<input class="form-control input-sm" type="text" id="nombre" name="nombre" value="<?php echo @$fila->nombre; ?>"><br>
				<label for="apellido">Apellido</label>
				<input class="form-control input-sm" type="text" id="apellido" name="apellido" value="<?php echo @$fila->apellido; ?>"><br>
				<label for="email">E-mail</label>
				<input class="form-control input-sm" type="email" id="email" name="email" value="<?php echo @$fila->email; ?>"><br>
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
<?php endif; ?>
</body>
</html>