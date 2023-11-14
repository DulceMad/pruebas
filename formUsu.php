<?php
include("conexion.php");

if (isset($_GET['iduser'])) {
    $iduser = $_GET['iduser'];

    $consulta = "SELECT * FROM users WHERE iduser = $iduser";
    $resultado = mysqli_query($conexion, $consulta);

    if ($row = mysqli_fetch_assoc($resultado)) {
        $name = $row['name'];
        $lastname = $row['lastname'];
        $dateBirthday = $row['dateBirthday'];
        $streetNum = $row['streetNum'];
        $Fracc = $row['Fracc'];
        $CP = $row['CP'];
        $phone = $row['phone'];
        $city = $row['city'];
        $email = $row['email'];
        $password = $row['password'];
        $rol = $row['rol'];


    } else {
        echo "<script> alert('El usario no existe'); window.location = 'tablaUser.php'</script>";
    }
    } else {
        echo "<script> alert('ID de usuario no especificado'); window.location = 'tablaUser.php'</script>";
    }
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
    <h1 class="text-center">Editar Usuario</h1>
    <div style="margin-left: 5%;">
    
        <form action="editarUser.php" method="POST">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-10">
                        <div class="card shadow-2-strong" style="background-color: #828282;" >
                            <div class="card-body p-5 text-">
                                <input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
                                <h5 class="form-label" >Nombres:</h5>
                                <div class="form-outline mb-4">
                                    <input name="name" placeholder="Nombres"  type="text" class="form-control form-control-lg" value="<?php echo $name; ?>"/>
                                </div>
                                <h5 class="form-label" >Apellidos</h5>
                                <div class="form-outline mb-4">
                                    <input name="lastname" placeholder="Apellidos"  type="text" class="form-control form-control-lg" value="<?php echo $lastname; ?>"/>
                                </div>
                                <h5 class="form-label" >Fecha de Nacimiento</h5>
                                <div class="form-outline mb-4">
                                    <input name="dateBirthday" placeholder="Fceha de nacimiento"  type="date" class="form-control form-control-lg" value="<?php echo $dateBirthday; ?>"/>
                                </div>
                                <h5 class="form-label" >Dirección (Calle y número)</h5>
                                <div class="form-outline mb-4">
                                    <input name="streetNum" placeholder="Calle y número"  type="text" class="form-control form-control-lg" value="<?php echo $streetNum; ?>"/>
                                </div>
                                <h5 class="form-label" >Colonia o Fraccionamiento</h5>
                                <div class="form-outline mb-4">
                                    <input name="Fracc" placeholder="Colonia o Fraccionamiento"  type="text" class="form-control form-control-lg" value="<?php echo $Fracc; ?>"/>
                                </div>
                                <h5 class="form-label" >Código Postal</h5>
                                <div class="form-outline mb-4">
                                    <input name="CP" placeholder="Código Postal"  type="number" class="form-control form-control-lg" value="<?php echo $CP; ?>"/>
                                </div>
                                <h5 class="form-label" >Telefono</h5>
                                <div class="form-outline mb-4">
                                    <input name="phone" placeholder="Telefono"  type="number" class="form-control form-control-lg" value="<?php echo $phone; ?>"/>
                                </div>
                                <h5 class="form-label" >Ciudad</h5>
                                <div class="form-outline mb-4">
                                    <input name="city" placeholder="Ciudad"  type="text" class="form-control form-control-lg" value="<?php echo $city; ?>"/>
                                </div>
                                <h5 class="form-label" >Email</h5>
                                <div class="form-outline mb-4">
                                    <input name="email" placeholder="Email"  type="email" class="form-control form-control-lg" value="<?php echo $email; ?>"/>
                                </div>
                                <input type="hidden" name="password" value="<?php echo $password; ?>">
                                <input type="hidden" name="rol" value="<?php echo $rol; ?>">
                                <a href="tablaUser.php"> <button class="btn btn-dark btn-lg btn-block"
                                        type="submit">Guardar</button></a>
                                <a href="tablaUser.php"> <button class="btn btn-dark btn-lg btn-block"
                                        type="submit">Cancelar</button></a>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>