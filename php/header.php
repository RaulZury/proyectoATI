<?php session_start() ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/proyectoATI/index.php">Grandhi</a>
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

                <?php  if (!empty($_SESSION['nombre'])) { ?>
                    <div class="d-grid gap-2">
                        <div class="dropdown">
                            <button class="btn btn-light" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span ><img src="http:/proyectoATI/images/perfil_oscuro.jpg" alt="" width="30" height="30"><?php echo $_SESSION['nombre']?></span></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="php/cerrarSesion.php" style="text-decoration: none">Cerrar Sesión</a></li>
                                </ul>
                        </div>
                        <button class="btn btn-light" type="button" onclick="location.href='http://localhost/proyectoATI/php/buy.php'"><img src="http://localhost/proyectoATI/images/Carrito_negro_1.jpg" alt="" width="40" height="40" ><a>Carrito</a></button>
                    </div>
                <?php } else { ?>
                        <div class="d-grid gap-2">
                        <button class="btn btn-light" type="button" onclick="location.href='http://localhost/proyectoATI/php/vistaRegistro.php'"><img src="http://localhost/proyectoATI/images/perfil_oscuro.jpg" alt="" width="30" height="30">Usuario</button>
                        <button class="btn btn-light" type="button" onclick="location.href='http://localhost/proyectoATI/php/buy.php'"><img src="http://localhost/proyectoATI/images/Carrito_negro_1.jpg" alt="" width="40" height="40" ><a>Carrito</a></button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
    <title>Libreria Grandhi</title>
</head>