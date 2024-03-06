function setear() {}

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

fetchAgendaListar();

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
