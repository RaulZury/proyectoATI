<?php 

	include("conexiondb.php");

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = "SELECT * FROM stock WHERE id = $id";
		$resultado = mysqli_query($conex, $query);

		/*Hacemos la validación de la consulta*/
		if (mysqli_num_rows($resultado) == 1) {
			$row = mysqli_fetch_array($resultado);
            $titulo = $row['titulo'];
            $autor = $row['autor'];
            $isbn = $row['isbn'];
            $editorial = $row['editorial'];
            $cantidad = $row['cantidad'];
            $precio = $row['precio'];
		}
	}

	if (isset($_POST['actualizarF'])) {
		/*Si existe el nombre actulalizar (en el boton de envio) actualizamos.
		Enseguida tomamos los datos necesarios para la actualizacion, que se obtienen del formulario*/
		$id = $_GET['id'];
        $tituloForm = $_POST['tituloF'];
        $autorForm = $_POST['autorF'];
        $isbnForm = $_POST['isbnF'];
        $editorialForm = $_POST['editorialF'];
        $cantidadForm = $_POST['cantidadF'];
		$precioForm = $_POST['precioF'];

		/*Ejecutamos la consulta para la actualización de los datos. La consulta se almacena en la
		variable $query*/
		$query= "UPDATE stock SET titulo= '$tituloForm', autor= '$autorForm', isbn= '$isbnForm',
        editorial= '$editorialForm', cantidad= '$cantidadForm', precio= '$precioForm' WHERE id= $id";
		/*Ejecutamos la consulta (la pasamos como argumentos la conexion y la consulta)*/
		mysqli_query($conex, $query);

		/*Mostramos un mensaje*/
		$SESSION['mensaje'] = "Actualización realizada con exito";
		$SESSION['color_mensaje'] = 'secondary';

		/*Despues de guardar el dato, redireccionamos a la vista inicial index.php*/
		header("Location: stock.php");

	} 
?>

<!--Incluimos el header y el footer para mostralos en pantalla-->
<?php include("header.php") ?>

<!--Colocaremos un formulario para mostrar los datos a editar-->
<!--Contenedor con un padding de 4 columnas-->
<div class="container p-4">
	<!--Fila para colocar un contenedor centrado-->
	<div class="row">
		<!--El formulario va a medir 4 columnas y estará centrado-->
		<div class="col-md-4 mx-auto">
			<!--Creamos una tarjeta-->
			<div class="card card-body">
				<form action="editarLibros.php?id=<?php echo $_GET['id']; ?>" method="POST">
					<!--Incluimos un formulario para pintar los datos; agrupamos los campos-->
					<div class="form-group">
						<input type="text" name="tituloF" value="<?php echo $titulo ?>" class="form-control" placeholder="Actualizar titulo">
                    </div>
                    <div class="form-group">
						<input type="text" name="autorF" value="<?php echo $autor ?>" class="form-control" placeholder="Actualizar autor">
                    </div>
                    <div class="form-group">
						<input type="text" name="isbnF" value="<?php echo $isbn ?>" class="form-control" placeholder="Actualizar isbn">
                    </div>
                    <div class="form-group">
						<input type="text" name="editorialF" value="<?php echo $editorial ?>" class="form-control" placeholder="Actualizar editorial">
                    </div>
                    <div class="form-group">
						<input type="text" name="cantidadF" value="<?php echo $cantidad ?>" class="form-control" placeholder="Actualizar cantidad">
                    </div>
                    <div class="form-group">
						<input type="text" name="precioF" value="<?php echo $precio ?>" class="form-control" placeholder="Actualizar precio">
					</div>
					<button class="btn btn-success" name="actualizarF">Actualizar</button>
				</form>
				
			</div>
		</div>
	</div>
	
</div>

<?php include("footer.php") ?>