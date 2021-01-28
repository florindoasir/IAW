<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$database = "nba2";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `posicion` (`id`, `name`) VALUES
(1, 'Alero'),
(2, 'Base'),
(3, 'Pivot'),
(4, 'Ala-Pivot'),
(5, 'Escolta');
";
$resultado = $conn->query($sql);
if ($resultado) {
    $_SESSION['insertar_tabla_posicion'] = true;
}else{
    $_SESSION['insertar_tabla_posicion'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
