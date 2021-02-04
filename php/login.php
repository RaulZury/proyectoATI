<?php

    include("conexiondb.php");
    session_start();

    $alert = '';

    $usuario = $_POST['name'];
    $contraseña = $_POST['contraseña'];

    $_SESSION['nombre'] = $usuario;

    $consulta = "SELECT * FROM usuarios WHERE name = '$usuario' and password = '$contraseña'";
    $resultado = mysqli_query($conex, $consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {
        header("Location: perfilClienteLogin.php");
    } else {
        if (empty($_POST['name']) || empty($_POST['contraseña'])) {
            header("Location: vistaLogin.php");
          }
    }
?>