<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"
    integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
    integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="estilo.css" />



   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="gonza.js?1" defer></script>
    <script src="JavaScriptR.js?76" defer></script>
    <script src="JavaScriptL.js?34" defer></script>
   
    <title>ABM</title>
  </head>

  <body>
    <h1>Log In</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-12">
          <form>
            <label for="">Usuario</label>
            <br />
            <input class="form-control ema" type="text" id="nom" placeholder="Introduce su usuario" required />
            <br />
            <div class="cont-pass">
              <label for="">Password</label>
              <br />
              <input type="password" class="form-control" id="pass" placeholder="Introduce su contraseña" required />
              <i class="bx bxs-show"></i>
            </div>
          </form>
          <br />
            <div class="cont-sub">
            <button type="button" class="btn btn-primary" onclick="ServicioLogin()">Ingresar</button>
            <br />
            <button type="submit" class="btn btn-secondary">
              <a href="https://bomberosalerta.com.ar/gonza/ServicioLogin-Singup/Sing-up.php">Registrarse</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
