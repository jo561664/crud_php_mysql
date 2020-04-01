<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador</title>
	<link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<form action="" method="POST" autocomplete="off">
					<input type="text" name="palabra">
					<input class="btn btn-warning" type="submit" value="Buscar">
				</form>
			</div>
		</div>

		<?php 
		if(isset($_POST['palabra'])):
			require_once "./proceso/buscador.php";
		endif;
		 ?>
	</div> 
</body>
</html>