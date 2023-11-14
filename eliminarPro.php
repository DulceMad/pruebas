<?php
include("conexion.php");


if (isset($_GET['productId'])) {
    $productId = $_GET['productId'];


    $consultaEliminar = "DELETE FROM products WHERE productId = $productId";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

    if ($resultadoEliminar) {
        header("Location: tablaPro.php");
        exit();
    } else {
        
        echo "Error al eliminar el producto.";
    }
}
?>