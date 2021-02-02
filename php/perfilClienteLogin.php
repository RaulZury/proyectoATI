<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/proyectoATI/index.html">Grandhi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Búscar" aria-label="Search">
                            <button class="btn btn-dark" type="submit" onclick="location.href='http://localhost/proyectoATI/html/searchBook.html'">Ir</button>
                        </form>
                    </ul>
                    <div class="d-grid gap-2">
                        <div class="dropdown">
                            <button class="btn btn-light" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span ><img src="http:/proyectoATI/images/perfil_oscuro.jpg" alt="" width="30" height="30"><?php echo $_SESSION['nombre']?></span></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="cerrarSesion.php" style="text-decoration: none">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-light" type="button" onclick="location.href='http://localhost/proyectoATI/html/buy.html'"><img src="http://localhost/proyectoATI/images/Carrito_negro_1.jpg" alt="" width="40" height="40" ><a>Carrito</a></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <title>Libreria Grandhi</title>
</head>

<body>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>