<?php
/**
 * Sesiones (1) 14 - sesiones-1-14-1.php
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
    Votar una opción.
    Sesiones (1). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Votar una opción</h1>

  <form action="sesiones-1-14-2.php" method="get">
    <p>Haga clic en los botones para votar por una opción:</p>

    <table>
      <tr>
        <td style="vertical-align: top;"><button type="submit" name="accion" value="a" style="font-size: 60px; line-height: 50px; color: hsl(200, 100%, 50%);">&#x2714;</button></td>

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>

      </tr>
      <tr>
        <td><button type="submit" name="accion" value="b" style="font-size: 60px; line-height: 50px; color: hsl(35, 100%, 50%)">&#x2714;</button></td>
        <td>
<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
        </td>
      </tr>
    </table>

    <p>
      <button type="submit" name="accion" value="cero">Poner a cero</button>
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
