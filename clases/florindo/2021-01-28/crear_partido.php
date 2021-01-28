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
$sql = "CREATE TABLE IF NOT EXISTS `partido` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `equipo_v_id` int(11) NOT NULL,
    `equipo_l_id` int(11) NOT NULL,
    `resultado` varchar(50) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `FK-equiipo-visitante` (`equipo_v_id`),
    KEY `FK-equipo-local` (`equipo_l_id`),
    CONSTRAINT `FK-equiipo-visitante` FOREIGN KEY (`equipo_v_id`) REFERENCES `equipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `FK-equipo-local` FOREIGN KEY (`equipo_l_id`) REFERENCES `equipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
";
$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['crear_tabla_partido'] = true;
}else{
    $_SESSION['crear_tabla_partido'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
