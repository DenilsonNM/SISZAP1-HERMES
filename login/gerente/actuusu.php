<?php
require "../conexion.php";

$emp_id = $_GET['emp_id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$telcel = $_POST['telcel'];
$correo = $_POST['correo'];

$update = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', usuario='$usuario', clave='$clave', rol='$rol', telcel='$telcel', correo='$correo' WHERE emp_id = '$emp_id'";

$query = mysqli_query($conectar, $update);

if ($query) {
  include("verusu.php");
?>
  <div class="errorlogin">
    <h3>Empleado actualizado</h3>
  </div>
<?php
  exit;
} else {
  include("verusu.php");
?>
  <div class="errorlogin">
    <h3>Error al actualizar</h3>
  </div>
<?php
  exit;
}
?>