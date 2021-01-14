<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
$_SESSION['errornombre'] = "";

if(isset($_POST['nombre'])){
    if($_POST['nombre'] == ""){
        $_SESSION['errornombre'] = "Nombre es obligatorio";
    }
}


if($_SESSION['errornombre'] != ""){
    //FORM Y NOMBRE KO. GUARDO EN SESION Y VOY A LA PAG 1
    header("Location:sesiones-2-01-1.php");
}else{
    //FORM Y NOMBRE OK. GUARDO EN SESION Y VOY A LA PAG 3
    $_SESSION['nombre'] = $_POST['nombre'];
    header("Location:sesiones-2-01-3.php");
}
