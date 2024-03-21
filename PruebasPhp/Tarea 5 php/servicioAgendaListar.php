<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');



try{
   session_start();  
   $id=$_SESSION['ID_USUARIO'];
    $db = new mysqli("127.0.0.1", "u922728743_gonza_usr", "Gonza#123", "u922728743_gonza_db");
    $result = $db->query("SELECT ID_CONTACTO, CONTACTO, TELEFONO, FECHA_MODIFICACION FROM ABM WHERE ID_USUARIOABM = $id");
$lista = array();
if($result){
        while($row = $result->fetch_object()){
            $lista[] = $row;
        }
}
echo json_encode($lista);


} catch (Throwable $t) {
    echo "Error al crear:".$t->getTraceAsString() ;
}






?>