<?php
    include("conexion.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Cotizaciones</title>
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
                
            </ul>
        </div>
    </div>
</nav>

<body>
    <div class="container responsive-sm">
        <center><strong>
                <h2>Mis cotizaciones</h2>
            </strong>
            <hr size="4px" color="black" style="width: 70%;" />
        </center>
    </div>

    <a href="NuevaCotización.php">
            <button class="btn btn-primary btn-sm" type="submit"><b>NUEVA COTIZACIÓN</b></button>
    </a>
    <p></p>
    <p></p>
    <div class="cointener">
        <div class="row">
    <?php
    //Realizar consulta a la base de datos para obtener los datos de cotización
    $consulta = "SELECT * FROM quotes";
    $resultado = mysqli_query($conexion, $consulta);

    //Iterar sobre los resultados y mostrar los datos en la sección de la cotización 
    while ($row = mysqli_fetch_assoc($resultado)){
        $idquote = $row['idquote'];
        $productId = $row['productId'];
        $total = $row['total'];
        $date = $row['date'];

        //Obtener información del producto
        $consultaProducto = "SELECT productname FROM products WHERE productId = $productId";
        $resultadoProducto = mysqli_query($conexion, $consultaProducto);
        $rowProducto = mysqli_fetch_assoc($resultadoProducto);
        $nombreProducto = $rowProducto['productname'];

        // Formatear la fecha sin la hora
        $fechaFormateada = date('Y-m-d', strtotime($date));

        $hiddenClass = '';
        if (isset($_SESSION['hidden_quotes']) && in_array($idquote, $_SESSION['hidden_quotes'])) {
            $hiddenClass = 'hidden';
        }

        echo '<div class="col-md-6" ' . $hiddenClass . '" id="cotizacion-' . $idquote . '">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">COTIZACIÓN</h5>
                        <p class="card-text">Producto: ' . $nombreProducto . '</p><br>
                        <p class="card-text">Total: ' . $total . '</p><br>
                        <p class="card-text">Fecha: ' . $fechaFormateada . '</p><br>
                        <a href="editarCotizacion.php?idquote=' . $idquote . '">
                            <button class="btn btn-primary btn-sm">EDITAR</button>
                        </a>
                        <button class="btn btn-secondary btn-sm" onclick="ocultarCotizacion(' . $idquote . ')">ELIMINAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}
?>
</div>
</div>

    <footer class="text-white text-center text-lg-start" style="background-color:#004173;">
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
    <script>

        function ocultarCotizacion(idquote){
            var cotizacion = document.getElementById('cotizacion-' + idquote);
            cotizacion.style.display = 'none';

                    // Almacenar el idquote oculto en el almacenamiento local
            if (localStorage.getItem('hidden_quotes')) {
                var hiddenQuotes = JSON.parse(localStorage.getItem('hidden_quotes'));
                hiddenQuotes.push(idquote);
                localStorage.setItem('hidden_quotes', JSON.stringify(hiddenQuotes));
            } else {
                var hiddenQuotes = [idquote];
                localStorage.setItem('hidden_quotes', JSON.stringify(hiddenQuotes));
            }
}

            // Verificar el almacenamiento local al cargar la página y ocultar las cotizaciones correspondientes
            window.addEventListener('DOMContentLoaded', function() {
                if (localStorage.getItem('hidden_quotes')) {
                    var hiddenQuotes = JSON.parse(localStorage.getItem('hidden_quotes'));
                    hiddenQuotes.forEach(function(idquote) {
                        var cotizacion = document.getElementById("cotizacion-" + idquote);
                        if (cotizacion) {
                            cotizacion.style.display = "none";
                        }
                    });
                }
        });
    </script>
</body>

</html>
