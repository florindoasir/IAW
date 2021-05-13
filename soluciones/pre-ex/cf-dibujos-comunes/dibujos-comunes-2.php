<?php
/**
 * Dibujos comunes - dibujos-comunes-2.php
 *
 * @author Escriba aquí su nombre
 */

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dibujos comunes (Resultado).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dibujos comunes (Resultado)</h1>

<?php

if(!isset($_GET['cantidad'])){
  echo "<p class='aviso'>Introduzca la cantidad</p>";
}else{
  if($_GET['cantidad'] < 7 || $_GET['cantidad'] > 15){
    echo "<p class='aviso'>La cantidad debe estar en el rango</p>";
  }
}

if(!isset($_GET['tipo'])){
  echo "<p class='aviso'>Introduzca tipo</p>";
}else{
  if($_GET['tipo'] == ""){
    echo "<p class='aviso'>Introduzca tipo</p>";
  }
}

?>
<h2><?php echo $_GET['cantidad']; ?> emoticonos</h2>

<p style="font-size: 400%; margin: 0;">
<?php
//FOR LINEA 1
$tipo = $_GET['tipo'];
$log = [];
for ($i=0; $i < $_GET['cantidad']; $i++) {
  if($tipo == "animales"){
    $rand = rand(128005, 128024);
    echo "&#".$rand.";";
  }
  if($tipo == "relojes"){
    $rand = rand(128336, 128355);
    echo "&#".$rand.";";
  }
  if($tipo == "emoticonos"){
    $rand = rand(128512, 128531);
    echo "&#".$rand.";";
  }
  $log[] = $rand;
}
?>
</p>

<p style="font-size: 400%; margin: 0;">
<?php
$repetidos = [];
for ($i=0; $i < $_GET['cantidad']; $i++) { 
  if($tipo == "animales"){
    $rand = rand(128005, 128024);
    echo "&#".$rand.";";
  }
  if($tipo == "relojes"){
    $rand = rand(128336, 128355);
    echo "&#".$rand.";";
  }
  if($tipo == "emoticonos"){
    $rand = rand(128512, 128531);
    echo "&#".$rand.";";
  }
  foreach ($log as $key => $value) {
    if($rand == $value){
      $repetidos[] = $rand;
    }
  }
}
?>
</p>

<h2>Dibujos comunes</h2>

<p style="font-size: 400%; margin: 0;">
<?php
foreach (array_unique($repetidos) as $key => $value) {
  echo "&#".$value.";";
}
?>
</p>
  <p><a href="dibujos-comunes-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
