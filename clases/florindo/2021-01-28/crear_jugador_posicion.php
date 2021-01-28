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
$sql = "CREATE TABLE IF NOT EXISTS `jugador-posicion` (
    `jugador_id` int(11) NOT NULL,
    `posicion_id` int(11) NOT NULL,
    PRIMARY KEY (`jugador_id`,`posicion_id`) USING BTREE,
    KEY `FK-posicion` (`posicion_id`),
    CONSTRAINT `FK-jugador` FOREIGN KEY (`jugador_id`) REFERENCES `jugador` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `FK-posicion` FOREIGN KEY (`posicion_id`) REFERENCES `posicion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['crear_tabla_jugador_posicion'] = true;
}else{
    $_SESSION['crear_tabla_jugador_posicion'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
