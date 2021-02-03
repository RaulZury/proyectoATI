<!DOCTYPE html>
<html lang="en">

    <?php include("header.php"); ?>

    <body>
        <div class="container">
            <!--Cabecera-->
            <header>
                <!--Barra de navegación-->
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Nosotros</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Libros</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ciencia</a></li>
                                    <li><a class="dropdown-item" href="#">Ocio</a></li>
                                    <li><a class="dropdown-item" href="#">Finanzas</a></li>
                                    <li><a class="dropdown-item" href="#">Novelas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Membresía</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Promociones</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </header>

            <!--Principal-->
            <main>
                <form action="../php/login.php" class="cuenta" method="post">
                    <h1>Login</h1>
                    <input type="text" name="name" placeholder="Nombre completo">
                    <input type="password" placeholder="Ingrese su contraseña" name="contraseña">
                    <input type="submit" name="register">
                </form>
            </main>

            <!--Pie-->
            <footer>
                <div class="row">
                    <div class="col-sm-9">
                        <p>Redes sociales, términos y condiciones. Información de contacto. Derechos reservados.</p>
                    </div>
                    <div class="col-sm-3 pr-0">
                        <img class="iconoF" src="img/contacto.png" alt="">
                        <img class="iconoF" src="img/facebook.png" alt="">
                        <img class="iconoF" src="img/instagram.png" alt="">
                        <img class="iconoF" src="img/tweeter.png" alt="">
                    </div>
                </div>
            </footer>
        </div>

        <!-- Agregamos unos scripts-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    </body>

</html>