<?php
/**
 * Descarta palo - descarta-palo-1.php
 *
 * @author Florindo López Delgado
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Descarta palo (Formulario).
    Con formularios.
    Florindo López Delgado
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Descarta palo (Formulario)</h1>

  <form action="descarta-palo-2.php" method="post">
    <p>Elija un número de cartas (entre 2 y 12) y un palo.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de cartas:</strong></td>
          <td><input type="number" name="cantidad" min="2" max="12" value="7"></td>
        </tr>
        <tr>
          <td><strong>Palo:</strong></td>
          <td>
            <select name="palo">
              <option value="">...</option>
              <option value="c">Corazones</option>
              <option value="d">Rombos</option>
              <option value="p">Picas</option>
              <option value="t">Tréboles</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" name="mostrar" value="Mostrar">
      <input type="reset" name="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Florindo López Delgado</p>
  </footer>
</body>
</html>
