<?php

header('Access-Control-Allow-Origin: *');


$idContacto = $_REQUEST["idContacto"];
$contacto = $_REQUEST["contacto"];
$telefono = $_REQUEST["telefono"];






try {
    $db = new mysqli("127.0.0.1", "u922728743_gonza_usr", "Gonza#123", "u922728743_gonza_db");

    $db->query("UPDATE ABM SET CONTACTO ='$contacto', TELEFONO ='$telefono'  WHERE ID_CONTACTO = '$idContacto'" );
    echo "Modificado OK";
} catch (Error) {
    echo "Error al Modificar";
}




?>