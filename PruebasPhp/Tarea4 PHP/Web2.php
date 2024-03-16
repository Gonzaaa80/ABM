<?php
// Iniciar la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Sesión</title>
</head>
<body>
    <h1>Texto Guardado en Sesión</h1>
    <?php
        echo "<span>" . $_SESSION['texto'] . "</span>";
    ?>
</body>
</html>