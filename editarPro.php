<?php
include ("Conexion.php");

$productId = $_POST['productId'];
$productname = mysqli_real_escape_string($conexion, $_POST['productname']); // Escapar y sanear los datos
$price = floatval($_POST['price']); // Convertir a tipo float
$supplierId = intval($_POST['supplierId']); // Convertir a tipo int
$categoryId = intval($_POST['categoryId']); // Convertir a tipo int
$description = mysqli_real_escape_string($conexion, $_POST['description']); // Escapar y sanear los datos
$stock = intval($_POST['stock']); // Convertir a tipo int
$image = mysqli_real_escape_string($conexion, $_POST['image']); // Escapar y sanear los datos


$consulta = "UPDATE products SET productname = '$productname', price = '$price', supplierId = '$supplierId',
categoryId = '$categoryId', description = '$description', stock = '$stock', image = '$image' WHERE productId = '$productId'";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al actualizar los datos...'); window.location = 'formProd.php?productId=$productId'</script>";
} else {
    echo "<script> alert('El usuario fue actualizado correctamente'); window.location = 'tablaPro.php'</script>";
}