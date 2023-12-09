<html>

<head>
  <title>Hermes</title>
  <link rel="stylesheet" href="style.css?v=1">
</head>

</html>

<?php
include "inipag.php";
?>

<html>

<body>
  <div class="divtitulo">
    <h2>Correo Enviado</h2>
    <div class="lineanegra"></div>
    <h3>¡Gracias por confiar en nosotros! <br> Que tenga un lindo día.
    </h3>
</body>

</html>

<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$tele = $_POST['tele'];
$direc = $_POST['direc'];
$compr = $_POST['compr'];
$modelo = $_POST['modelo'];
$desprod = $_POST['desprod'];

$destino = "denilsonhero2015@gmail.com";
$cuerpo = '
        <h1>Encargo de lentes ÓPTICA</h1>
        <p>
        Contacto: ' . $nombre . ' Celular: ' . $tele . '
        <br>
        Dirección de casa: ' . $direc . '
        <br>
        ' . $compr . '
        </p>
        <br>
        <h1>Datos del producto:</h1>
        <p>
        Modelo: ' . $modelo . '
        <br>
        Descripción: ' . $desprod . '
        </p>
  ';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF8\r\n";

$headers .= "FROM: $nombre <$email>\r\n";
mail($destino, $cuerpo, $headers);
?>

<?php
include "finpag.php";
?>