<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hermes</title>
  <link rel="stylesheet" href="../style.css?v=1">
</head>

<body>
  <?php
  include "inipagadmin.php";
  ?>
  <div class="divtitulo">
    <h2>Ver productos</h2>
    <div class="lineanegra"></div>
  </div>

  <div class="tablausu">
    <table>
      <tr>
        <th>Id</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Estado</th>
        <th>Stock</th>
        <th></th>
        <th></th>
      </tr>

      <?php
      require "conexion.php";
      $todosUsuarios = "SELECT * FROM productos ORDER BY prod_id ASC";
      $resultado = mysqli_query($conectar, $todosUsuarios);
      while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
        <tr>
          <td><?php echo $row["prod_id"]; ?></td>
          <td><?php echo $row["marca"]; ?></td>
          <td><?php echo $row["modelo"]; ?></td>
          <td><?php echo $row["descrip"]; ?></td>
          <td>$ <?php echo $row["precio"]; ?></td>
          <?php
          echo "<td><img width='100' src='data:image/png;base64," . base64_encode($row['foto']) . "'></td>";
          ?>
          <td><?php echo $row["estado"]; ?></td>
          <td><?php echo $row["stock"]; ?></td>
          <td>
            <?php
            echo "<a href='modprod.php?prod_id=" . $row['prod_id'] . "'>Modificar</a>";
            ?>
          </td>
          <td><a href="#" onClick="validar('elimprod.php?prod_id=<?php echo $row["prod_id"]; ?>')">Eliminar</a></td>
        </tr>
      <?php
      }
      mysqli_free_result($resultado)
      ?>
    </table>
  </div>
  <br>
  <!-- <br><br>
  <div class="cerrses"><a href="../index.php" onclick="return confirm('¿Estás seguro de que deseas salir?')">CERRAR SESIÓN</a></div> -->

  <?php
  include "finpagadmin.php";
  ?>

  <script>
    function validar(url) {
      var eliminar = confirm("¿Realmente deseas ELEMINAR este PRODUCTO?");
      if (eliminar == true) {
        window.location = url;
      }
    }
  </script>

</body>

</html>