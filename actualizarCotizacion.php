<?php
include ("Conexion.php");

$idquote = $_POST['idquote'];
$productId = $_POST['productId'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total = $_POST['total'];
$date = $_POST['date'];
$comments = $_POST['comments'];

$consulta = "UPDATE quotes SET productId = '$productId', quantity = '$quantity',
price = '$price', total = '$total', date = '$date', comments = '$comments' WHERE idquote = '$idquote'";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al actualizar los datos...'); window.location = 'EditarCotizacion.php?idquote=$idquote'</script>";
} else {
    echo "<script> alert('La cotización fue actualizada correctamente'); window.location = 'CarritoCompras.php'</script>";
}

?>