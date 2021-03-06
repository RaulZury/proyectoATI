<!doctype html>
<html lang="en">

<?php include("header.php"); ?>

<body>

    <div class=container>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/Landing/ImageOne.jpg" class="d-block w-100" alt="Offer">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="p-3 mb-2 bg-dark text-white">
                            <h2>Traes los ojos rojos, espero que sea por leer.</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/Landing/ImageTwo.jpeg" class="d-block w-100" alt="castle">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="p-3 mb-2 bg-dark text-white">
                            <h2>Historias de fantasia</h2>
                            <p>Harry Potter, The Lord Of The Rings, Made Runner y mas..</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/Landing/ImageThree.jpeg" class="d-block w-100" alt="Serious">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="p-3 mb-2 bg-dark text-white">
                            <h2>Para pensar</h2>
                            <p>El Psicoanalista, El hombre en busca de sentido, El Tao ...</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorías
                    </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="http://localhost/proyectoATI/html/libreria.html">Niños</a></li>
                                <li>
                                    <a class="dropdown-item" href="http://localhost/proyectoATI/html/libreria.html">Adolescentes</a></li>
                                <li>
                                    <a class="dropdown-item" href="http://localhost/proyectoATI/html/libreria.html">Best Sellers</a></li>
                                <li>
                                    <a class="dropdown-item" href="http://localhost/proyectoATI/html/libreria.html">Electrónicos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="stock.php">Stock</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/proyectoATI/html/crear_membresia.html">Membresía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/proyectoATI/html/libreria.html" tabindex="-1" aria-disabled="true">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/proyectoATI/html/agregaremp.html" tabindex="-1" aria-disabled="true">Empleados</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="card-group">
                        <div class="card" style="width: 18rem;">
                            <img src="http://localhost/proyectoATI/images/Books/finalmente.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Finalmente soy yo</h5>
                                <p class="card-text">Leslie Polinesia, Editorial: Montena</p>
                                <a href="http://localhost/proyectoATI/html/bookview.html" class="btn btn-outline-dark">Ver Sinopsis</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="http://localhost/proyectoATI/images/Books/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Van Gogh, Vida y Obra</h5>
                                <p class="card-text">Victoria Soto Caba, Editorial: LIBSA</p>
                                <a href="http://localhost/proyectoATI/html/bookview.html" class="btn btn-outline-dark">Ver Sinopsis</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="http://localhost/proyectoATI/images/Books/sco.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The House of the Scorpion</h5>
                                <p class="card-text">Nancy Farmer, Editorial: Atheneum Books</p>
                                <a href="http://localhost/proyectoATI/html/bookview.html" class="btn btn-outline-dark">Ver Sinopsis</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card-group">
                        <div class="card" style="width: 18rem;">
                            <img src="http://localhost/proyectoATI/images/Books/fen.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">El fenomeno del extasis</h5>
                                <p class="card-text">Juan Jose Lahuerta, Editorial: Siruela</p>
                                <a href="http://localhost/proyectoATI/html/bookview.html" class="btn btn-outline-dark">Ver Sinopsis</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="http://localhost/proyectoATI/images/Books/homo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Homo deus</h5>
                                <p class="card-text">Yuval Noah Harari, Editorial: Debate</p>
                                <a href="http://localhost/proyectoATI/html/bookview.html" class="btn btn-outline-dark">Ver Sinopsis</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="http://localhost/proyectoATI/images/Books/blok.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">La Revolución Blockchain</h5>
                                <p class="card-text">Don Tapscott, Editorial: Paidos </p>
                                <a href="http://localhost/proyectoATI/html/bookview.html" class="btn btn-outline-dark">Ver Sinopsis</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

<?php include("footer.php"); ?>

</html>