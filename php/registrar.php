<?php 

	include("conexiondb.php");

	if (isset($_POST['register'])) {
	    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1) {
		    $name = trim($_POST['name']);
		    $email = trim($_POST['email']);
		    $contraseña = trim($_POST['contraseña']);
		    $consulta = "INSERT INTO usuarios(name, email, password) VALUES ('$name','$email','$contraseña')";
		    $resultado = mysqli_query($conex, $consulta);
		    if ($resultado) {
		    	?> 
                <h3 class="ok">¡Te has inscrito correctamente!</h3>
                <?php header("Location: vistaLogin.php"); ?>
	           <?php
		    } else {
		    	?> 
		    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
	           <?php
		    }
	    }   else {
		    	?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
                <?php header("Location: vistaRegistro.php"); ?>
	           <?php
	    }
	}
?>

