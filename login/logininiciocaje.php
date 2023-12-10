<?php
require "proteccion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cajero</title>
  <link rel="stylesheet" href="../style.css?v=1">
</head>

<body>
  <div class="divtop"></div>
  <div class="divtop2">
    <div class="logonom">
      <br>
      <h3>Zapatería</h3>
      <h1>Hermes</h1>
    </div>
  </div>
  <div class="usermenu">
    <br><br>
    <a href="logininiciocaje.php">INICIO</a>
    <a href="cajero/ventadmin.php">VENTAS</a>
    <a href="cajero/verprod.php">CATÁLOGO</a>
  </div>
  <div class="divtitulo">
    <h2>Cajero</h2>
    <br>
    <img src="../images/logoadmin.png" width="50">
    <div class="lineanegra"></div>
  </div>
  <div class="cerrses"><a href="cerrarsesion.php" onclick="return confirm('¿Estás seguro de que deseas salir?')">CERRAR SESIÓN</a></div>
  <div class="lineanegra2"></div>
  <div class="lineafinal"></div>
</body>

</html>