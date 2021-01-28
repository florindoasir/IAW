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
$sql = "INSERT INTO `equipo` (`id`, `name`) VALUES
(1, 'Chicago bulls'),
(2, 'LA Lakers'),
(3, 'NY Neets');
  ";
$resultado = $conn->query($sql);
if ($resultado) {
    $_SESSION['insertar_tabla_equipo'] = true;
}else{
    $_SESSION['insertar_tabla_equipo'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
