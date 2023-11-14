<?php
include ("Conexion.php");

$id = $_POST['id'];
$categoryname = $_POST['categoryname'];
$consulta = "INSERT INTO categories (id, categoryname) VALUES ('$id', '$categoryname') ";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al ingresar los datos...'); window.location = 'NuevaCategoria.php'</script>"; 
}else{
    echo "<script> alert('La categoria fue registrada correctamente'); window.location = 'tablaCat.php'</script>";
}

?>