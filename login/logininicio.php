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
  <?php
  include "inipagadmin.php";
  ?>
  <div class="divtitulo">
    <h2>Administrador</h2>
    <br>
    <img src="../images/logoadmin.png" width="50">
    <div class="lineanegra"></div>
  </div>
  <div class="cerrses"><a href="cerrarsesion.php" onclick="return confirm('¿Estás seguro de que deseas salir?')">CERRAR SESIÓN</a></div>
  <?php
  include "finpagadmin.php";
  ?>
</body>

</html>