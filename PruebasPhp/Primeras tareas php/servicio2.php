<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$frutas = array("pera","manzana","zandia","uva","banana","mango","frutilla","durazno","cereza","naranja","pomelo","mandarina");


$frutas_json = json_encode($frutas);

echo $frutas_json;

?>