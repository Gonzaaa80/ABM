<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css" />



   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="JavaScriptR.js" defer></script>
    <script src="JavaScriptL.js" defer></script>
   
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
            <input class="form-control" type="text" id="nom" placeholder="Introduce su usuario" required />
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
            <button type="submit" class="btn btn-primary" onclick="ServicioLogin()">Ingresar</button>
            <br />
            <button type="submit" class="btn btn-secondary">
              <a href="https://bomberosalerta.com.ar/gonza/ServicioLogin-Singup/Sing-up.html">Registrarse</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
