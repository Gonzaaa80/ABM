<?php

header('Access-Control-Allow-Origin: *');


$idContacto = $_REQUEST["idContacto"];

session_start();  
$id=$_SESSION['ID_USUARIO'];

if(isset($_SESSION['ID_USUARIO']) && !empty($_SESSION['ID_USUARIO'])){

    try {
        $db = new mysqli("127.0.0.1", "u922728743_gonza_usr", "Gonza#123", "u922728743_gonza_db");
    
        $db->query("DELETE FROM ABM WHERE ID_CONTACTO = '$idContacto'" );
        echo "Borrado OK";
    } catch (Throwable $t) {
        echo "Error al crear:".$t->getTraceAsString() ;
    }
}else{
    echo "error";
}




?>