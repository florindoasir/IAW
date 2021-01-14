<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-2.php
 *
 * @author Escriba aquí su apellidos
 *
 */
session_start();
$_SESSION['errorapellidos'] = "";

if(isset($_POST['apellidos'])){
    if($_POST['apellidos'] == ""){
        $_SESSION['errorapellidos'] = "apellidos es obligatorio";
    }
}


if($_SESSION['errorapellidos'] != ""){
    //FORM Y apellidos KO. GUARDO EN SESION Y VOY A LA PAG 1
    header("Location:sesiones-2-01-3.php");
}else{
    //FORM Y apellidos OK. GUARDO EN SESION Y VOY A LA PAG 3
    $_SESSION['apellidos'] = $_POST['apellidos'];
    header("Location:sesiones-2-01-5.php");
}
