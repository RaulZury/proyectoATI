<!doctype html>
<html lang="en">

<?php include("header.php"); ?>

<body id="buy">
    <h1> </h1>
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
                                    <a class="dropdown-item" href="#">Niños</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Adolescentes</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Best Sellers</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Electrónicos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Membresía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Empleados</a>
                    </li>
                </ul>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#ISBN</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1ADADA1231</th>
                        <td>Homo Deus</td>
                        <td>Debate</td>
                        <td>249.00</td>
                    </tr>
                    <tr>
                        <th scope="row">2ASDSASSGG</th>
                        <td>Blockchain Rev.</td>
                        <td>Alan Taspcot</td>
                        <td>350.00</td>
                    </tr>
                    <tr>
                        <th scope="row">897897HHHDS</th>
                        <td>El Tao de la Fisica</td>
                        <td>Frijoft Kapra</td>
                        <td>500.00</td>
                    </tr>
                </tbody>
            </table>

            </table>
            <div class="d-grid gap-2">
                <button class="btn btn-light" type="button">Eliminar producto</button>
                <button class="btn btn-light" type="button">Proceder al pago</button>
            </div>
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="validationServer01" class="form-label">Nombre</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServer02" class="form-label">Apellido</label>
                    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServerUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Intente de nuevo.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationServer03" class="form-label">Ciudad</label>
                    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Intente de nuevo.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">Estado</label>
                    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                        <option selected disabled value="">Elige...</option>
                        <option>
                                <ul>
                                    <li>Ciudad de México</li>
                                    <li>Morelos</li>
                                    <li>Puebla</li>
                                    <li>Fondo de Vikini</li>
                                    <li>Smallville</li>
                                    <li>Gótica</li>
                                </ul>
                        </option>
                      </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Intente de nuevo.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer05" class="form-label">C.p.</label>
                    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                        Inserte un Código postal valido.
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                        <label class="form-check-label" for="invalidCheck3">
                          Agregar terminos y condiciones.
                        </label>
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            Asegurate de leer completamente la información.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-dark" type="submit">Comprar</button>
                </div>
            </form>
        </div>

    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>