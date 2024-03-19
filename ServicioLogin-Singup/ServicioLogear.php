<?php


header('Access-Control-Allow-Origin: *');

$nombre = $_REQUEST["nom"];
$contraseña = $_REQUEST["contra"];


echo"los datos que recibi fueron $nombre Y $contraseña";






?>