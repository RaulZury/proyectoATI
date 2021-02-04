<?php

	include("conexiondb.php");

	//Validación de datos enviados del formuario. El arametro guardar actividad "recibe" el formulario
	if (isset($_POST['guardar_actividad'])) {

		$titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $isbn = $_POST['isbn'];
        $editorial = $_POST['editorial'];
        $cantidad = $_POST['cantidad'];
		$precio = $_POST['precio'];

		$query = "INSERT INTO stock(titulo, autor, isbn, editorial, cantidad, precio) 
        VALUES ('$titulo', '$autor', '$isbn', '$editorial','$cantidad', '$precio')";
		/*Para almacenar en la base de datos, enviamos la cadena de conexion (variable $conexion del archivo
		conexionDB.php) y la variable de consulta $query donde se almacenaron los datos. El resltado de la
		consulta se almacena en la variable $resultado*/
		$resultado = mysqli_query($conex, $query);

		//Comprobamos la consulta
		if (!$resultado) {
			//Si la consulta salio mal o no fue echa, terminamos con la aplicación
			die("Fallo la consulta");
		} else {
			//Si la consulta sale bien:
			/*Almacenamos un mensaje dentro de la variable $_SESION. En 'mensaje' guarda un mensaje
			y en 'color_mensaje' el color verde (success). Ver como son llamados en el archivo index.php*/
			$_SESSION['mensaje'] = 'Tarea guardada satisfactoriamente';
			$_SESSION['color_mensaje'] = 'success';

			//redireccionamos a la pagina principal index.php
			header("Location: stock.php");
		}	
	} 
?>