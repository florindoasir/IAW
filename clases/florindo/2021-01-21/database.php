<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/

$servername = "127.0.0.1";
$database = "test_iaw";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM Country  LIMIT 3";

if ($resultado = $conn->query($query)) {
    while( $row = $resultado->fetch_array() )
    {
        echo $row['name'] . " (" . $row['desc'].")";
        echo "<br />";
    }
    /* liberar el conjunto de resultados */
    $resultado->close();
}
echo "Connected successfully";
mysqli_close($conn);
