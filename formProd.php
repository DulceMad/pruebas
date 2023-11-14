<?php
include("conexion.php");

if (isset($_GET['productId'])) {
    $productId = $_GET['productId'];

    $consulta = "SELECT * FROM products WHERE productId = $productId";
    $resultado = mysqli_query($conexion, $consulta);
    $queryProveedores = "SELECT id, suppliername FROM suppliers";
    $resultadoProveedores = mysqli_query($conexion, $queryProveedores);
    $queryCategoria = "SELECT id, categoryname FROM categories";
    $resultadoCategoria = mysqli_query($conexion, $queryCategoria);

    if ($row = mysqli_fetch_assoc($resultado)) {
        $productname = $row['productname'];
        $price = $row['price'];
        $supplierId = $row['supplierId'];
        $categoryId = $row['categoryId'];
        $description = $row['description'];
        $stock = $row['stock'];
        $image = $row['image'];
    } else {
        echo "<script> alert('El producto no existe'); window.location = 'tablaPro.php'</script>";
    }
    } else {
        echo "<script> alert('ID de producto no especificado'); window.location = 'tablaPro.php'</script>";
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
    
        <form action="editarPro.php" method="POST">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-10">
                        <div class="card shadow-2-strong" style="background-color: #828282;" >
                            <div class="card-body p-5 text-">
                                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                                <h5 class="form-label" >Nombre del producto:</h5>
                                <div class="form-outline mb-4">
                                    <input name="productname" placeholder="Nomnre del producto"  type="text" class="form-control form-control-lg" value="<?php echo $productname; ?>"/>
                                </div>
                                <h5 class="form-label" >Precio</h5>
                                <div class="form-outline mb-4">
                                    <input name="price" placeholder="0.00"  type="number" class="form-control form-control-lg" value="<?php echo $price; ?>"/>
                                </div>
                                <h5  class="form-label" >Proveedor</h5>
                                <div class="form-outline mb-4">
                                    <select name="supplierId" class="form-select form-select-lg">
                                        <?php
                                        while ($proveedor = mysqli_fetch_assoc($resultadoProveedores)){
                                            $selected = ($proveedor['id'] == $supplierId) ? 'selected' : '';
                                            echo '<option value="' . $proveedor['id'] . '" ' . $selected . '>' . $proveedor['suppliername'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <h5  class="form-label" >Categoria</h5>
                                <div class="form-outline mb-4">
                                    <select name="categoryId" class="form-select form-select-lg">
                                        <?php
                                        while ($categoria = mysqli_fetch_assoc($resultadoCategoria)){
                                            $selected = ($categoria['id'] == $categoryId) ? 'selected' : '';
                                            echo '<option value="' . $categoria['id'] . '" ' . $selected . '>' . $categoria['categoryname'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <h5 class="form-label" >Descripción del producto</h5>
                                <div class="form-outline mb-4">
                                    <input name="description" placeholder="Descripción del producto"  type="text" class="form-control form-control-lg" value="<?php echo $description; ?>"/>
                                </div>
                                <h5 class="form-label" >Stock</h5>
                                <div class="form-outline mb-4">
                                    <input name="stock" placeholder="Stock de productos"  type="number" class="form-control form-control-lg" value="<?php echo $stock; ?>"/>
                                </div>
                                <h5 class="form-label" >Imagen</h5>
                                <div class="form-outline mb-4">
                                    <input name="image" placeholder="Imagen relacionada al producto"  type="text" class="form-control form-control-lg" value="<?php echo $image; ?>"/>
                                </div>
                                <a href="tablaPro.php"> <button class="btn btn-dark btn-lg btn-block"
                                        type="submit">Guardar</button></a>
                                <a href="tablaPro.php"> <button class="btn btn-dark btn-lg btn-block"
                                        type="submit">Cancelar</button></a>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>