<?php 
	//Con este archivo eliminamos datos
	//Primero nos traemos la conexion con la BD mediante el archivo conexionDB.php
	include("conexionDB.php");

	/*Verificamos si se recibe el id desde la llamad del boton eliminar*/
	if (isset($_GET['id'])) {
		/*si recibimos el id, podemos eliminar un registro. El 'id' recibido con el método GET se
		almacena en la variable $id*/
		$id = $_GET['id'];
		/*Realizamos la consulta SQL, que almacenamos en la variable $query */
		$query = "DELETE FROM actividades WHERE id = $id";
		/*Para que funcione la consulta los argumentos son la conexion con la BD y la variable
		de consulta $query; el resultado de la consulta se almacena en la variable local resultado*/
		$resultado = mysqli_query($conexion, $query);

		/*Comprobamos si se ha borrado*/
		if (!$resultado) {
			//Si no tenemos $resultado (no se ha borrado nada) terminamos la aplicación
			die("No se ha podido borrar");
		} else {
			/*Si se ha borrado el dato, redireccionamos a la página principal index.php.
			Tambien mandamos un mensaje y un color para ese mensaje*/
			$_SESSION['mensaje'] = 'registro eliminado con éxito';
			$_SESSION['color_mensaje'] = 'danger';
			header("Location: index.php");
		}
	}
?>