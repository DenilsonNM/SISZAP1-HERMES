<?php
require "conexion.php";
$emp_id =  $_GET["emp_id"];

$consulta = "DELETE FROM empleados WHERE emp_id = '$emp_id'";

$resultado = mysqli_query($conectar, $consulta);

if($resultado){
//   echo"
//   <script>
//   alert('Se elimino el usuario seleccionado');
//   location.href='verusu.php';
//   </script>
//   ";
// }
include("verusu.php");
?>
<div class="errorlogin">
  <h3>Usuario eliminado</h3>
</div>
<?php
exit;
}
else{
//   echo"
//   <script>
//   alert('Hubo un problema al intentar eliminar al usuario');
//   location.href='verusu.php';
//   </script>
//   ";
// }
include("verusu.php");
?>
<div class="errorlogin">
  <h3>Error al eliminar usuario</h3>
</div>
<?php
exit;
}
?>