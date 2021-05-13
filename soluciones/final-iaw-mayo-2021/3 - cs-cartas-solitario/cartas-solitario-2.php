<?php

session_start();
//INICIALIZO ARRAYS SI NO EXISTEN
if(!isset($_SESSION['cartasc'])){
    $_SESSION['cartasc'] = [];
}
if(!isset($_SESSION['cartasp'])){
    $_SESSION['cartasp'] = [];
}
if(!isset($_SESSION['cartast'])){
    $_SESSION['cartast'] = [];
}
if(!isset($_SESSION['cartasd'])){
    $_SESSION['cartasd'] = [];
}


$numero = rand(1,10);

if(isset($_POST["accionc"])){
    $_SESSION['cartasc'][] = "c".$numero;
    $_SESSION['totalc'] = $_SESSION['totalc'] + $numero;
}
if(isset($_POST["accionp"])){
    $_SESSION['cartasp'][] = "p".$numero;
    $_SESSION['totalp'] = $_SESSION['totalp'] + $numero;

}
if(isset($_POST["acciont"])){
    $_SESSION['cartast'][] = "t".$numero;
    $_SESSION['totalt'] = $_SESSION['totalt'] + $numero;

}
if(isset($_POST["acciond"])){
    $_SESSION['cartasd'][] = "d".$numero;
    $_SESSION['totald'] = $_SESSION['totald'] + $numero;
}

if($_SESSION['totalc'] > 50 
    || $_SESSION['totalp'] > 50 
    || $_SESSION['totald'] > 50 
    || $_SESSION['totalt'] > 50
){
    $_SESSION['totald'] = 0;
    $_SESSION['totalp'] = 0;
    $_SESSION['totalc'] = 0;
    $_SESSION['totalt'] = 0;

    $_SESSION['cartasc'] = [];
    $_SESSION['cartast'] = [];
    $_SESSION['cartasp'] = [];
    $_SESSION['cartasd'] = [];
}

header("Location:cartas-solitario-1.php");