<?php
session_start();
if(!isset($_SESSION['historial'])){
  $_SESSION['historial'] = [];
}
if(isset($_GET['reset'])){
  $_SESSION['historial'] = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Pares y nones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Pares y nones</h1>

  <p>Actualice la página para mostrar otra partida.</p>

  <table>
    <tr>
      <th colspan="2">Jugador 1<br>
        (pares)</th>
      <th colspan="2">Jugador 2<br>
        (nones)</th>
    </tr>
<?php

  $jugador1 = rand(0,5);
  $jugador2 = rand(0,5);
  $total    = $jugador1 + $jugador2;
  if($total%2 == 0){
    //numero par
    $imagenjugador1 = "gana";
    $imagenjugador2 = "pierde";
    $_SESSION['historial'][] = "Jugador 1 ha ganado";
  }else{
    //número impar
    $imagenjugador2 = "gana";
    $imagenjugador1 = "pierde";
    $_SESSION['historial'][] = "Jugador 2 ha ganado";
  }

//print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";
  echo "Total: ".$total;

    echo "<tr>";
      echo '<td><img src="img/'.$imagenjugador1.'.svg" alt="Gana" height="100"></td>';
      echo '<td><img src="img/'.$jugador1.'.svg" alt="4" height="200"></td>';
      echo '<td><img src="img/'.$jugador2.'.svg" alt="0" height="200"></td>';
      echo '<td><img src="img/'.$imagenjugador2.'.svg" alt="Pierde" height="100"></td>';
    echo '</tr>';

    ?>
  </table>
<?php
  echo "<ol>";
  foreach ($_SESSION['historial'] as $key => $value) {
    echo "<li>".$value."</li>";
  }
  echo "</ol>";
?>
  <a href="pares-y-nones.php">Volver a jugar</a></br>
  <a href="pares-y-nones.php?reset=true">Reiniciar partida</a>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>