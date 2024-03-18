
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar en sesión</title>

    <script>
        function botonFetch(){
            let texto = document.getElementById("texto")
            var fData = new FormData();
            fData.append("texto", texto.value);
            fetch('https://bomberosalerta.com.ar/gonza/PruebasPhp/servicioMWeb.php',{method:"POST",
            body:fData,
        }).then((response)=>{
            if (!response.ok) {
             throw new Error("No se pudo obtener el contenido del archivo remoto.");
            }
             return response.text();

            }).catch((error) => {
             console.error("Error al obtener el contenido:", error);
            });
        }
    </script>
</head>
<body>
    <h1>Guardar en sesión</h1>
    <form action="servicioMWeb.php" method="POST">
        <textarea name="texto" id="texto" cols="30" rows="10"></textarea><br>
        <button type="submit">Guardar Como Accion</button>
    </form>
    <button type="submit" onclick="botonFetch()">Guardar Como Servicio</button>
</body>
</html>
