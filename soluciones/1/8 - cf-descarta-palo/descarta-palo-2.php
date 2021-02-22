<?php
/**
 * Descarta palo - descarta-palo-2.php
 *
 * @author Florindo López Delgado
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Descarta palo (Resultado).
    Con formularios.
    Florindo López Delgado
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Descarta palo (Resultado)</h1>

<?php

$errores = [];
if(isset($_POST['mostrar'])){
  if(isset($_POST['cantidad']) && ($_POST['cantidad'] < 2 || $_POST['cantidad'] > 12)){
    $errores['cantidad'] = "El número de cartas indicado no está en el rango permitido";
  }

  if(isset($_POST['palo']) && $_POST['palo'] == ""){
    $errores['palo'] = "Debe seleccionar un palo";
  }
}

if(count($errores) > 0){
  foreach ($errores as $key => $value) {
    echo  "<p class='aviso'>".$value."</p>";
  }
}

if(isset($_POST['mostrar']) && count($errores) == 0){

  $palo       = $_POST['palo'];
  $cantidad   = $_POST['cantidad'];

  $palos      = ["c","d","p","t"];

  $palosNombres = [];
  $palosNombres["c"] = "Corazones";
  $palosNombres["d"] = "Diamantes";
  $palosNombres["p"] = "Picas";
  $palosNombres["t"] = "Trébol";

  $descartes  = [];
?>
  <h2><?php echo $cantidad; ?> cartas</h2>

  <p>
    <?php
      for ($i = 1; $i <= $cantidad; $i++) {
        $palosacado = $palos[rand(0,3)];
        $cartasacada = rand(1,10);

        echo '<img src="img/'.$palosacado.$cartasacada.'.svg" alt="8" width="100">';

        if($palosacado != $palo){
          $descartes[] = $palosacado.$cartasacada;
        }
      }
    ?>
  </p>

  <h2>Resultado</h2>
  <?php if(count($descartes) > 0){
  ?>
    <p>Hay <?php echo count($descartes); ?> cartas que no son 
    <?php
        echo $palosNombres[$palo];
    ?>.</p>

    <p>
      <?php
        foreach ($descartes as $key => $value) {
          echo '<img src="img/'.$value.'.svg" alt="8" width="100">';
        }
      ?>
    </p>
  <?php   
  }else{
  ?>
    No hay cartas que no sean <?php echo $palosNombres[$palo]; ?>.</p>
  <?php   
  }
  ?>
<?php
}
?>
  <p><a href="descarta-palo-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Florindo López Delgado</p>
  </footer>
</body>
</html>

