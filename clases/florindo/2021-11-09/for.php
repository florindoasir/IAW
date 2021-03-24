<?php

$numeroBits = 10;
$resultados = [];

echo "A.- ";
for ($i=0; $i < 10; $i++) { 
    $bit = rand(0,1);
    echo $bit." ";
    $resultados[] = $bit;
}

echo "<br>Â.-  :";
foreach ($resultados as $key => $value) {
    if($key > 0){
        if($resultados[$key] == $resultados[$key-1]){
            echo "0 ";
        }else{
            echo "1 ";
        }
    }
}


?>