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
  <title>Procesar Login</title>
</head>

<body>
  <h1>Login</h1>


  <?php
    
    $username = "florindo";
    $password = "123456";
    $errores = [];

    if(isset($_POST['enviar'])){
        if(isset($_POST['username']) && $_POST['username'] != $username){
            $errores[] = "Usuario no encontrado";
        }
        if(isset($_POST['password']) && $_POST['password'] != $password){
            $errores[] = "Pasword no encontrada";
        }
    }

    if(count($errores) == 0){
        // LOGIN OK
        $_SESSION['sesion'] = $usuario;
        echo "<b>Sesion iniciada</b>";
    }else{
        //ERRORES TIENE VALORES, LUEGO EL LOGIN HA FALLADO
        echo "<ul>";
        foreach($errores as $error ){

            echo "<li>".$error."</li>";
            
        }
        echo "</ul>";
    }

    ?>
</body>
</html>
