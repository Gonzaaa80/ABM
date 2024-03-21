<?php

header('Access-Control-Allow-Origin: *');


$contacto = $_REQUEST["contacto"];
$telefono = $_REQUEST["telefono"];




try {
    session_start();  
    $id=$_SESSION['ID_USUARIO'];
    $db = new mysqli("127.0.0.1", "u922728743_gonza_usr", "Gonza#123", "u922728743_gonza_db");
    
    $db->query("INSERT INTO ABM(CONTACTO, TELEFONO, ID_USUARIOABM) VALUES ('$contacto', '$telefono', '$id')" );
    
    echo "creado OK";
} catch (Throwable $t) {
    echo "Error al crear:".$t->getTraceAsString() ;
}




?>