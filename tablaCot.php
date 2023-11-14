<?php
    include("conexion.php");
    $categoria = "SELECT * FROM quotes";

    $consultaProducto = "SELECT quotes.idquote, quotes.total, quotes.date, quotes.comments, products.productname, quotes.quantity, quotes.updateDate FROM quotes INNER JOIN products ON quotes.productId = products.productId";

    $resultado = mysqli_query($conexion, $consultaProducto);
?> 

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagenes/bmx.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Panel de Comprador</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#004173;">
    <div class="container-fluid" style="padding:15px ;">
        <a class="navbar-brand" href="Principal.html">FTK BIKES</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tablaCot.php">Cotizaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tablaUser.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tablaProv.php">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tablaPro.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tablaCat.php">Categorias</a>
                    </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-md">
    <h1 class="text-center">COTIZACIONES</h1>
    <div class="col-xs-10 col-md-5 input-group ">
        <p></p>
    </div>

    <div class="table-responsive-sm" style="margin-left: 2%; margin-bottom: 2%; margin-top: 2%;">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Folio Cotización</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Comentarios</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Fecha de modificicación</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        while($row = mysqli_fetch_assoc($resultado)) {
                            $idquote = $row['idquote'];
                            $total = $row['total'];
                            $date = $row['date'];
                            $comments = $row['comments'];
                            $productname = $row['productname'];
                            $quantity = $row['quantity'];
                            $updateDate = $row['updateDate'];
                    ?>
                    <tr>
                        <td><?php echo $idquote; ?></td>
                        <td>Mariana Sánchez</td>
                        <td><?php echo $total; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $comments; ?></td>
                        <td><?php echo $productname; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $updateDate; ?></td> 
                        <td>Cotización</td>
                        <td>
                            <a class="btn btn-danger btn-sm sm-4" href="eliminarCot.php?idquote=<?php echo $row['idquote']; ?>">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<footer class="text-white text-center text-lg-start" style="background-color:#004173; margin-top: 15%;">
    <div class="container p-1">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">FTK BIKES</h5>
                <p style="text-align: justify;">
                    Somos una empresa dedicada a la venta de bicicletas y partes para que puedas armar tu mismo tu
                    bicicleta.
                    Contamos con variedad de marcas, además de los mejores precios.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Contactanos</h5>
                <p class="mb-3">
                    <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                        class="ms-2">Ftkbikes@gmail.com</span>
                </p>
                <p class="mb-3">
                    <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">449 234 5678</span>
                </p>
                <p class="mb-3">
                    <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">449 234 5679</span>
                </p>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Redes sociales </h5>
                <a style="margin:10px" href="https://www.facebook.com/profile.php?id=100087227215708"><img
                        src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" height="30" width="30" /></a>
                <a style="margin:10px" href="https://www.instagram.com/ftk_bikes/"><img
                        src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" height="30" width="30" /></a>
                <a style="margin:10px" href="https://twitter.com"><img
                        src="https://cdn-icons-png.flaticon.com/512/3670/3670151.png" height="30" width="30" /></a>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 FTK BIKES. Todos los derechos reservados | Design By FTK Bikes
    </div>
</footer>


</html>