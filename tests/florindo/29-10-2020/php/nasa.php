<?php
$json = file_get_contents("https://api.nasa.gov/insight_weather/?api_key=DEMO_KEY&feedtype=json&ver=1.0");

$object = json_decode($json);
var_dump($object->{'681'}->{'AT'});die;


?>