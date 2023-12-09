<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contáctanos</title>
  <link rel="stylesheet" href="style.css?v=1">
</head>

<body>
  <?php
  include "inipag.php";
  ?>
  <div class="divtitulo">
    <h2>Queremos saber tu opinión</h2>
    <div class="lineanegra"></div>
  </div>

  <div class="formcorreo2">
    <form action="enviarencargo.php" method="post" onsubmit="return validarInput()">
      <fieldset>
        <img src="images/loginlogo.png" alt="loginlogo" width="60">
        <br>
        Nombre:
        <br>
        <input type="text" name="nombre" id="nombre" minlength="10" required>
        <br>
        E-mail:
        <br>
        <input type="email" name="email" id="email" required>
        <br>
        Teléfono cel:
        <br>
        <input type="number" name="tele" id="tele" min="0" max="9999999999" required>
        <br>
        Descripción:
        <br>
        <textarea name="direc" id="direc" cols="30" rows="10" maxlength="500" required></textarea>
        <br>
        Acepto los terminos y condiciones:
        <br>
        <input type="checkbox" id="checkbox1" required onclick="validarCheckbox()"> <label for="checkbox1">Si</label>
        <input type="checkbox" id="checkbox2" onclick="validarCheckbox()"> <label for="checkbox2">No</label>
        <br><br>
        <button type="submit">ENVIAR</button>
      </fieldset>
    </form>
  </div>

  <?php
  include "finpag.php";
  ?>

  <script>
    function validarInput() {
      var input = document.getElementById("tele");
      var valor = input.value;

      if (valor.length < 10 || valor.length > 10) {
        alert("El número debe ser de 10 dígitos.");
        return false;
      }

      return true;
    }
    function validarCheckbox() {
      var checkbox1 = document.getElementById("checkbox1");
      var checkbox2 = document.getElementById("checkbox2");

      if ((checkbox1.checked && checkbox2.checked) || (!checkbox1.checked && !checkbox2.checked)) {
        alert("Selecciona solo una opción");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>