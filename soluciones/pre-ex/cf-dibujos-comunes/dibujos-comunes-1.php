<?php
/**
 * Dibujos comunes - dibujos-comunes-1.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dibujos comunes (Formulario).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dibujos comunes (Formulario)</h1>

  <form action="dibujos-comunes-2.php" method="get">
    <p>Elija un número de dibujos (entre 7 y 15) y un tipo de dibujo.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de dibujos:</strong></td>
          <td><input type="number" name="cantidad" min="7" max="15" value="11"></td>
        </tr>
        <tr>
          <td><strong>Tipo de dibujos:</strong></td>
          <td>
            <select name="tipo">
              <option value="">...</option>
              <option value="animales">Animales</option>
              <option value="relojes">Relojes</option>
              <option value="emoticonos">Emoticonos</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Mostrar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
