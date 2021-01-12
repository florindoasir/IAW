<?php
/**
 * Sesiones (1) 01 - sesiones-1-01-1.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario Texto 1 (Formulario).
    Sesiones (1). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Formulario Texto 1 (Formulario)</h1>

  <p>
    <?php
      if(isset($_SESSION['valor_introducido'])){
        echo "El último texto enviado fue: <b>".$_SESSION['valor_introducido']."</b>";  
      }
      
    ?>
  </p>

  <form action="sesiones-1-01-2.php" method="post">
    <p><label>Escriba texto: <input type="text" name="texto" size="20" maxlength="20"></label></p>

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
