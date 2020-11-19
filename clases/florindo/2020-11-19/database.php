<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/

$servername = "localhost";
$database = "world";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$query = "SELECT Name, CountryCode FROM City ORDER by ID LIMIT 33";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($resultado = $conn->query($query)) {
    while( $row = $resultado->fetch_array() )
    {
        echo $row['Name'] . " " . $row['CountryCode'];
        echo "<br />";
    }
    /* liberar el conjunto de resultados */
    $resultado->close();
}
echo "Connected successfully";
mysqli_close($conn);
