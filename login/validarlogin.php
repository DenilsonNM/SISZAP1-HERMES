<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

session_start();
$_SESSION['nombre'] = $nombre;

$query = mysqli_query($conectar, "SELECT * FROM empleados WHERE usuario = '$nombre' AND clave = '$clave'");
// almacenar el numero de fila
$nr = mysqli_num_rows($query);

if ($nr == 1) {

  $row = mysqli_fetch_assoc($query);
  $row = $row['rol'];

  switch ($row) {

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
  <div class="errorlogin">
    <h3>Usuario ó contraseña incorrectos</h3>
  </div>
<?php
  exit;
}
mysqli_free_result($query);
mysqli_close($conectar)
?>