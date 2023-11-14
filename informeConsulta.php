<?php
include("Conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['productId'])) {
        $productId = $_POST['productId'];
    } else {
        $productId = ""; // o cualquier valor predeterminado que desees
    }

    if (isset($_POST['mes'])) {
        $mes = $_POST['mes'];
    } else {
        $mes = ""; // o cualquier valor predeterminado que desees
    }

    // Realizar la consulta y obtener el resultado utilizando una consulta preparada
    $sql = "SELECT productname, image, dateOrder, quantity FROM vistaInforme WHERE vistaInforme.productId = ? AND vistaInforme.mes = ?";
    $stmt = mysqli_prepare($conexion, $sql);

    // Verificar si la preparación de la consulta fue exitosa
    if ($stmt) {
        // Vincular los parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "ii", $productId, $mes);
        mysqli_stmt_execute($stmt);

        // Obtener los resultados y almacenarlos en un array
        $resultados = array();
        $resultados['productId'] = $productId; // Agrega el productId a los resultados
        $resultados['mes'] = $mes; // Agrega el mes a los resultados

        // Vincular las columnas del resultado
        mysqli_stmt_bind_result($stmt, $productname, $image, $dateOrder, $quantity);

        while (mysqli_stmt_fetch($stmt)) {
            $resultado = array(
                'productname' => $productname,
                'image' => $image,
                'dateOrder' => $dateOrder,
                'quantity' => $quantity
            );
            $resultados[] = $resultado;
        }

        // Variable de sesión
        session_start();
        // Guardar el array de resultados en una variable de sesión
        $_SESSION['resultadoConsulta'] = $resultados;

        // Redireccionar a la página de resultados
        header("Location: InformeCompras.php");
        exit();
    } else {
        // Manejo de error en caso de preparación de consulta fallida
        echo "Error en la consulta preparada: " . mysqli_error($conexion);
    }
}
?>
