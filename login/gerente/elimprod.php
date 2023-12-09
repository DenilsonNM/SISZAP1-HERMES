<?php
require "../conexion.php";

$prod_id =  $_GET["prod_id"];

$consulta = "DELETE FROM productos WHERE prod_id = '$prod_id'";

$resultado = mysqli_query($conectar, $consulta);

if ($resultado) {
  include("verprod.php");
?>
  <div class="errorlogin">
    <h3>Producto eliminado</h3>
  </div>
<?php
  exit;
} else {
  include("verprod.php");
?>
  <div class="errorlogin">
    <h3>Error al eliminar producto</h3>
  </div>
<?php
  exit;
}
?>