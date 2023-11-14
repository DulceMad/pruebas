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
$consulta = "INSERT INTO users (iduser, name, lastname, dateBirthday, streetNum, Fracc, CP, phone, city, email, password, rol) 
VALUES ('$iduser', '$name', '$lastname', '$dateBirthday', '$streetNum', '$Fracc', '$CP', '$phone', '$city', '$email', '$password', '$rol') ";

$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){
    echo "<script> alert('Error al ingresar los datos...'); window.location = 'NuevoUser.php'</script>"; 
}else{
    echo "<script> alert('El proveedor fue registrado correctamente'); window.location = 'tablaUser.php'</script>";
}

?>