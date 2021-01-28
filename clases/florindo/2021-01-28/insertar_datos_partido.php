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
$sql = "INSERT INTO `partido` (`id`, `equipo_v_id`, `equipo_l_id`, `resultado`) VALUES
(1, 1, 2, '108-95'),
(2, 3, 1, '105-124');
";
$resultado = $conn->query($sql);
if ($resultado) {
    $_SESSION['insertar_tabla_partido'] = true;
}else{
    $_SESSION['insertar_tabla_partido'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
