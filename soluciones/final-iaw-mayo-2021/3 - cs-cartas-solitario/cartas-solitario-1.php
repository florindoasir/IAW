<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */
session_start();
if(!isset($_SESSION['totalc'])){
  $_SESSION['totalc'] = 0;
}
if(!isset($_SESSION['totalp'])){
  $_SESSION['totalp'] = 0;
}
if(!isset($_SESSION['totald'])){
  $_SESSION['totald'] = 0;
}
if(!isset($_SESSION['totalt'])){
  $_SESSION['totalt'] = 0;
}
print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cartas Solitario. Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
  <style>
  button { background-color: white; padding: 0; border: none;}
  </style>
</head>

<body>
  <h1>Cartas Solitario</h1>

  <p>Haga clic en uno de los botones para tirar un dado y añadirlo al total.</p>

  <form action="cartas-solitario-2.php" method="post">
    <div class="row">
      <div class="col-4">
        <input type="submit" name="accionc" value="Añadir">
        <?php
        if(isset($_SESSION['cartasc'])){

          foreach ($_SESSION['cartasc'] as $key => $value) {
            echo "<img width=100 src='img/".$value.".svg'>";
          }
          
        }
        ?>
        <p>
          Total:<span class="grande"><?php echo $_SESSION['totalc'] ?></span>
        </p>
      </div>
      <div class="col-4">
        <input type="submit" name="accionp" value="Añadir">
        <?php
        if(isset($_SESSION['cartasp'])){

          foreach ($_SESSION['cartasp'] as $key => $value) {
            echo "<img width=100 src='img/".$value.".svg'>";
          }
          
        }
        ?>
        <p>
          Total:<span class="grande"><?php echo $_SESSION['totalp'] ?></span>
        </p>
      </div>
      <div class="col-4">
        <input type="submit" name="acciont" value="Añadir">
        <?php
        if(isset($_SESSION['cartast'])){

          foreach ($_SESSION['cartast'] as $key => $value) {
            echo "<img width=100 src='img/".$value.".svg'>";
          }
          
        }
        ?>
        <p>
          Total:<span class="grande"><?php echo $_SESSION['totalt'] ?></span>
        </p>
      </div>
      <div class="col-4">
        <input type="submit" name="acciond" value="Añadir">
        <?php
        if(isset($_SESSION['cartasd'])){

          foreach ($_SESSION['cartasd'] as $key => $value) {
            echo "<img width=100 src='img/".$value.".svg'>";
          }
          
        }
        ?>
        <p>
          Total:<span class="grande"><?php echo $_SESSION['totald'] ?></span>
        </p>
      </div>
    </div>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
