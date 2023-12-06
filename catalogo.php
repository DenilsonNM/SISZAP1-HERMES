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
    <h2>Catálogo de productos</h2>
    <div class="lineanegra"></div>
  </div>
  <div class="tablausu">
    <table>
      <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Estado</th>
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
          <td class="estado"><?php echo $row["estado"]; ?></td>
        </tr>
      <?php
      }
      mysqli_free_result($resultado)
      ?>
    </table>
  </div>

  <?php
  include "finpag.php";
  ?>
</body>

</html>