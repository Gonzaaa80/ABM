
var lista;
var accion;

function getListado(){
  fetch("https://bomberosalerta.com.ar/cursoweb/servicioAgendaListar",)
            .then((response) => {
              if (!response.ok) {
                throw new Error(
                  "No se pudo obtener el contenido del archivo remoto."
                );
              }
              return response.json();
            })
            .then((resp) => {
              console.log(resp);
              lista = resp;
              let filas = "";
              for (let i = 0; i < resp.length; i++) {
                filas += `<tr><td><button onclick="modificar(${i})">Editar</button></td>
                            <td>${resp[i].CONTACTO} </td>
                            <td>${resp[i].TELEFONO} </td>
                            <td>${resp[i].FECHA_MODIFICACION} </td>
                            <td><button onclick="borrar(${resp[i].ID_CONTACTO})">Borrar <i class="fa-solid fa-trash"></i></button></td>
                          </tr>
                          `;
              }
              document.getElementById("tbody").innerHTML = filas;
            })
            .catch((error) => {
              console.error("Error al obtener el contenido:", error);

            });
          
}

function crear(){
  accion = 'crear'
  resetearFormulario('formulario');
}

function modificar(i){
  accion = 'modificar'
  resetearFormulario('formulario');
  // buscar con el indice el elemento de la lista que quiero editar
  // completar el form con los datos del que estoy editando
}


function guardar(){
  if (accion == 'crear') {
    fetchServicioCrear()
  } else if(accion == 'modificar') {
    fetchServicioModificar()
  }

}



function fetchServicioCrear(){
  //validar inputs del form.
  var contacto = document.getElementById('nom').value;
  var num = document.getElementById('num').value;
  var fData = new FormData();
	fData.append('contacto', contacto)
	fData.append('telefono', num)

  fetch("https://bomberosalerta.com.ar/cursoweb/servicioAgendaCrear",
        {method:'POST', body: fData})
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
              getListado()
            })
            .catch((error) => {
              console.error("Error al obtener el contenido:", error);
            });     
    
}

/*
const fetchServicioCrear = async () => {
  try {
    const request = await fetch(
      "https://bomberosalerta.com.ar/cursoweb/servicioAgendaCrear"
    );
    const data = await request.json();
    console.log(data);
    let body = "";
    for (let i = 0; i < data.length; i++) {
      body += `<tr><td><button onclick='setear(this)'>Editar</button></td>
                  <td>${data[i].CONTACTO} </td>
                  <td>${data[i].TELEFONO} </td>
                  <td>${data[i].FECHA_MODIFICACION} </td>
                  <td><button onclick='borrarFila(this)'>Borrar</button></td>
                  </tr>
                  `;
    } //sin terminar
    document.getElementById("tbody").innerHTML = body;
  } catch (err) {
    console.log(err);
  }
  fetchAgendaListar();
};
*/

/*
const fetchAgendaListar = async () => {
  try {
    const response = await fetch(
      "https://bomberosalerta.com.ar/cursoweb/servicioAgendaListar"
    );
    const data = await response.json();
    console.log(data);
    let body = "";
    for (let i = 0; i < data.length; i++) {
      body += `<tr><td><button onclick='setear(this)'>Editar</button></td>
                  <td>${data[i].CONTACTO} </td>
                  <td>${data[i].TELEFONO} </td>
                  <td>${data[i].FECHA_MODIFICACION} </td>
                  <td><button onclick='borrarFila(this)'>Borrar</button></td>
                  </tr>
                  `;
    }
    document.getElementById("tbody").innerHTML = body;
  } catch (err) {
    console.log(err);
  }
};

*/

function borrarFila(boton) {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success",
      });
      var fila = boton.parentNode.parentNode;
      fila.parentNode.removeChild(fila);
    }
  });
}






getListado();


