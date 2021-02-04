<?php 

	include("conexiondb.php");

	/*Verificamos si se recibe el id desde la llamad del boton eliminar*/
	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		$query = "DELETE FROM stock WHERE id = $id";

		$resultado = mysqli_query($conex, $query);

		/*Comprobamos si se ha borrado*/
		if (!$resultado) {
			//Si no tenemos $resultado (no se ha borrado nada) terminamos la aplicación
			die("No se ha podido borrar");
		} else {
			/*Si se ha borrado el dato, redireccionamos a la página principal index.php.
			Tambien mandamos un mensaje y un color para ese mensaje*/
			$_SESSION['mensaje'] = 'registro eliminado con éxito';
			$_SESSION['color_mensaje'] = 'danger';
			header("Location: stock.php");
		}
	}
?>