<?PHP
    include ("Conexion.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    session_start();

    $consulta = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $resultado = $conexion->query($consulta);
    $filas = mysqli_fetch_array($resultado);

    if ($filas) {
        $rol = $filas['rol'];
        $iduser = $filas['iduser'];
        
        if ($rol == '1') {
            $_SESSION['iduser'] = $iduser;
            header("Location: vistaAdmin.html");
            exit();
        } elseif ($rol == '2') {
            $_SESSION['iduser'] = $iduser;
            header("Location: Principal.html");
            exit();
        } elseif ($rol == '3') {
            $_SESSION['iduser'] = $iduser;
            header("Location: AdministracionPedidos.PHP");
            exit();
        } elseif ($rol == '4') {
            $_SESSION['iduser'] = $iduser;
            header("Location: AdministracionPedidos.php");
            exit();
        }
    }

    echo "<script> alert('Error... No coinciden los datos :('); window.location = 'Acceso.html' </script>";
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>