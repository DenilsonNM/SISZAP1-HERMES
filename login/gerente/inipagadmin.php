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
<div class="divtop2">
  <div class="logonom">
    <br>
    <h3>Zapatería</h3>
    <h1>Hermes</h1>
  </div>
</div>
<div class="usermenu">
  <br><br>
  <a href="../logininicio.php">INICIO</a>
  <a href="prodadmin.php">PRODUCTOS</a>
  <a href="usuadmin.php">EMPLEADOS</a>
  <a href="ventadmin.php">VENTAS</a>
</div>