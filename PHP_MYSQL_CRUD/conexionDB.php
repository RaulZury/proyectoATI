<?php 
	//Este archivo permite la conexión con la BD

	/*Iniciamos una sesión que nos permita guardar mensajes.Esta es llamada desde el inicio
	en index.php mediante la funcion include*/
	session_start();


	/*Biblioteca de MySql. Funcion mysqli con lo parametros de nuestra base de datos:
	servidor, usuario, no hay contraseña, y nombre de la base de datos. La variable almacena $conexion
	almacena el objeto de conexion devuelto por la funcion mysqli_connect*/
	$conexion = mysqli_connect(
		'localhost',
		'root',
		'',
		'php_mysql_crud'
	);

	/*Comprobamos la conexión
	if (isset($conexion)) {
		echo "conexión exitosa con la BD";
	} else {
		
	}*/
?>