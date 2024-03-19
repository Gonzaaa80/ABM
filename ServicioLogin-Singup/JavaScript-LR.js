var pass = document.getElementById("pass");
var icon = document.querySelector(".bx");

icon.addEventListener("click", (e) => {
  if (pass.type === "password") {
    pass.type = "text";
    icon.classList.remove("bxs-show");
    icon.classList.add("bxs-hide");
  } else {
    pass.type = "password";
    icon.classList.remove("bxs-hide");
    icon.classList.add("bxs-show");
  }
});

function ServicioRegistrar() {
  var nom = document.getElementById("nom");
  var ema = document.getElementById("ema");
  pass = document.getElementById("pass");
  var tel = document.getElementById("tel");

  if (!nom.checkValidity() || !ema.checkValidity() || !pass.checkValidity()) {
    console.log("error en algun campo");
  } else {
    var fData = new FormData();
    fData.append("nombre", nom.value);
    fData.append("email", ema.value);
    fData.append("contraseña", pass.value);
    fData.append("telefono", tel.value);
    fetch(
      "https://bomberosalerta.com.ar/gonza/ServicioLogin-Singup/ServicioRegistrar.php",
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
    nom.value = "";
    ema.value = "";
    pass.value = "";
    tel.value = "";
  }
}
