<?php
    include("conexion.php");
    $user = "SELECT * FROM users";
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
    <h1 class="text-center">USUARIOS</h1>
    <div class="col-xs-10 col-md-5 input-group ">
        <a href="NuevoUser.php">
                <button class="btn btn-primary btn-sm" type="submit"><b>NUEVO USUARIO</b></button>
        </a>
        <p></p>
    </div>

    <div class="table-responsive-sm" style="margin-left: 2%; margin-bottom: 2%; margin-top: 2%;">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Calle y Numero</th>
                    <th scope="col">Fraccionamiento</th>
                    <th scope="col">CP</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <?php $resultado = mysqli_query($conexion, $user);
                   while($row=mysqli_fetch_assoc($resultado)) { ?> 
                    <tr scope="row">
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["lastname"];?></td>
                    <td><?php echo $row["dateBirthday"];?></td>
                    <td><?php echo $row["streetNum"];?></td>
                    <td><?php echo $row["Fracc"];?></td>
                    <td><?php echo $row["CP"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td><?php echo $row["city"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["password"];?></td>
                    <td><?php echo $row["rol"];?></td>
                    <td><a class="btn btn-primary btn-sm" href="formUsu.php?iduser=<?php echo $row['iduser']; ?>">EDITAR</a>
                        <a class="btn btn-danger btn-sm sm-4" href="eliminarUser.php?iduser=<?php echo $row['iduser']; ?>">ELIMINAR</a></td>
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