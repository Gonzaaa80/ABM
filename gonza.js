





function resetearFormulario(idForm) {
  document.getElementById(idForm).reset();
}

function delAlert(idContacto) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
  });
  swalWithBootstrapButtons.fire({
    title: "Estas seguro?",
    text: "No se va a poder revertir!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Si, Borrar!",
    cancelButtonText: "No, Cancelar!",
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
   
        borrar(idContacto);
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire({
        title: "Cancelado",
        text: "Tu archivo esta seguro",
        icon: "error"
      });
    }
  });
}


function sucAlert() {
  guardar()
  if (guardar = true) {
    Swal.fire({
      title: "Guardado!",
      text: "Se guardo exitosamente!",
      icon: "success"
    });

  }


}



