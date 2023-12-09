<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hermes</title>
  <link rel="stylesheet" href="style.css?v=1">
</head>

<body>
  <?php
  include "inipag.php";
  ?>
  <div class="divtitulo">
    <h2>Bienvenido</h2>
    <div class="lineanegra"></div>
  </div>

  <div class="ofertalogo">
    <div class="ofertaimg">
      <!-- <img src="images/ofetafondo.png" alt="" width="1000" height="300"> -->
    </div>

  </div>

  <div class="tablaten">
    <div class="acercade">
      <h2>Acerca de</h2>
      <div class="acercade2">
        <p>Bienvenido a la página web de <span>Zapatería Hermes</span>, la tienda online de calzado de calidad y diseño.
          <br><br>
          <li>Aquí encontrarás una amplia selección de zapatos, botas,sandalias y zapatillas.</li>
          <li>Accesorios para hombre, mujer y niño.
          </li>
          <li>Todos nuestros productos están fabricados con materiales de primera <span>calidad</span> y siguen las últimas tendencias de la <span>moda</span>.
          </li>
          <li>Además, ofrecemos envío gratuito, devolución fácil y atención al cliente personalizada.
          </li>
          <br>
          Nuestra misión es satisfacer las necesidades y expectativas de nuestros clientes, brindándoles una experiencia de compra cómoda, segura y agradable. Te invitamos a explorar nuestro <a href="catalogo.php">catálogo</a> y a <a href="encargo.php">contactarnos</a> si tienes alguna duda o sugerencia. Gracias por elegir Zapatería, tu tienda online de confianza.
        </p>
      </div>
    </div>
    <div class="tablalentes">
      <h2>Nuevo 2023</h2>
      <br>
      <table class="tendencias">
        <tr>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th></th>
        </tr>

        <?php
        require "login/conexion.php";
        $todosUsuarios = "SELECT * FROM productos ORDER BY prod_id ASC";
        $resultado = mysqli_query($conectar, $todosUsuarios);
        $limite = 0;
        for ($filasMostradas = 0; $row = mysqli_fetch_assoc($resultado) and $filasMostradas < 3; $filasMostradas++) {
        ?>
          <tr>
            <td><?php echo $row["marca"]; ?></td>
            <td><?php echo $row["modelo"]; ?></td>
            <td><?php echo $row["descrip"]; ?></td>
            <td>$<?php echo $row["precio"]; ?></td>
            <?php
            echo "<td><img width='100' src='data:image/png;base64," . base64_encode($row['foto']) . "'></td>";
            ?>
          </tr>
        <?php
        }
        mysqli_free_result($resultado)
        ?>
      </table>
      <a href="catalogo.php">SABER MÁS</a>
    </div>
  </div>
  <div class="video">
    <iframe class="" width="100%" height="400" src="https://www.youtube.com/embed/FMmIvmbZ-6c?autoplay=1&mute=1&loop=1&controls=0&si=_7BIWBceVhFj-8o6" title="YouTube video player" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; loop"></iframe>
    <br><br>
    <h2>Entérate de lo ultimo en moda</h2>
  </div>

  <?php
  include "finpag.php";
  ?>
</body>

</html>