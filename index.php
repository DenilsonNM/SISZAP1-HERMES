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
    <img src="images/ofetafondo.png" alt="" width="1000" height="300">
  </div>

  <div class="tablaten">
    <div class="acercade">
      <h2>Acerca de:</h2>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus delectus ipsa, qui ratione autem est ducimus porro repellendus! Rerum obcaecati aliquam ducimus. Quidem excepturi commodi consequatur sapiente quibusdam porro asperiores?
        <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores officiis nihil aliquid distinctio dolore eum id, architecto aspernatur laudantium reprehenderit delectus similique deleniti earum quaerat neque voluptatibus maiores tenetur.
      </p>
    </div>
    <div class="tablalentes">
      <h2>Nuevo 2023:</h2>
      <br>
      <table>
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
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
          <tr>
            <td><?php echo $row["marca"]; ?></td>
            <td><?php echo $row["modelo"]; ?></td>
            <td><?php echo $row["descrip"]; ?></td>
            <td>$ <?php echo $row["precio"]; ?></td>
            <?php
            echo "<td><img width='100' src='data:image/png;base64," . base64_encode($row['foto']) . "'></td>";
            ?>
          </tr>
        <?php
        }
        mysqli_free_result($resultado)
        ?>
      </table>
      <a href="catalogo.php">Saber más</a>
    </div>
  </div>

  <div class="video">
    <iframe class="" width="860" height="415" src="https://www.youtube.com/embed/FMmIvmbZ-6c?si=_7BIWBceVhFj-8o6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    <br><br>
    <h2>Entérate de lo ultimo en moda.</h2>
  </div>

  <?php
  include "finpag.php";
  ?>
</body>

</html>