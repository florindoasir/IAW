<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/

$servername = "mysql";
$database = "world";
$username = "root";
$password = "secret";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM country ORDER by 'population desc' LIMIT 3";

if ($resultado = $conn->query($query)) {
    while( $row = $resultado->fetch_array() )
    {
        echo $row['Name'] . " (" . $row['Continent'].")";
        echo "<br />";
    }
    /* liberar el conjunto de resultados */
    $resultado->close();
}
echo "Connected successfully";
mysqli_close($conn);
