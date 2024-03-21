<?php
header('Access-Control-Allow-Origin: *');
include('conexion.php');

$nombre = $_REQUEST["nombre"];
$email = $_REQUEST["email"];
$contraseña = md5($_REQUEST["contraseña"]);
$telefono = $_REQUEST["telefono"];

try {
    $consultaSql = "SELECT * FROM REGISTRO WHERE NOMBRE = '$nombre' OR EMAIL = '$email'";
    $result = $conexion-> query($consultaSql);
    if($result->num_rows > 0){
        echo"Usuario o Email no disponibles";
    }else{
        $db = new mysqli("127.0.0.1", "u922728743_gonza_usr", "Gonza#123", "u922728743_gonza_db");
        $db->query("INSERT INTO REGISTRO(NOMBRE, EMAIL, CONTRASEÑA, TELEFONO) VALUES ('$nombre', '$email', '$contraseña', '$telefono')" );
        echo "Registrado OK";
    }
} catch (Throwable $t) {
    echo "Error al crear:".$t->getTraceAsString() ;
}

?>