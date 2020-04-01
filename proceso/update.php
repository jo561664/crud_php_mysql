<?php 
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$clave1 = md5($_POST['clave1']);
	$clave2 = md5($_POST['clave2']);
	$clave3 = md5($_POST['clave3']);

	require_once "../php/conexion.php";
	if($clave1 != "" && $clave2 != "" && $clave3 != ""):
		$query = "SELECT * FROM tbl_usuario WHERE doc = '$id'";
		$consulta = SQL($query);
		$fila = $consulta->fetch_object();
		if ($clave1 == $fila->clave):
			if ($clave2 == $clave3):
				$campos = "nombre='$nombre', apellido='$apellido', email='$email', clave='$clave2'";
			else:
				echo "Las contraseñas no coinciden";
				exit();
			endif;	
		else:
			echo "La contraseña original es incorecta";
			exit();
		endif;	
	else:
		$campos = "nombre='$nombre', apellido='$apellido', email='$email'";
	endif;

	$query = "UPDATE tbl_usuario SET $campos WHERE doc = '$id'";
	if(SQL($query)):
		echo "Se han actualizado los datos de ".$nombre;
	else:
		echo "Ocurrio un error en el servidor";
	endif;	

