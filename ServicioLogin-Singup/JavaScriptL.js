
function ServicioLogin() {
    var nom = document.getElementById("nom")
    var pass = document.getElementById("pass")
    var ema = document.querySelector(".ema")

    if (!nom.checkValidity() || !pass.checkValidity()) {
      console.log("error en algun campo");
      return
    }
    
    var fData = new FormData();
    fData.append("nombre", nom.value);
    fData.append("email", ema.value);
    fData.append("contraseña", pass.value);
    fetch(
      "https://bomberosalerta.com.ar/gonza/ServicioLogin-Singup/ServicioLogear.php",
      {
        method: "POST",
        body: fData,
      }
    ).then((response) => {
      if (!response.ok) throw new Error( "No se pudo obtener el contenido del archivo remoto.");
      return response.text();
    }).then((resp) => {
      console.log(resp);
      if (resp == 'OK') {
        window.location = "Agenda"
      }else{
        toastError(resp)
      }
    }).catch((error) => {
      console.error("Error al obtener el contenido:", error);
    });
    

  }



  