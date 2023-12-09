<?php
require "../conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$telcel = $_POST['telcel'];
$correo = $_POST['correo'];


$insert = "INSERT INTO empleados (nombre, apellido, usuario, clave, rol, telcel, correo) VALUES ('$nombre', '$apellido', '$usuario', '$clave', '$rol', '$telcel', '$correo')";
$query = mysqli_query($conectar, $insert);


if($query){
  include("altausu.php");
  ?>
  <div class="errorlogin">
    <h3>Usuario guardado</h3>
  </div>
 <?php
exit;
}else{
  include("altausu.php");
?>
<div class="errorlogin">
  <h3>Error al guardar usuario</h3>
</div>
<?php
exit;
}
?>
