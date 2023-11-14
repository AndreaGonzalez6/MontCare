<?php
include("php/conexion_be.php");
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="shortcut icon" href="imágenes/loguito.png" type="image/x-icon" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="wrapper">
      <form action="php/login_medico.php" method="post">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Correo" name="correo" required />
          <i class='bx bx-envelope' ></i>
        </div>
        <div class="input-box">
          <input
            type="password"
            placeholder="Contraseña"
            name="contrasena"
            required
          />
          <i class="bx bxs-lock-alt"></i>
        </div>
        <div class="remember-forgot">
          <label> <input type="checkbox" />Remember me</label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
    </div>
    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
