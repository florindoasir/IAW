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
    /* obtener un array asociativo */
    $arrayCities = array ();

    while ($fila = $resultado->fetch_assoc()) {
        echo "<p>Ciudad ".$fila["id"]." ".$fila["name"]."</p>";
        $arrayCities[] = $fila;
    }
echo "<pre>";    
var_dump($arrayCities);die;
    $resultado->free();
}
echo "Connected successfully";
mysqli_close($conn);
