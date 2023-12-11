<?php
require "proteccion.php";
if (!isset($_SESSION['nombre'])) {
  echo "La variable de sesión 'emp_id' no está establecida.";
} else {
?>
  <div class="usuariotop">
    <?php
    echo "Bienvenido " . $_SESSION['nombre'];
    ?>
  </div>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerente</title>
  <link rel="stylesheet" href="../style.css?v=1">
</head>

<body>
  <!-- <div class="divtop"></div> -->
  <div class="divtop2">
    <div class="logonom">
      <br>
      <h3>Zapatería</h3>
      <h1>Hermes</h1>
    </div>
  </div>
  <div class="usermenu">
    <br><br>
    <a href="logininicio.php">INICIO</a>
    <a href="gerente/prodadmin.php">PRODUCTOS</a>
    <a href="gerente/usuadmin.php">EMPLEADOS</a>
    <a href="gerente/ventadmin.php">VENTAS</a>
  </div>
  <div class="divtitulo">
    <h2>Gerente</h2>
    <br>
    <img src="../images/logoadmin.png" width="50">
    <div class="lineanegra"></div>
  </div>
  <div class="cerrses"><a href="cerrarsesion.php" onclick="return confirm('¿Estás seguro de que deseas salir?')">CERRAR SESIÓN</a></div>
  <div class="lineanegra2"></div>
  <div class="lineafinal"></div>
</body>

</html>