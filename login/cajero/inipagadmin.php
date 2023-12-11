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
  <a href="../logininiciocaje.php">INICIO</a>
  <a href="ventadmin.php">VENTAS</a>
  <a target="_blank" href="verprod.php">CATÁLOGO</a>
</div>