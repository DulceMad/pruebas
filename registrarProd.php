<?php
include ("Conexion.php");

$productId = $_POST['productId'];
$productname = $_POST['productname'];
$price = $_POST['price'];
$supplierId = $_POST['supplierId'];
$categoryId = $_POST['categoryId'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$image = $_POST['image'];

$consulta = "INSERT INTO products (productId, productname, price, supplierId, categoryId, description, stock, image) VALUES 
('$productId', '$productname', '$price', '$supplierId', '$categoryId', '$description', '$stock', '$image') ";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al ingresar los datos...'); window.location = 'NuevoProducto.php'</script>"; 
}else{
    echo "<script> alert('El producto fue registrado correctamente'); window.location = 'tablaPro.php'</script>";
}

?>
