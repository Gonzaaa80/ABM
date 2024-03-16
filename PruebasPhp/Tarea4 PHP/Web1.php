<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar en sesión</title>
</head>
<body>
    <h1>Guardar en sesión</h1>
    <form action="servicioMWeb.php" method="POST">
        <textarea name="texto" id="texto" cols="30" rows="10"></textarea><br>
        <button type="submit">Guardar en Sesión</button>
    </form>
</body>
</html>
