<?php
include ("Conexion.php");

$id = $_POST['id'];
$categoryname = $_POST['categoryname'];

$consulta = "UPDATE categories SET categoryname = '$categoryname' WHERE id = '$id'";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al actualizar los datos...'); window.location = 'formCat2.php?id=$id'</script>";
} else {
    echo "<script> alert('La categoria fue actualizada correctamente'); window.location = 'tablaCat.php'</script>";
}
