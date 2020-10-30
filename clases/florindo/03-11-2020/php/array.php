<?php
//ARRAY EXAMPLES
$numbers        = array(1, 2, 3, 5, 10, 20);
$employee_ids   = array(1, 2, 3, 5, 10, 20);

$teams = array(
    'Sevilla FC',
    'R. Madrid',
    'Barça',
    'At de Madrid',
    'Betis'
);

echo "<p>El ".$teams[0]. " es infinitamente mejor que el ".$teams[1]." y el ".$teams[2]."</p>";

$players = array(
    'Player 1',
    'Player 2',
    'Player 3',
    'Player 4',
    'Player 5'
);

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
$person[26] = "https://medium.com/@dinocajic";
$person[1] = 33;

foreach ($players as $key => $value) {
    echo "<p>El jugador ".$value." pertenece al ".$teams[$key]."</p>";
}