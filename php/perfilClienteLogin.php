<!DOCTYPE html>
<html lang="en">

<?php include("header.php"); ?>
<?php include("conexiondb.php"); ?>

<body>
<?php 
    $nombre = $_SESSION['nombre'];
    echo $nombre;
?>

    <div class="container">
        <!--Div de 8 columnas para tabla en la cual se muestran los datos de consulta (datos de la BD)-->
        <div class="col-md-8">
            <table class="table table-bordered">
                <!--Cabeza de la tabla-->
                <thead>
                    <!--Para a fila del encabezado de la tabla-->
                    <tr>
                        <!--Columnas (campos) de la tabla-->
                        <th>Nombre</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <!--Para mostrar los registros de la BD como filas de la tabla-->
                <tbody>
                    <?php  
                    $query = "SELECT * FROM usuarios WHERE name = '$nombre'";
                    $resultado_actividades = mysqli_query($conex, $query);

                    while ($row = mysqli_fetch_array($resultado_actividades)) { ?>
                        <!--Pintamos las filas-->
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

<?php include("footer.php"); ?>

</html>