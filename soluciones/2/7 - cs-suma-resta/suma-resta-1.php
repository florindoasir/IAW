<?php
session_start();

if(!isset($_SESSION['total'])){
  $_SESSION['total'] = 0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Suma o resta. Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
  <style>
  button { background-color: white; padding: 0; border: none;}
  </style>
</head>

<body>
  <h1>Suma o resta</h1>

  <p>Haga clic en uno de los botones para tirar un dado y añadirlo al total.</p>

  <form action="suma-resta-2.php" method="post">
    <p>
      <input type="submit" name="accion" value="Añadir">
      <input type="submit" name="accion" value="Restar">
    </p>

<?php
if(isset($_SESSION['valor_dado'])){
  echo "<img src='img/".$_SESSION['valor_dado'].".svg'>";
}
print "<p>Total: ".$_SESSION['total']."</p>\n";

?>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
