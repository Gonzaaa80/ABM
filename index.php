<?php
include('ServicioLogear');
session_start();

if(isset($_SESSION['ID_USUARIO']) && !empty($_SESSION['ID_USUARIO'])) {
    header("location:Agenda.php");
} else {
    echo "Sesión No valida. Usuario no autenticado.";
}
?>

