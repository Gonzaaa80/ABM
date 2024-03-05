function setear() {
  const nombre = document.getElementById("nom").value;
  const numero = document.getElementById("num").value;

  let fechaActual = new Date();

  var filaHTML = "<tr>";
  filaHTML += "<td><button onclick='setear(this)'>Editar</button></td>";
  filaHTML += "<td>" + nombre + "</td>";
  filaHTML += "<td>" + numero + "</td>";
  filaHTML += "<td>" + fechaActual + "</td>";
  filaHTML += "<td><button onclick='borrarFila(this)'>Borrar</button></td>";
  filaHTML += "</tr>";

  var tbody = document.getElementById("tbody");
  tbody.innerHTML += filaHTML;
}
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
