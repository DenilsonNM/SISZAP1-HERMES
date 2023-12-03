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
    <h2>Correo enviado</h2>
    <div class="lineanegra"></div>
    <h3>En el transcurso del día su correo será leído y atendido. ¡Gracias por compartirnos sus opiniones! <br> Que tenga un lindo día.
    </h3>
</body>

</html>

<?php
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];

// echo $correo ," ", $nombre," ",$desc;

$destino = "denilsonhero2015@gmail.com";
$cuerpo = '
  <html>
    <head>
      <title>correo de comentarios y dudas</title>
    </head>
      <body>
        <h1>Dudas y comentarios para www.ÓPTICA.com</h1>
        <p>
        Contacto: ' . $nombre . '
        <br>
        Comentarios o dudas: ' . $desc . '
        </p>
      </body>
  </html>
  ';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF8\r\n";

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destino, $cuerpo, $headers);
?>

<?php
include "finpag.php";
?>