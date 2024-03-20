<?php
session_start();
if(empty($_SESSION['ID_USUARIO'])) {
    header("location:Log-in");
} else {
    header("location:Agenda");
}
?>

