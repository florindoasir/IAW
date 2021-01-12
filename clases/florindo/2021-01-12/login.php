<?php
/**
 * Escriba un programa que cada vez que se ejecute
 * muestre un círculo de 50px de radio y de un color elegido al azar.
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
  <title>Login</title>
</head>

<body>
  <h1>Login</h1>


  <?php

    if(isset($_SESSION['sesion'])){
        echo "<p><b>Hola ".$_SESSION['sesion']."</b></p>";
        if($_SESSION['sesion'] == "admin"){
            echo "<p><a href ='insertarnoticia.php'>insertar noticia</a></p>";
            echo "<p><a href ='consultarnoticia.php'>Consultar noticia</a></p>";
            echo "<p><a href ='eliminarnoticia.php'>Eliminar noticia</a></p>";
            echo "<p><a href ='logout.php'>Logout</a></p>";
        }else{
            echo "<p><a href ='consultarnoticia.php'>Consultar noticia</a></p>";
            echo "<p><a href ='logout.php'>Logout</a></p>";
        }
    }else{
    ?>
        <form action="procesarlogin.php" method="post">
            <p>
                <label>
                    Username
                </label>
                <input name="username" type="text" >
            </p>
            <p>
                <label>
                    Password
                </label>
                <input name="password" type="password" >
            </p>
            <p>
                <input name="enviar" type="submit" value="Login">
            </p>
            
        </form>
    <?php
    }
    ?>
</body>
</html>
