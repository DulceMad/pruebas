<?php
include("conexion.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $consultaEliminar = "DELETE FROM categories WHERE id = $id";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

    if ($resultadoEliminar) {
        header("Location: tablaCat.php");
        exit();
    } else {
        
        echo "Error al eliminar la cotización.";
    }
}
?>