var lista;
var accion;
var idContactoModificar;
var valorc;

const myModal = new bootstrap.Modal('#mi-modal')


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
    answ()

  } else if (accion == "modificar") {
    fetchServicioModificar();
    answ()
  }
}

function fetchServicioCrear() {
  
  var contacto = document.getElementById("nom");
  var num = document.getElementById("num");

  //if (!funcionValidarInputs(["idInput","otroId","asdfg"])) return

  if (!num.checkValidity() || !contacto.checkValidity()) {
    valorc="falso"
    console.log(valorc)
    
  } else {
    valorc="verdadero"
    console.log(valorc)

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


function answ() {
  if (valorc == "falso"){
    toastAlert("revisar", "problema con Nombre o Número")
}else {
    sucAlert()
   myModal.hide()
  }
  }


function fetchServicioModificar() {
  var contacto = document.getElementById("nom");
  var telefono = document.getElementById("num");

  if (!telefono.checkValidity() || !contacto.checkValidity()) {
    valorc = "falso" 
    console.log(valorc)
  } else {
    valorc="verdadero"
    var fData = new FormData();
  fData.append("idContacto", idContactoModificar);
  fData.append("contacto", contacto.value);
  fData.append("telefono", telefono.value);
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

