<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DROP DATABASE IF EXISTS `nba2`";


$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['resetear'] = true;
}else{
    $_SESSION['resetear'] = false;
}



$sql = "CREATE DATABASE IF NOT EXISTS `nba2`";

$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['resetear'] = true;
}else{
    $_SESSION['resetear'] = false;
}


echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");


