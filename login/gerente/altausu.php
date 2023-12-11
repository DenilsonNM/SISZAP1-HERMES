<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerente</title>
  <link rel="stylesheet" href="../../style.css?v=1">
</head>

<body>
  <?php
  include "inipagadmin.php";
  ?>
  <div class="divtitulo">
    <h2>Añadir empleados</h2>
    <div class="lineanegra"></div>
  </div>
  <div class="formlogin">
    <form action="guardarusu.php" method="POST" onsubmit="return validarContr() && validarInput()">
      <fieldset>
        <legend>Datos de perfil</legend>
        <img src="../../images/loginlogo.png" alt="loginlogo" width="60">
        <br>
        <label for="usuario">Usuario:</label>
        <br>
        <input type="text" id="usuario" name="usuario" minlength="3" required>
        <br>
        <label for="clave">Contraseña:</label>
        <br>
        <input type="text" id="clave" name="clave" minlength="3" required>
        <br>
        <label for="clave">Confirma tu contraseña:</label>
        <br>
        <input type="text" id="clave2" name="clave2" minlength="3" required>
        <br>
        <label for="rol">Rol:</label>
        <br>
        <select name="rol" id="rol" required>
          <option value="Gerente">Gerente</option>
          <option value="Cajero">Cajero</option>
          <option value="Almacenista">Almacenista</option>
        </select>
      </fieldset>
      <br>
      <fieldset>
        <legend>Datos de contacto</legend>
        <img src="../../images/logocontac.png" alt="loginlogo" width="60">
        <br>
        <label for="nombre">Nombre(s):</label>
        <br>
        <input type="text" id="nombre" name="nombre" minlength="3" required>
        <br>
        <label for="apellido">Apellido(s):</label>
        <br>
        <input type="text" id="apellido" name="apellido" minlength="3" required>
        <br>
        <label for="telcel">Teléfono:</label>
        <br>
        <input type="number" id="telcel" name="telcel" minlength="10" required>
        <br>
        <label for="correo">Correo:</label>
        <br>
        <input type="email" id="correo" name="correo" minlength="3" required>
      </fieldset>
      <br>
      <input class="formlogininput" type="submit" value="GUARDAR" onclick="return confirm('¿Estás seguro de que desea continuar')">
      <input style="margin-left: 50px;" class="formlogininput2" type="reset" value="BORRAR" onclick="return confirm('¿Estás seguro de que desea BORRAR?')">
    </form>
  </div>
  <br>
  <!-- <br><br>
  <div class=" cerrses"><a href="../index.php" onclick="return confirm('¿Estás seguro de que deseas salir?')">CERRAR SESIÓN</a>
  </div> -->

  <?php
  include "../finpagadmin.php";
  ?>
  <script>
    function validarInput() {
      var input = document.getElementById("telcel");
      var valor = input.value;

      if (valor.length < 10 || valor.length > 10) {
        alert("El número debe ser de 10 dígitos.");
        return false;
      }

      return true;
    }
  </script>
  <script>
    function validarContr() {
      var contr = document.getElementById("clave").value;
      var contr2 = document.getElementById("clave2").value;

      if (contr !== contr2) {
        alert("Las contraseñas son diferentes");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>