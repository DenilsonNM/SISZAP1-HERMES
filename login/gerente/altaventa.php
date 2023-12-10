<?php
date_default_timezone_set('America/Mexico_City');
require "../conexion.php";
?>
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
    <h2>Registrar venta</h2>
    <div class="lineanegra"></div>
  </div>
  <div class="formlogin">
    <form action="guardarventa.php" method="POST">
      <fieldset>
        <img src="../../images/ventalogo.png" alt="loginlogo" width="60">
        <br><br>
        <label for="producto">Producto:</label>
        <br>
        <select name="producto" id="producto" required>
          <option value="Disponible">zapato1</option>
          <option value="Disponible">zapato2</option>
        </select>
        <br>
        <label for="descrip">Descripcion:</label>
        <br>
        <input type="text" id="descrip" name="descrip" minlength="3" required>
        <br>
        <label for="monto">Monto:</label>
        <br>
        <input type="number" id="monto" name="monto" required>
        <br>
        <label for="fecha">Fecha:</label>
        <br>
        <input type="date" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly>
        <br><br>
        <input class="formlogininput" type="submit" value="GUARDAR" onclick="return confirm('¿Estás seguro de que desea continuar?')">
      </fieldset>
    </form>
  </div>
  <br>

  <?php
  include "../finpagadmin.php";
  ?>
</body>

</html>