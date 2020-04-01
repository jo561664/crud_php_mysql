<?php
  require_once "./php/conexion.php";
  $palabra = $_POST['palabra'];
  $query = "SELEC * FROM tbl_usuario WHERE nombre LIKE'%$palabra%'";
  
  if(SQL($query)){
?>
   <table class="table-hover table-condensed table-bordered">
					<tr>
						<td>Foto</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>E-mail</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
				<?php 
					while($fila = $consulta->fetch_object()){
				 ?>
					
					<tr>
						<td><img style="width: 50px; height: 50px;" src="http://localhost:2001/coursephp/crud_php_mysql/img/<?php echo $fila->foto; ?>" alt=""></td>
						<td><?php echo $fila->nombre; ?></td>
						<td><?php echo $fila->apellido; ?></td>
						<td><?php echo $fila->email; ?></td>
						<td><button class="btn btn-warning" onclick="window.location.href='editar.php?id=<?php echo $fila->doc; ?>'">Actualizar</button></td>
						<td><button class="btn btn-danger" onclick="if(confirm('Desea eliminar a <?php echo $fila->nombre; ?>')){window.location.href='./proceso/eliminar.php?id=<?php echo $fila->doc; ?>'}">Eliminar</button></td>
					</tr>
			<?php } ?>
		</table>
  <?php }
  else{
    echo "La persona que buscas no esta registrada en la base de datos";
  }
  ?>
