<?php
require "../conexion.php";

// $rutaServidor = 'productos';

$prod_id = $_GET['prod_id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$descrip = $_POST['descrip'];
$precio = $_POST['precio'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$estado = $_POST['estado'];
$stock = $_POST['stock'];

$update = "UPDATE productos SET marca='$marca', modelo='$modelo', descrip='$descrip', precio='$precio', foto='$foto', estado='$estado', stock='$stock' WHERE prod_id = '$prod_id'";

$query = mysqli_query($conectar, $update);

if ($query) {
  include("verprod.php");
?>
  <div class="errorlogin">
    <h3>Producto actualizado</h3>
  </div>
<?php
  exit;
} else {
  include("verprod.php");
?>
  <div class="errorlogin">
    <h3>Error al actualizar</h3>
  </div>
<?php
  exit;
}
?>