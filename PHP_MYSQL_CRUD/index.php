<?php 
	//Este archivo arranca toda la aplicación. Comenzamos requiriendo la conexion con la BD
	include("conexionDB.php")
 ?>

	<!--llamamos al header desde el archivo header.php-->
	<?php include("includes/header.php") ?>

	<!--Para centrar el contenido con un padding de 4-->
	<div class="container p-4">
		<div class="row">
			<!--Div de 4 columnas para formulario-->
			<div class="col-md-4">
				<!--Hacemos una validadción, para ver si existen los datos guardados en la sesión-->
				<?php if (isset($_SESSION['mensaje'])) { ?>
					<!--Si existe la variable mensaje dentro de la sesión, hay un mensaje que se quiere
					mostrar, que se muestra desplegando un mensaje de alerta-->
					<div class="alert alert-<?=$_SESSION['color_mensaje']?> alert-dismissible fade show" role="alert">
						<!--en el fragmento de php empieza con un = por ser una variable-->
						<?= $_SESSION['mensaje'] ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					
					<!--session_unset es para limpiar los datos de la sesion-->
				<?php session_unset(); } ?>

				<!--Creamos una tarjeta-->
				<div class="card card-body">
					<!--Formulario para ingresar datos, con 3 campos. En action indicamos a donde manda la info-->
					<form action="guardarDatos.php" method="POST">
						<!--Con form-gropus separamos los campos-->
						<div class="form-group">
							<input type="text" name="actividad" class="form-control" placeholder="Ingrese actividad" autofocus="">
						</div>
						<!--Para la descripcion de la actividad-->
						<div class="form-group">
							<textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion de actividad"></textarea>
						</div>
						<!--Al dar click en el boton ejecuta el formulario-->
						<input type="submit" name="guardar_actividad" class="btn btn-success btn-block" value="Guardar actividad">
					</form>
				</div>
			</div>

			<!--Div de 8 columnas para tabla en la cual se muestran los datos de consulta (datos de la BD)-->
			<div class="col-md-8">
				<table class="table table-bordered">
					<!--Cabeza de la tabla-->
					<thead>
						<!--Para a fila del encabezado de la tabla-->
						<tr>
							<!--Columnas (campos) de la tabla-->
							<th>Actividad</th>
							<th>Descripción</th>
							<th>Fecha de creación</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<!--Para mostrar los registros de la BD como filas de la tabla-->
					<tbody>
						<!--Relizamos una consulta php a la tabla actividades de la BD-->
						<?php  
						/*Primero seleccíonamos todos los datos de la tabla actividades. que almacenamos en
						la variable $query*/
						$query = "SELECT * FROM actividades";
						/*Ejecutamos la consulta con la funcion mysqli_query dandole 2 parametros: la 
						conexion a la BD $conexion y el valor de la consulta $query, que se almacenaran
						en la variable $resultado_actividades*/
						$resultado_actividades = mysqli_query($conexion, $query);
						/*Recorremos cada registro para "pintarlo". La función mysqli_fetch_array recupera una fila de 
						resultados de la variable $resultado_actividades, y dicha fila se almacena en la variable $row.
						Separamos las llaves del while en bloques PHP para escribir de forma intermedia código HTML*/
						while ($row = mysqli_fetch_array($resultado_actividades)) { ?>
							<!--Pintamos las filas-->
							<tr>
								<!--Pintamos las celdas o datos, invocando el $row y su indice (campo) como esta indicado en
									la BD actividades creada en el XAMPP (nombreActividad, descripcion, fecha)-->
								<td><?php echo $row['nombreActividad'] ?></td>
								<td><?php echo $row['descripcion'] ?></td>
								<td><?php echo $row['fecha'] ?></td>
								<td>
									<!--Al dar click, redirecciona al archivo editarDatos.php. Para saber que datos o tarea
										se debe editar, mediante el id (notar el simbolo ? que se le ha puesto para indicar
										una consulta en php) -->
									<a href="editarDatos.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary" >Editar</a>
								</td>
								<td>
									<!--Al dar click, redirecciona al archivo eliminarDatos.php. Para saber que datos o tarea
										se debe editar, mediante el id se asocia el 'id' obtenido de la variable $row-->
									<a href="eliminarDatos.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" >Eliminar</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!--Incluimos todos los scripts, JQuery y Popers desde al archivo header.php.-->
	<?php include("includes/footer.php") ?>
