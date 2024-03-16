
<?php



header('Access-Control-Allow-Origin: *');


$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
echo "<span>$nombre $apellido </span>";


?>