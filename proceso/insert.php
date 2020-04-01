<?php 
	require_once "./php/conexion.php";
	$foto = $_FILES['foto']['name'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$clave = md5($_POST['clave']);

	$ruta = "./img/".$foto;


	if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta)):
		$query = "INSERT INTO tbl_usuario(foto, nombre, apellido, email, clave)VALUES('$foto', '$nombre','$apellido', '$email', '$clave')";
		if(SQL($query)):
			echo "<h4>Los datos de ".$nombre." se guardaron exitosamente.</h4>";
		else:
			echo "<h4>Ocurrio un error en el servidor</h4>";
		endif;
	else:
		echo "<h4>Ocurrio un error la foto no se subio</h4>";
	endif;


