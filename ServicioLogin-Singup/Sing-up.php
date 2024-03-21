

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="estilo.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="JavaScriptR.js?43" defer></script>
    <title>ABM</title>
  </head>
  <body>
    <h1>Sing Up</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-12">
          <form>
            <label for="">Usuario</label>
            <br />
            <input
              class="form-control"
              type="text"
              id="nom"
              placeholder="Introduce su usuario"
              required
            />
            <br />
            <label for="">Email</label>
            <br />
            <input type="email" class="form-control" id="ema" placeholder="Introduce su Email" required/>
            <br />
            <div class="cont-pass">
              <label for="">Password</label>
              <br />
              <input type="password" class="form-control" id="pass" placeholder="Introduce su contraseña" required />
              <i class="bx bxs-show"></i>
            </div>
            <br />
            <label for="">Telefono</label>
            <br />
            <input type="text"  id="tel" class="form-control" placeholder="Introduce su Numero" minlength="10" maxlength="10" pattern="[0-9]*"/>
            <br />

            </button>
          </form>
          <div class="cont-sub">
          <button type="button" class="btn btn-primary" onclick="servicioRegistrar()" >registrarse</button>
          <br />
          <button type="submit" class="btn btn-secondary">
            <a href="https://bomberosalerta.com.ar/gonza/ServicioLogin-Singup/Log-in.php">Iniciar sesion</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
