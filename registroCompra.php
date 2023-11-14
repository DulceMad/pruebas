<?php
include ("Conexion.php");

$idOrder = $_POST['idOrder'];
$idProducts = $_POST['idProducts'];
$dateOrder = $_POST['dateOrder'];
$quantity = $_POST['quantity'];

$consulta = "INSERT INTO orders (idOrder, idProducts, dateOrder, quantity) VALUES ('$idOrder', '$idProducts', '$dateOrder', '$quantity') ";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al ingresar los datos...'); window.location = 'NuevaCompra.php'</script>"; 
}else{
    echo "<script> alert('La compra fue registrada correctamente'); window.location = 'AdministracionPedidos.PHP'</script>";
}

?>