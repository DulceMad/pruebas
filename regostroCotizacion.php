<?php
include ("Conexion.php");

$idquote = $_POST['idquote'];
$productId = $_POST['productId'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total = $_POST['total'];
$date = $_POST['date'];
$comments = $_POST['comments'];

$consulta = "INSERT INTO quotes (idquote, productId, quantity, price, total, date, comments) VALUES
('$idquote', '$productId', '$quantity', '$price', '$total', '$date', '$comments')";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al ingresar los datos...'); window.location = 'NuevaCotización.php'</script>"; 
}else{
    echo "<script> alert('La compra fue registrada correctamente'); window.location = 'CarritoCompras.php'</script>";
}

?>