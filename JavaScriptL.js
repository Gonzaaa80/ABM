
function servicioLogin(){
    var nom = document.getElementById("nom");
    var pass = document.getElementById("pass");
   
  
    if (!nom.checkValidity() || !pass.checkValidity()) {
      console.log("error en algun campo");
    } else {
      var fData = new FormData();
      fData.append("nom", nom.value);
      fData.append("contra", pass.value);
      fetch(
        "https://bomberosalerta.com.ar/gonza/ServicioLogin-Singup/ServicioLogear.php",
        {
          method: "POST",
          body: fData,
        }
      )
        .then((response) => {
          if (!response.ok) {
            throw new Error(
              "No se pudo obtener el contenido del archivo remoto."
            );
          }
          return response.text();
        })
        .then((resp) => {
          console.log(resp);
        })
        .catch((error) => {
          console.error("Error al obtener el contenido:", error);
        });
  
      
    }
  
  
  }
  