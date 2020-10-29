

<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
    <form action="form.php" method="post">
        <p>Su nombre: <input type="text" name="nombre" /></p>
        <p>Su edad: <input type="text" name="edad" /></p>
        <p><input type="submit" /></p>
    </form>
    <?php
        if($_POST){
            echo 'Hola '.$_POST['nombre'].'. Usted tiene'.$_POST['edad']. 'años';
        }
    ?>
 </body>
</html>