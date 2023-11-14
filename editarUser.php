<?php
include ("Conexion.php");

$iduser = $_POST['iduser'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$dateBirthday = $_POST['dateBirthday'];
$streetNum = $_POST['streetNum'];
$Fracc = $_POST['Fracc'];
$CP = $_POST['CP'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];


$consulta = "UPDATE users SET name = '$name', lastname = '$lastname', dateBirthday = '$dateBirthday',
streetNum = '$streetNum', Fracc = '$Fracc', CP = '$CP', phone = '$phone', city = '$city', email = '$email' 
WHERE iduser = '$iduser'";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al actualizar los datos...'); window.location = 'formUsu.php?iduser=$iduser'</script>";
} else {
    echo "<script> alert('El usuario fue actualizado correctamente'); window.location = 'tablaUser.php'</script>";
}
