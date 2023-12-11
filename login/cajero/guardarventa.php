<?php
require "../conexion.php";

$vendedor = $_POST['vendedor'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];
$cliente = $_POST['cliente'];
$fecha = $_POST['fecha'];

$insert = "INSERT INTO ventaprod (vendedor, producto, precio, cantidad, total, cliente, fecha) VALUES ('$vendedor', '$producto', '$precio', '$cantidad', '$total', '$cliente', '$fecha')";
$query = mysqli_query($conectar, $insert);

if ($query) {
  include("altaventa.php");
?>
  <div class="errorlogin">
    <h3>Venta registrada</h3>
  </div>
<?php
  exit;
} else {
  include("altaventa.php");
?>
  <div class="errorlogin">
    <h3>Error al registrar venta</h3>
  </div>
<?php
  exit;
}
?>