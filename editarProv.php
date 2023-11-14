<?php
include ("Conexion.php");

$id = $_POST['id'];
$suppliername = $_POST['suppliername'];
$phone = $_POST['phone'];
$supplieremail = $_POST['supplieremail'];

$consulta = "UPDATE suppliers SET suppliername = '$suppliername', phone = '$phone', supplieremail = '$supplieremail'
WHERE id = '$id'";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al actualizar los datos...'); window.location = 'formProv.php?id=$id'</script>";
} else {
    echo "<script> alert('El proveedor fue actualizado correctamente'); window.location = 'tablaProv.php'</script>";
}
