<?php

$profesores = array(
    'Fidel',
    'Javier',
    'Marisol',
    'Florindo',
    'Roberto'
);
$asignaturas = array(
    'Bases de datos',
    'IAW',
    'ASO',
    'Seguridad',
    'Servicios en red',
    'Empresa'
);
echo "<p>El profesor <b>".getRandomArray($profesores). "</b> tiene que dar  <b>".getRandomArray($asignaturas)."</b> , <b>".getRandomArray($asignaturas)."</b> y <b>".getRandomArray($asignaturas)."</b></p>";

function getRandomArray($array){
    return $array[rand ( 0 , count ( $array ) - 1 )];
}