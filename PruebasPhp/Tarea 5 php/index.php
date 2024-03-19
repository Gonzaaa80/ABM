<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function SevicioAgendaListar(){
            fetch('https://bomberosalerta.com.ar/gonza/Tarea5php/servicioAgendaListar.php').then((response)=>{
                if (!response.ok) {
                 throw new Error("No se pudo obtener el contenido del archivo remoto.");
             }
             return response.json();
            }).then((resp)=>{
                console.log(resp)
                let filas = "";
                for (let i = 0; i < resp.length; i++){
                    filas+=`
                    <tr>
                        <td>${resp[i].CONTACTO}</td>
                        <td>${resp[i].TELEFONO}</td>
                        <td>${resp[i].FECHA_MODIFICACION}</td>
                        
                        
                        </tr> 
                    `
                    
                }
                document.getElementById("tbody").innerHTML+=filas
            }).catch((error) => {
              console.error("Error al obtener el contenido:", error);
            });



        }
        SevicioAgendaListar()
        

    </script>
</head>
<body>
    <table>
        <tr>
            <th>CONTACTO</th>
            <th>TELEFONO</th>
            <th>FECHA_MODIFICACION</th>
        </tr>
        <tbody id="tbody"></tbody>
    </table>
</body>
</html>