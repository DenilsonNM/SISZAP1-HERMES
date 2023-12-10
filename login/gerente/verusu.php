<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerente</title>
  <link rel="stylesheet" href="../../style.css?v=1">
</head>

<body>
  <?php
  include "inipagadmin.php";
  ?>
  <div class="divtitulo">
    <h2>Ver empleados</h2>
    <div class="lineanegra"></div>
  </div>

  <div class="tablausu">
    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Rol</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th></th>
        <th></th>
      </tr>

      <?php
      require "../conexion.php";
      $todosUsuarios = "SELECT * FROM empleados WHERE rol != 'admin' ORDER BY emp_id ASC";
      $resultado = mysqli_query($conectar, $todosUsuarios);
      while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
        <tr>
          <td><?php echo $row["emp_id"]; ?></td>
          <td><?php echo $row["nombre"]; ?></td>
          <td><?php echo $row["apellido"]; ?></td>
          <td><?php echo $row["usuario"]; ?></td>
          <td><?php echo $row["clave"]; ?></td>
          <td><?php echo $row["rol"]; ?></td>
          <td><?php echo $row["telcel"]; ?></td>
          <td><?php echo $row["correo"]; ?></td>
          <td>
            <?php
            echo "<a onclick=\"return confirm('¿Realmente deseas MODIFICAR el EMPLEADO?')\" href='modusu.php?emp_id=" . $row['emp_id'] . "'>Modificar</a>";
            ?>
          </td>
          <td><a href="#" onClick="validar('elimusu.php?emp_id=<?php echo $row["emp_id"]; ?>')">Eliminar</a></td>
        </tr>
      <?php
      }
      mysqli_free_result($resultado)
      ?>
    </table>
  </div>
  <br>

  <?php
  include "../finpagadmin.php";
  ?>

  <script>
    function validar(url) {
      var eliminar = confirm("¿Realmente deseas ELEMINAR este USUARIO?");
      if (eliminar == true) {
        window.location = url;
      }
    }
  </script>

</body>

</html>