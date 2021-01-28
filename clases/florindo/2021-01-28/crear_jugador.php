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
$sql = "CREATE TABLE IF NOT EXISTS `jugador` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(500) NOT NULL,
    `equipo_id` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `FK-jugador-equipo` (`equipo_id`),
    CONSTRAINT `FK-jugador-equipo` FOREIGN KEY (`equipo_id`) REFERENCES `equipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
  ";

$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['crear_tabla_jugador'] = true;
}else{
    $_SESSION['crear_tabla_jugador'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
