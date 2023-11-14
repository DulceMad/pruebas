<?php
include("Conexion.php");

// Iniciar o reanudar la sesión
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagenes/bmx.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Panel de control</title>
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
            
            </ul>
        </div>
    </div>
</nav>
<div class="container-md">
    <h1 class="text-center">Informe de Ventas Mensuales</h1>
    <div style="margin-left: 5%">
        <div class="container py-5 h-100">
        
        </div>
        <form action="informeConsulta.php" method="POST">
        <div class="col-xs-10 col-md-5 input-group ">
            <select name = "productId" class="form-select form-select-lg mb-3" style="margin-right: 2%; border-radius: 0%;" aria-label=".form-select-lg example">
            <option value="">Selecciona una opción...</option>
                <option value="1">CUADRO 20 VGBIKES</option>
                <option value="2">MANUBRIO WTP</option>
                <option value="3">LLANTAS CULT</option>
                <option value="4">TIJERAS ODYSSEY</option>
                <option value="5">POSTE HARO</option>
                <option value="6">RIN BSD</option>
                <option value="7">PALANCAS WTP</option>
                <option value="8">CADENA ECLAT</option>
                <option value="9">ASIENTO ODYSSEY</option>
            </select>
            <select name=mes class="form-select form-select-lg mb-3" style="margin-right: 2%; " aria-label=".form-select-lg example">
            <option value="">Selecciona una opción...</option>
                <option value="1">ENERO</option>
                <option value="2">FEBRERO</option>
                <option value="3">MARZO</option>
                <option value="4">ABRIL</option>
                <option value="5">MAYO</option>
                <option value="6">JUNIO</option>
                <option value="7">JULIO</option>
                <option value="8">AGOSTO</option>
                <option value="9">SEPTIEMBRE</option>
                <option value="10">OCTUBRE</option>
                <option value="11">NOVIEMBRE</option>
                <option value="12">DICIEMBRE</option>
            </select>
            <a><button class="btn btn-dark btn-lg btn-block"
                type="submit">Filtrar</button></a>
        </div>
        </form>
        <div class="table-responsive-sm" style="margin-left: 2%; margin-bottom: 2%; margin-top: 2%;">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre Productos</th>
                    <th scope="col">Fecha de Venta</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Verificar si hay resultados almacenados en la sesión
if (isset($_SESSION['resultadoConsulta'])) {
    $resultados = $_SESSION['resultadoConsulta'];

    // Imprimir los resultados dentro de la tabla existente
    if (count($resultados) > 0) {
        foreach ($resultados as $row) {
            if (is_array($row) && isset($row['productname'])) {
                echo "<tr>";
                echo "<td>" . $row['productname'] . "</td>";
                echo "<td>" . $row['dateOrder'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
}
?>
            </tbody>
        </table>
        </div>
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
