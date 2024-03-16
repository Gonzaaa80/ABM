<?php

header('Access-Control-Allow-Origin: *');


$contacto = $_REQUEST["contacto"];
$telefono = $_REQUEST["telefono"];




try {
    $db = new mysqli("127.0.0.1", "u922728743_gonza_usr", "Gonza#123", "u922728743_gonza_db");

    $db->query("INSERT INTO ABM(CONTACTO, TELEFONO) VALUES ('$contacto', '$telefono')" );
    echo "creado OK";
} catch (Error) {
    echo "Error al crear";
}




?>