<?php
    include("header.php");
    include("conexiondb.php");
?>

	<div class="container p-4">
		<div class="row">
			<!--Div de 4 columnas para formulario-->
			<div class="col-md-4">
				<!--Hacemos una validadción, para ver si existen los datos guardados en la sesión-->
				<?php if (isset($_SESSION['mensaje'])) { ?>
					<div class="alert alert-<?=$_SESSION['color_mensaje']?> alert-dismissible fade show" role="alert">
						<?= $_SESSION['mensaje'] ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					
					<!--session_unset es para limpiar los datos de la sesion-->
				<?php session_unset(); } ?>

				<!--Creamos una tarjeta-->
				<div class="card card-body">
                    <h2>Ingrese los datos:</h2>
					<form action="guardarLibros.php" method="POST">
						<!--Con form-gropus separamos los campos-->
						<div class="form-group">
							<input type="text" name="titulo" class="form-control" placeholder="Título" autofocus="">
                        </div>
                        <div class="form-group">
							<input type="text" name="autor" class="form-control" placeholder="Autor" autofocus="">
                        </div>
                        <div class="form-group">
							<input type="text" name="isbn" class="form-control" placeholder="ISBN" autofocus="">
                        </div>
                        <div class="form-group">
							<input type="text" name="editorial" class="form-control" placeholder="Editorial" autofocus="">
                        </div>
                        <div class="form-group">
							<input type="text" name="cantidad" class="form-control" placeholder="Cantidad" autofocus="">
                        </div>
                        <div class="form-group">
							<input type="text" name="precio" class="form-control" placeholder="Precio" autofocus="">
						</div>
						<input type="submit" name="guardar_actividad" class="btn btn-success btn-block" value="Guardar">
					</form>
				</div>
			</div>

			<!--Div de 8 columnas para tabla en la cual se muestran los datos de consulta (datos de la BD)-->
			<div class="col-md-8">
				<table class="table table-bordered table-dark">
					<!--Cabeza de la tabla-->
					<thead>
						<!--Para a fila del encabezado de la tabla-->
						<tr>
							<!--Columnas (campos) de la tabla-->
							<th>Título</th>
							<th>Autor</th>
							<th>ISBN</th>
                            <th>Editorial</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
						</tr>
					</thead>
					<!--Para mostrar los registros de la BD como filas de la tabla-->
					<tbody>
						<!--Relizamos una consulta php a la tabla actividades de la BD-->
						<?php  
						/*Primero seleccíonamos todos los datos de la tabla actividades. que almacenamos en
						la variable $query*/
						$query = "SELECT * FROM stock";
						$resultado_actividades = mysqli_query($conex, $query);
						/*Recorremos cada registro para "pintarlo". La función mysqli_fetch_array recupera una fila de 
						resultados de la variable $resultado_actividades, y dicha fila se almacena en la variable $row.
						Separamos las llaves del while en bloques PHP para escribir de forma intermedia código HTML*/
						while ($row = mysqli_fetch_array($resultado_actividades)) { ?>
							<!--Pintamos las filas-->
							<tr>
								<!--Pintamos las celdas o datos, invocando el $row y su indice (campo) como esta indicado en
									la BD actividades creada en el XAMPP (nombreActividad, descripcion, fecha)-->
								<td><?php echo $row['titulo'] ?></td>
								<td><?php echo $row['autor'] ?></td>
                                <td><?php echo $row['isbn'] ?></td>
                                <td><?php echo $row['editorial'] ?></td>
								<td><?php echo $row['cantidad'] ?></td>
								<td><?php echo $row['precio'] ?></td>
								<td>
									<!--Al dar click, redirecciona al archivo editarDatos.php. Para saber que datos o tarea
										se debe editar, mediante el id (notar el simbolo ? que se le ha puesto para indicar
										una consulta en php) -->
									<a href="editarLibros.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary" >Editar</a>

									<!--Al dar click, redirecciona al archivo eliminarDatos.php. Para saber que datos o tarea
										se debe editar, mediante el id se asocia el 'id' obtenido de la variable $row-->
									<a href="eliminarLibros.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" >Eliminar</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


<?php
    include("footer.php");

?>
