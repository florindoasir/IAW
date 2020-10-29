

<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
    <form action="form.php" method="POST">
        <p>Su nombre: <input type="text" name="nombre" /></p>
        <p>Su edad: <input type="text" name="edad" /></p>
        <p><input type="submit" value="Contactar"/></p>
    </form>
    <?php
        if($_POST){
            echo 'Hola '.$_POST['nombre'].'. Usted tiene '.$_POST['edad']. ' años';
        }
        if($_GET){
            echo 'Hola '.$_GET['nombre'].'. Usted tiene '.$_GET['edad']. ' años';
        }
    ?>
 </body>
</html>