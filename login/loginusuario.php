<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hermes</title>
  <link rel="stylesheet" href="../style.css?v=1">
</head>

<body>
  <div class="divtop"></div>
  <div class="divtop2">
    <div class="logonom2">
      <h1>Administración</h1>
    </div>
  </div>

  <div class="lineanegra"></div>
  <div class="formlogin">
    <form action="validarlogin.php" method="POST">
      <fieldset>
        <img src="../images/loginlogo.png" alt="loginlogo" width="60">
        <br><br>
        <label for="">Usuario:</label>
        <br>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="">Contraseña:</label>
        <br>
        <input type="text" id="clave" name="clave" required>
        <br><br>
        <input class="formlogininput" type="submit" value="INICIAR SESIÓN">
      </fieldset>
    </form>
  </div>
  <br>
  <div class="cerrses2"><a href="../index.php" onclick="return confirm('¿Estás seguro de que deseas salir?')">SALIR</a></div>
  <div class="lineanegra"></div>
</body>

</html>