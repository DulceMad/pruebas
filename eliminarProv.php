<?php
include("conexion.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $consultaEliminar = "DELETE FROM suppliers WHERE id = $id";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

    if ($resultadoEliminar) {
        header("Location: tablaProv.php");
        exit();
    } else {
        
        echo "Error al eliminar el proveedor.";
    }
}
?>