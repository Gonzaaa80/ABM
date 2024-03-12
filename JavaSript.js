var lista;
var accion;
var idContactoModificar;

function getListado() {
  fetch("https://bomberosalerta.com.ar/cursoweb/servicioAgendaListar")
    .then((response) => {
      if (!response.ok) {
        throw new Error("No se pudo obtener el contenido del archivo remoto.");
      }
      return response.json();
    })
    .then((resp) => {
      console.log(resp);
      lista = resp;
      let filas = "";
      for (let i = 0; i < resp.length; i++) {
        filas += `<tr>
        <td><button onclick="modificar(${i})" data-bs-toggle="modal"
        data-bs-target="#mi-modal" class="btn btn-primary">Editar <i class="fa-solid fa-pen-to-square"></i></button></td>

        <td>${resp[i].CONTACTO} </td>

        <td>${resp[i].TELEFONO} </td>

        <td>${resp[i].FECHA_MODIFICACION} </td>
      
      
      
      <td><button onclick="delAlert(${resp[i].ID_CONTACTO})" class="btn btn-danger">Borrar <i class="fa-solid fa-trash"></i></button></td>
        </tr>
      `;
      }
      document.getElementById("tbody").innerHTML = filas;
    })
    .catch((error) => {
      console.error("Error al obtener el contenido:", error);
    });
}

function crear() {
  accion = "crear";
  resetearFormulario("formulario");
 
}

function modificar(i) {
  accion = "modificar";
  resetearFormulario("formulario");
  // buscar con el indice el elemento de la lista que quiero editar
  let objAModificar = lista[i];
  idContactoModificar = objAModificar.ID_CONTACTO;
  document.getElementById("nom").value = objAModificar.CONTACTO;
  document.getElementById("num").value = objAModificar.TELEFONO;
  // completar el form con los datos del que estoy editando
}

function guardar() {
  if (accion == "crear") {
    fetchServicioCrear();
  } else if (accion == "modificar") {
    fetchServicioModificar();
  }
}

function fetchServicioCrear() {
  //accion = "crear";
  var contacto = document.getElementById("nom");
  var num = document.getElementById("num");

  //if (!funcionValidarInputs(["idInput","otroId","asdfg"])) return

  if (!num.checkValidity() || !contacto.checkValidity()) {
    document.getElementById("demonom").innerHTML = contacto.validationMessage;
    document.getElementById("demonum").innerHTML = num.validationMessage;
  } else {
    document.getElementById("demonom").innerHTML = "Input OK";

    var fData = new FormData();
    fData.append("telefono", num.value);
    fData.append("contacto", contacto.value);

    fetch("https://bomberosalerta.com.ar/cursoweb/servicioAgendaCrear", {
      method: "POST",
      body: fData,
    })
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
        //sweetalert con resp
        getListado();
      })
      .catch((error) => {
        console.error("Error al obtener el contenido:", error);
      });
  }
}

function fetchServicioModificar() {
  var contacto = document.getElementById("nom").value;
  var telefono = document.getElementById("num").value;
  var fData = new FormData();
  fData.append("idContacto", idContactoModificar);
  fData.append("contacto", contacto);
  fData.append("telefono", telefono);
  fetch("https://bomberosalerta.com.ar/cursoweb/servicioAgendaModificar", {
    method: "POST",
    body: fData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("No se pudo obtener el contenido del archivo remoto.");
      }
      return response.text();
    })

    .then((resp) => {
      
      //sweetalert con resp
      getListado();
      console.log(resp);
    })
    .catch((error) => {
      console.error("Error al obtener el contenido:", error);
    });
}

function borrar(idContacto) {
  var fData = new FormData();
  fData.append("idContacto", idContacto);
  fetch("https://bomberosalerta.com.ar/cursoweb/servicioAgendaBorrar", {
    method: "POST",
    body: fData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("No se pudo obtener el contenido del archivo remoto.");
      }
      return response.text();
    })

    .then((resp) => {
      console.log("El ID es: " + idContacto);
      //sweetalert con resp
      getListado();
      console.log(resp);
    })
    .catch((error) => {
      console.error("Error al obtener el contenido:", error);
    });
}

getListado();

toastr.info('Are you the 6 fingered man?')