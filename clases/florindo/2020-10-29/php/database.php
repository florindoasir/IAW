<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/

$servername = "localhost";
$database = "iaw";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($resultado = $conn->query("SELECT * FROM City LIMIT 2")) {
    echo "<pre>";
    var_dump($conn);die;
    printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    /* liberar el conjunto de resultados */
    $resultado->close();
}
echo "Connected successfully";
mysqli_close($conn);