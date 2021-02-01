<?php
	//Mediante este archivo guradamos los datos

	/*Incluimos el archivo conexionDB.php para conectar con la BD (En realidad estamos trayendo)+
	la variable conexion de ese archivo)*/
	include("conexionDB.php");

	//Validación de datos enviados del formuario. El arametro guardar actividad "recibe" el formulario
	if (isset($_POST['guardar_actividad'])) {
		/*La variabe $actividad almacena el valor de la actividad ingresado en el formulario
		a traves del name="actividad" desde el archivo index.php mediante el metodo POST. Similar 
		para descripcion*/
		$actividad = $_POST['actividad'];
		$descripcion = $_POST['descripcion'];

		//la variable query almacena la consulta
		/*Comenzamos ingresando valores a la tabla actividades en la BD de Xampp; en sus campos
		nombreActividad y descripcion mandamos los valores de las variables $actividad y $descripcion*/
		$query = "INSERT INTO actividades(nombreActividad, descripcion) VALUES ('$actividad', '$descripcion')";
		/*Para almacenar en la base de datos, enviamos la cadena de conexion (variable $conexion del archivo
		conexionDB.php) y la variable de consulta $query donde se almacenaron los datos. El resltado de la
		consulta se almacena en la variable $resultado*/
		$resultado = mysqli_query($conexion, $query);

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
			header("Location: index.php");
		}
		
	} else {
		
	}
	
?>