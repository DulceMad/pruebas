<?php
include("conexion.php");


if (isset($_GET['idquote'])) {
    $idquote = $_GET['idquote'];


    $consultaEliminar = "DELETE FROM quotes WHERE idquote = $idquote";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

    if ($resultadoEliminar) {
        header("Location: tablaCot.php");
        exit();
    } else {
        
        echo "Error al eliminar la cotización.";
    }
}
?>