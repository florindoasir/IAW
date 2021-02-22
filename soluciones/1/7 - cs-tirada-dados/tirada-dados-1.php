<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Florindo López Delgado
 */
 session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
<?php

 $dados1 = rand(1, 6);
 $dados2 = rand(1, 6);
 $dados3 = rand(1, 6);

 $_SESSION['dado1'] = $dados1;
 $_SESSION['dado2'] = $dados2;
 $_SESSION['dado3'] = $dados3;

?>
<p>
  <img src="<?php echo "img/".$dados1.".svg"; ?>" alt="4" width="140" height="140">
  <img src="<?php echo "img/".$dados2.".svg"; ?>" alt="1" width="140" height="140">
  <img src="<?php echo "img/".$dados3.".svg"; ?>" alt="2" width="140" height="140">
</p>
<p>Valor Total conseguido: <?php echo $dados1 + $dados2 + $dados3; ?></p>
<p>
  <a href="tirada-dados-1.php">Volver a tirar</a>
<p>
</p>
  <a href="tirada-dados-2.php">Resumen de la tirada con sesión</a>
</p>
<form action="tirada-dados-2.php" method="post">
  <input type="hidden" name="dado1" value="<?php echo $dados1; ?>" >
  <input type="hidden" name="dado2" value="<?php echo $dados2; ?>" >
  <input type="hidden" name="dado3" value="<?php echo $dados3; ?>" >
  <input type="submit" name="enviar" value="Resumen de la tirada desde el form"> 
</form>

<footer>
  <p>Florindo López Delgado</p>
</footer>
</body>
</html>
