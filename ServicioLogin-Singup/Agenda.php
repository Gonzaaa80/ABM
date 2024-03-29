<?php
session_start();
if(empty($_SESSION['ID_USUARIO'])) {
  header("location:Log-in");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--JQUERY-->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!--BOOSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!--TOASTR-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" defer></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"
    integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
    integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--FONTAWE-->
  <script src="https://kit.fontawesome.com/5ec6417538.js" crossorigin="anonymous"></script>
  <!--SWEETALERT-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--FILES JS-->
  <script src="gonza.js"></script>
  <script src="JavaSript.js" defer></script>

  <title>ABM</title>
</head>

<body class="bg-secondary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-12 col-lg-12">
        <header>
          <h1>ABM</h1>
          <h2>Listado de contactos</h2>
        </header>
        <main>
          <div id="btnNC">
            <!--boton nuevo contacto-->
            <button type="button" onclick="crear()" class="btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#mi-modal">
              Nuevo Contacto
            </button>
            <button type="button" class="btn btn-danger"><a href="cerrarsesion.php">Cerrar sesion</a></button>
          </div>

          <table style="border: 1px solid" id="tabla" class="table table-primary table-striped">
            <tr>
              <th scope="col">Editar</th>
              <th scope="col">nombre</th>
              <th scope="col">Telefono</th>
              <th scope="col">F.modificacion</th>
              <th scope="col">Borrar</th>
            </tr>
            <tbody id="tbody" class="table-secondary"></tbody>
          </table>

          <div class="modal fade" id="mi-modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Creación/Edicón</h5>
                  <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <form id="formulario">
                    <input type="text" id="nom" placeholder="Introduce su nombre" required />
                    <!-- <input type="number" id="num" class="numc" placeholder="Introduce su Numero" min="1100000000" max="1199999999" required /> -->
                    <input type="text" id="num" class="numc" placeholder="Introduce su Numero" minlength="10"
                      maxlength="10" pattern="[0-9]*" required />
                    <p id="demonom"></p>
                    <p id="demonum"></p>
                  </form>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  <button class="btn btn-primary" id="btn-save" onclick="guardar()">Guardar</button>
                </div>
              </div>
            </div>
          </div>

        </main>
      </div>
    </div>
  </div>
</body>

</html>