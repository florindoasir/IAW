<?php

require_once "biblioteca-mysql.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario en dos pasos (Formulario 1).
    Sesiones (2). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Formulario en dos pasos (Formulario 1)</h1>

  
<?php
$db = conectaDb();
$consulta = "SELECT * FROM country";
$result   = $db->query($consulta);
foreach ($result as $key => $value) {
    var_dump($value);
}
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

