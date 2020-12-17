<?php
/**
 * Sesiones (1) 11 - sesiones-1-11-1.php
 *
 * @author Escriba aquí su nombre
 *
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Subir y bajar número.
    Sesiones (1). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Subir y bajar número</h1>

  <form action="sesiones-1-11-2.php" method="get">
    <p>Haga clic en los botones para modificar el valor:</p>

    <p>
      <button type="submit" name="accion" value="bajar" style="font-size: 4rem">-</button>

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>

      <button type="submit" name="accion" value="subir" style="font-size: 4rem">+</button>
    </p>

    <p>
      <button type="submit" name="accion" value="cero">Poner a cero</button>
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
