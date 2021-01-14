<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-1.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();

print "<!-- Ejercicio incompleto -->\n";

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

  <form action="sesiones-2-01-2.php" method="post">
    <p>Escriba su nombre:</p>

<?php

print "<!-- Ejercicio incompleto -->\n";
print "\n";

print "    <p><label>Nombre: <input type='text' name='nombre' size='20' maxlength='20'></label></p>\n";
print "\n";
if(isset($_SESSION['errornombre']) && $_SESSION['errornombre'] != ''){
  print "<p style='color:red'>".$_SESSION['errornombre']."</p>";
}

?>
    <p>
      <input type="submit" value="Siguiente">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
