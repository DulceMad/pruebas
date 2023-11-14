<?php
include("conexion.php");


if (isset($_GET['iduser'])) {
    $iduser = $_GET['iduser'];


    $consultaEliminar = "DELETE FROM users WHERE iduser = $iduser";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

    if ($resultadoEliminar) {
        header("Location: tablaUser.php");
        exit();
    } else {
        
        echo "Error al eliminar el usuario.";
    }
}
?>