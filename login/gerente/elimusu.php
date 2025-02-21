<?php
require "../conexion.php";
require "proteccion.php";

$emp_id =  $_GET["emp_id"];

if ($emp_id == $_SESSION['emp_id']) {
  include("verusu.php");
?>
  <div class="errorlogin">
    <h3>No puedes eliminarte a ti mismo</h3>
  </div>
<?php
  exit;
}

$consulta = "DELETE FROM empleados WHERE emp_id = '$emp_id'";

$resultado = mysqli_query($conectar, $consulta);

if ($resultado) {
  include("verusu.php");
?>
  <div class="errorlogin">
    <h3>Usuario eliminado</h3>
  </div>
<?php
  exit;
} else {
  include("verusu.php");
?>
  <div class="errorlogin">
    <h3>Error al eliminar usuario</h3>
  </div>
<?php
  exit;
}
?>