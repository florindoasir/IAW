<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre una tirada de dados entre 1 y 6,
 * al azar, y coloque la ficha en la posición correspondiente.
 *
 * La posición de la ficha cx depende del valor obtenido en el dado:
 * La posición se puede calcular a partir del valor del dado mediante la fórmula: $posicion = 100 * $dado - 50
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
    Avance de ficha.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>
  <form action ="dado-ficha.php" method="post">
    <input type="number" min="1" max="6" name="valor_dado">
    <input type="submit" name="enviar" value="enviar">
  </form>

  <?php

    if(isset($_POST['enviar'])){
      echo "<p><img src='img/".$_POST['valor_dado'].".svg'><p>";
    }

    $randonValue = $_POST['valor_dado'];
    //$randonValue = rand(1,6);

    $background = [
      "white",
      "white",
      "white",
      "white",
      "white",
      "white",
    ];

    $background[$randonValue-1] = "red";

    foreach ($background as $key => $bg) {
      echo "<div style='background-color:".$bg."'>".($key+1)."</div>";
    }

  ?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
