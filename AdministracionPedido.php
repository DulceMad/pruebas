<?php
    include("conexion.php");
    $pedidos = "SELECT * FROM vistaOrder";
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
                
            </ul>
           
        </div>
    </div>
</nav>
<div class="container-md">
    <h1 class="text-center">Administracion de pedidos</h1>
    <div class="col-xs-10 col-md-5 input-group ">
    <div class="notifications">
        <h3>SUGERENCIAS</h3>
        <ul>
        <li>
        <?php $resultado = mysqli_query($conexion, $inventario);
                   while($row=mysqli_fetch_assoc($resultado)) { ?> 
                    El sistema ha detectado un producto push:
                   <?php echo $productoname?> 
                    <?php } mysqli_free_result($resultado);?>
                    <td><?php
                        if ($promedio == 30 || ($promedio >= 15 && $promedio <= 45)) {
                            echo "Producto PUSH";
                        } else {
                            echo "Producto PULL";
                        }
                        ?></td>
                        <td><?php
                        if ($promedio == 30 || ($promedio >= 15 && $promedio <= 45)) {
                            echo '<button type="button" class="btn btn-primary" onclick= "window.location.href=\'NuenaCompra.php\' alert("¡Este Producto es PUSH realiza una compra!")">COMPRAR</button>';
                        } else {
                            echo " ";
                        }
                   
                    ?>
        </li>
        <li></li>
        <li></li>
        </ul>
    </div>

    <div style="margin-left: 5%;">
        <a href="NuevaCompra.php">
            <button class="btn btn-success" type="submit">Nueva compra</button>
        </a>
        <a href="InformeCompras.php">
            <button class="btn btn-success" type="submit">Informe</button>
        </a>
        <p></p>
        <h5 class="">Inventario de cada producto</h5>
            <select id="mySelect" class="form-select form-select-lg mb-3" style="margin-right: 2%; border-radius: 0%;" aria-label=".form-select-lg example">
                <option value="">Selecciona una opción...</option>
                <option value="Inventario.php">CUADRO 20 VGBIKES</option>
                <option value="Inventario2.php">MANUBRIO WTP</option>
                <option value="Inventario3.php">LLANTAS CULT</option>
                <option value="Inventario4.php">TIJERAS ODYSSEY</option>
                <option value="Inventario5.php">POSTE HARO</option>
                <option value="Inventario6.php">RIN BSD</option>
                <option value="Inventario7.php">PALANCAS WTP</option>
                <option value="Inventario8.php">CADENA ECLAT</option>
                <option value="Inventario9.php">ASIENTO ODYSSEY</option>
            </select>
        </div>

        <script>
        var select = document.getElementById("mySelect");
        select.addEventListener("change", function() {
            var selectedOption = select.value;
            if (selectedOption !== "") {
            window.location.href = selectedOption;
            }
        });
        </script>

    </div>

    <div class="table-responsive-sm" style="margin-left: 2%; margin-bottom: 2%; margin-top: 2%;">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre Productos</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Fecha Pedido</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <?php $resultado = mysqli_query($conexion, $pedidos);
                   while($row=mysqli_fetch_assoc($resultado)) { ?> 
                    <tr scope="row">
                    <td><?php echo $row["productname"];?></td>
                    <td><?php echo'<img src="'.$row['image'].'" width="100" height="100"/>';?></td>
                    <td><?php echo $row["dateOrder"];?></td>
                    <td><?php echo $row["quantity"];?></td>
                    <?php } mysqli_free_result($resultado);?>
                    </tr>
                </tr>
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