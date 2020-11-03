<?php
//ARRAY EXAMPLES
$numbers        = array(1, 2, 3, 5, 10, 20);


$teams = array(
    'Sevilla FC',
    'R. Madrid',
    'Barça',
    'At de Madrid',
    'Palencia',
    'Numancia',
    'Cádiz'
);
$players = array(
    'Player 1',
    'Player 2',
    'Player 3',
    'Player 4',
    'Player 5'
);
echo "<pre>";
echo "<p>El <b>".getRandomArray($teams). "</b> es infinitamente mejor que el <b>".getRandomArray($teams)."</b> y el <b>".getRandomArray($teams)."</b></p>";


function getRandomArray($array){
    return $array[rand ( 0 , count ( $array ) - 1 )];
}

echo "<p>El jugador asignado es ".$players[rand ( 0 , sizeof($players) -1 ) ]."</p>";


$people = [];

$person = [
    'Dino Cajic',
    32,
    '111-11-1111', // Don't store SSN like this
    'dinocajic@gmail.com',
    42.5, // favorite decimal
    true // is awesome
];


$person[6] = "Author";
$person[] = "An Illustrative Introduction to Algorithms";

$person[999] = "https://medium.com/@dinocajic";
$person[] = "donde estoy?";
$person[1] = 33;

$players = array(
    'Player 1',
    'Player 2',
    'Player 3',
    'Player 4',
    'Player 5'
);
$teams = array(
    'Sevilla FC',
    'R. Madrid',
    'Barça',
    'At de Madrid',
    'Palencia',
    'Numancia',
    'Cádiz'
);

foreach ($players as $key => $value) {
    echo "<p>El jugador ".$value." pertenece al ".$teams[$key]."</p>";
}

for ($i= 0; $i<count($players); $i++) {
    echo "<p>El jugador ".$players[$i]." pertenece al ".$teams[$i]."</p>";
}