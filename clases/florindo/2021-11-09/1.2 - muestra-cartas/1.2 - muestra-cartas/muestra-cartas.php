<?php
/**
 * Muestra cartas - muestra-cartas.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Muestra cartas.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Muestra cartas</h1>

<?php

$palos = ["p", "c", "d", "t"];
$cantidad     = rand(3,12);

$c = 0;
$p = 0;
$d = 0;
$t = 0;

for($i=0; $i<$cantidad; $i++){
  $paloSacado   = $palos[rand(0,3)];
  $numeroSacado = rand(1,10);
  if($paloSacado == "c"){
    $c = $c + 1;
  }else if($paloSacado == "d"){
    $d = $d + 1;
  }else if($paloSacado == "p"){
    $p++;
  }else if($paloSacado == "t"){
    $t++;
  }
  echo '<img width="100" src="img/'.$paloSacado.$numeroSacado.'.svg">';
}

echo "<ul>";
echo "<li>Se ha sacado ".$c." cartas de corazones</li>";
echo "<li>Se ha sacado ".$d." cartas de diamantes</li>";
echo "<li>Se ha sacado ".$t." cartas de trébol</li>";
echo "<li>Se ha sacado ".$p." cartas de picas</li>";
echo "</ul>";

?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
