<?php
header('Access-Control-Allow-Origin: *');

include('conexion.php');

try {
    if (isset($_POST['nombre']) && isset($_POST['contraseña'])) {
        $nombre = $_REQUEST["nombre"];
        $email = $_REQUEST["email"];
        $contraseña = $_REQUEST["contraseña"];

        $consultaSql = "SELECT * FROM REGISTRO WHERE NOMBRE = '$nombre' OR EMAIL = '$email' AND CONTRASEÑA = '$contraseña'";

        $result = $conexion->query($consultaSql);

        if ($result->num_rows > 0) {
            echo "OK";
        } else {
            echo "No existe usuario";
        }
    } else {
        echo "Los valores no estan seteados";
    }
} catch (Throwable $t) {
    echo "Error al crear:" . $t->getTraceAsString();
}
