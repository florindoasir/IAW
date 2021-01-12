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
    
    $usernameValid = "florindo";
    $passwordValid = "123456";

    $usernameValid2 = "admin";
    $passwordValid2 = "1234567";
    $errores = [];

    if(isset($_POST['enviar'])){

        if(isset($_POST['username']) && isset($_POST['password'])){

            if($_POST['username'] == $usernameValid 
                && $_POST['password'] == $passwordValid){
                //LOGIN OK uservalid1
            }else if ($_POST['username'] == $usernameValid2 
                && $_POST['password'] == $passwordValid2){
                //LOGIN OK uservalid2
            }else{
                $errores[] = "Usuario y contraseña no coinciden";
            }
            
        }else{
            $errores[] = "Usuario y contraseña son obligatorios";
        }
    }

    if(count($errores) == 0){
        // LOGIN OK
        $_SESSION['sesion'] = $_POST['username'];
        header("Location: http://localhost/IAW/clases/florindo/2021-01-12/login.php");
        die();
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
