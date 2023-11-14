<?php
include ("Conexion.php");

$id = $_POST['id'];
$suppliername = $_POST['suppliername'];
$phone = $_POST['phone'];
$supplieremail = $_POST['supplieremail'];
$consulta = "INSERT INTO suppliers (id, suppliername, phone, supplieremail) VALUES ('$id', '$suppliername', '$phone', '$supplieremail') ";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al ingresar los datos...'); window.location = 'NuevoProvedor.php'</script>"; 
}else{
    echo "<script> alert('El proveedor fue registrado correctamente'); window.location = 'tablaProv.php'</script>";
}

?>