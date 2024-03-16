<?php

session_start();
header('Access-Control-Allow-Origin: *');

    $texto = $_REQUEST['texto'];
    $_SESSION['texto'] = $texto;

    