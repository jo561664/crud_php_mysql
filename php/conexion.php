<?php 

	function SQL($query){
		$conexion = new mysqli("localhost", "root", "", "c_php");
		//Validar conexion
		if (mysqli_connect_errno()):
			echo "Conexion fallida";
		else:
			// echo "Conexiona exitosa";
		endif;

		$conexion->set_charset("UTF-8");
		$conexion->autocommit(FALSE);

		if($resultado=$conexion->query($query)):
			if($conexion->commit()):

			else:
				$conexion->rollback();
			endif;	
		endif;		
		return $resultado;
	}			