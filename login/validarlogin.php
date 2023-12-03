<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

session_start();
$_SESSION['nombre']=$nombre;

$query = mysqli_query($conectar, "SELECT * FROM empleados WHERE usuario = '$nombre' AND clave = '$clave'");
// almacenar el numero de fila
$nr = mysqli_num_rows($query);

if($nr == 1){
  header("location:logininicio.php");
}
else if ($nr == 0){
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