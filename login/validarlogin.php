<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

session_start();

$query = mysqli_query($conectar, "SELECT * FROM empleados WHERE usuario = '$nombre' AND clave = '$clave'");

$nr = mysqli_num_rows($query);

if ($nr == 1) {
  // Obtener los datos del usuario
  $row = mysqli_fetch_assoc($query);

  // Almacenar el nombre y emp_id en la sesión
  $_SESSION['nombre'] = $row['nombre'];
  $_SESSION['emp_id'] = $row['emp_id'];
  $_SESSION['apellido'] = $row['apellido'];

  // Redirigir según el rol del usuario
  switch ($row['rol']) {

    case 'admin':
      header("location: logininicio.php");
      break;

    case 'Gerente':
      header("location: logininicio.php");
      break;

    case 'Cajero':
      header("location: logininiciocaje.php");
      break;

    case 'Almacenista':
      header("location: logininicioalma.php");
      break;
  }
} else {
  include("loginusuario.php");
?>
  <div class="errorlogin2">
    <h3>Usuario ó contraseña incorrecta</h3>
  </div>
<?php
  exit;
}
mysqli_free_result($query);
mysqli_close($conectar);
?>