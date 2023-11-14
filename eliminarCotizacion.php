<?php
include("conexion.php");

// Verificar si se ha proporcionado el parámetro idquote en la URL
if (isset($_GET['idquote'])) {
    $idquote = $_GET['idquote'];

    // Consultar la base de datos para eliminar la cotización
    $consultaEliminar = "DELETE FROM quotes WHERE idquote = $idquote";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

    if ($resultadoEliminar) {
        // La cotización se eliminó correctamente, redirigir a la página de carrito de compras nuevamente
        header("Location: CarritoCompras.php");
        exit();
    } else {
        // Ocurrió un error al eliminar la cotización, puedes mostrar un mensaje de error o realizar otra acción
        echo "Error al eliminar la cotización.";
    }
}
?>
