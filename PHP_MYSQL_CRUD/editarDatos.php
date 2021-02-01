<?php 
	//Con este archivo editamos datos
	/**Primero incluimos la conexión con la BD php_mysql_crud del XAMPP para traernos esa 
	base de datos*/
	include("conexionDB.php");

	/*Primero comprobamos si existe el id enviado desde el boton editar al darle click*/
	if (isset($_GET['id'])) {
		/*Si existe el valor del 'id' obtenida mediante el método get, la almacenamos en la
		variable $id*/
		$id = $_GET['id'];
		/*Hacemos la consulta según el id de referencia y la almacenamos en la variable $query. La
		tabla actividades esta en nuestra BD php_mysql_crud del XAMPP*/
		$query = "SELECT * FROM actividades WHERE id = $id";
		/*Nos traemos los datos para poder actualizarlos. Como parametros le enviamos la conexion $conexion
		y la variable de consulta $query; el resuñtado de la consulta se almacena en la variable $resultado*/
		$resultado = mysqli_query($conexion, $query);

		/*Hacemos la validación de la consulta*/
		if (mysqli_num_rows($resultado) == 1) {
			/*Si existe 1 registro al realizar la consulta (devuelto por $resultado), podemos editarlo.
			Primero obtenemos las filas mediante la función mysqli_fetch_array y enseguida mostramos cada
			uno de sus campos. En la variable titulo guardamos el campo 'nombreActividad' y en la variable
			descripcion guardamos el valor del campo (indice del array) 'descripcion'*/
			$row = mysqli_fetch_array($resultado);
			$titulo = $row['nombreActividad'];
			$descripcion = $row['descripcion'];
		}
	}

	/*Validamos los datos obtenidos por el método POST del ormulario de abajo, que permite editar campos. Comprobamos
	la existencia del name="actualizar" (está en el boton de enviar el formulario en esta pagina)*/
	if (isset($_POST['actualizarF'])) {
		/*Si existe el nombre actulalizar (en el boton de envio) actualizamos.
		Enseguida tomamos los datos necesarios para la actualizacion, que se obtienen del formulario*/
		$id = $_GET['id'];
		$tituloFormulario = $_POST['tituloF'];
		$descripcionFormulario = $_POST['descripcionF'];

		/*Ejecutamos la consulta para la actualización de los datos. La consulta se almacena en la
		variable $query*/
		$query= "UPDATE actividades SET nombreActividad= '$tituloFormulario', descripcion= '$descripcionFormulario' WHERE id= $id";
		/*Ejecutamos la consulta (la pasamos como argumentos la conexion y la consulta)*/
		mysqli_query($conexion, $query);

		/*Mostramos un mensaje*/
		$SESSION['mensaje'] = "Actualización realizada con exito";
		$SESSION['color_mensaje'] = 'secondary';

		/*Despues de guardar el dato, redireccionamos a la vista inicial index.php*/
		header("Location: index.php");

	} else {
		# code...
	}
	
?>

<!--Incluimos el header y el footer para mostralos en pantalla-->
<?php include("includes/header.php") ?>

<!--Colocaremos un formulario para mostrar los datos a editar-->
<!--Contenedor con un padding de 4 columnas-->
<div class="container p-4">
	<!--Fila para colocar un contenedor centrado-->
	<div class="row">
		<!--El formulario va a medir 4 columnas y estará centrado-->
		<div class="col-md-4 mx-auto">
			<!--Creamos una tarjeta-->
			<div class="card card-body">
				<!--Los datos son enviados (el action) al archivo editar.php (este mismo) a traves de la propiedad
					id (el signo ? pegado al id) de la tarea que queremos actualizar mediante codigo php. El id
					se obtiene del parametro $_GET['id'] por el método post-->
				<form action="editarDatos.php?id=<?php echo $_GET['id']; ?>" method="POST">
					<!--Incluimos un formulario para pintar los datos; agrupamos los campos-->
					<div class="form-group">
						<!--El input es de tipo texto, su nombre o identificador es titulo, y el value lo obtiene
							de la variable de php $titulo; form-control es para estilizar el input-->
						<input type="text" name="tituloF" value="<?php echo $titulo ?>" class="form-control" placeholder="Actualizar titulo">
					</div>
					<!--Para poder editar la descripcion usamos el text area-->
					<div class="form-group">
						<!--El valor a editar se coloca dentro del textarea (para que aparezca) mediante código php-->
						<textarea name="descripcionF" rows="10" class="form-control" placeholder="Actualizar descripcion"><?php echo $descripcion ?></textarea>
					</div>
					<!--Agregamos un boton, encargado de ejecutar la actualizacion; su nombre se comprueba desde php-->
					<button class="btn btn-success" name="actualizarF">Actualizar</button>
				</form>
				
			</div>
		</div>
	</div>
	
</div>


<?php include("includes/footer.php") ?>