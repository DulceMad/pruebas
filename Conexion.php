<?PHP

	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "ftkbikes";

	$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

?>