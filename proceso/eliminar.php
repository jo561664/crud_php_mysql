<?php 
	if(isset($_GET['id'])):
		require_once "../php/conexion.php";
		echo $id = $_GET['id'];
		$query = "DELETE FROM tbl_usuario WHERE doc = '$id'";
		if(SQL($query)):
			echo "<h4>Registro eliminado.</h4>";
		else:
			echo "<h4>Registro eliminado.</h4>";
		endif;	
	endif;


