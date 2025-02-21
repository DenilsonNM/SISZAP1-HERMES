<?php
require "../conexion.php";

// $rutaServidor = 'productos';

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$descrip = $_POST['descrip'];
$precio = $_POST['precio'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$estado = $_POST['estado'];
$stock = $_POST['stock'];

$insert = "INSERT INTO productos (marca, modelo, descrip, precio, foto, estado, stock) VALUES ('$marca', '$modelo', '$descrip', '$precio', '$foto', '$estado', '$stock')";
$query = mysqli_query($conectar, $insert);

if ($query) {
  include("altaprod.php");
?>
  <div class="errorlogin">
    <h3>Producto guardado</h3>
  </div>
<?php
  exit;
} else {
  include("altaprod.php");
?>
  <div class="errorlogin">
    <h3>Error al guardar producto</h3>
  </div>
<?php
  exit;
}
?>