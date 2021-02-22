<?php
session_start();

if(isset($_POST['accion'])){
    $_SESSION['valor_dado'] = rand(1,6);

    if($_POST['accion'] == "Restar"){
        //RESTA
        $_SESSION['total'] = $_SESSION['total'] - $_SESSION['valor_dado'];
        if($_SESSION['total'] <= 0){
            $_SESSION['total'] = 0;
            $_SESSION['valor_dado'] = 0;
        }
    }else{
        //SUMA
        $_SESSION['total'] = $_SESSION['total'] + $_SESSION['valor_dado'];
    }
}

header("Location:suma-resta-1.php");