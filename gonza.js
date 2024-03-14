toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

/*
// Display a warning toast, with no title
toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')

// Display a success toast, with a title
toastr.success('Have fun storming the castle!', 'Miracle Max Says')

// Display an error toast, with a title
toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')
*/

function toastSuccess(titulo,mensaje=''){
  toastr.success(titulo,mensaje)
}

function toastError(titulo,mensaje=''){
  toastr.error(titulo,mensaje)
}
function toastAlert(titulo, mensaje = '') {
  toastr.warning(titulo,mensaje)
 }


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
 
 
    Swal.fire({
      title: "Guardado!",
      text: "Se guardo exitosamente!",
      icon: "success"
    });

  


}



