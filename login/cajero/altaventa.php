<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cajero</title>
  <link rel="stylesheet" href="../../style.css?v=1">
</head>

<body>
  <?php
  include "inipagadmin.php";
  require "../conexion.php";
  $queryMarcas = "SELECT DISTINCT CONCAT (marca, ' - ', modelo, ' - ', descrip) AS marca_modelo_descrip, precio, stock FROM productos";
  $resultadoMarcas = mysqli_query($conectar, $queryMarcas);


  ?>
  <div class="divtitulo">
    <h2>Registrar venta</h2>
    <div class="lineanegra"></div>
  </div>
  <div class="formlogin">
    <form action="guardarventa.php" method="POST" onsubmit="return validarCantidad()">
      <fieldset>
        <img src="../../images/ventalogo.png" alt="loginlogo" width="60">
        <br><br>
        <label for="vendedor">Vendedor:</label>
        <br>
        <input type="text" id="vendedor" name="vendedor" readonly value="<?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?>">
        <br>
        <label for="producto">Producto:</label>
        <br>
        <select id="producto" name="producto" required>
          <?php while ($row = mysqli_fetch_assoc($resultadoMarcas)) : ?>
            <option value="<?= $row['precio'] ?>" data-stock="<?= $row['stock'] ?>"><?= $row['marca_modelo_descrip'] ?></option>
          <?php endwhile; ?>
        </select>
        <br>
        <label for="precio">Precio:</label>
        <br>
        <input type="number" step="0.01" id="precio" name="precio" required readonly>
        <br>
        <label for="cantidad">Cantidad:</label>
        <br>
        <input type="number" id="cantidad" name="cantidad" required oninput="calcularTotal()">
        <br>
        <label for="total">Total:</label>
        <br>
        <input type="number" step="0.01" id="total" name="total" required required readonly>
        <br>
        <label for="cliente">Datos de cliente:</label>
        <br>
        <input type="text" id="cliente" name="cliente" minlength="3" required placeholder="Nombre, Teléfono, Dirección (opcional)">
        <br>
        <label for="fecha">Fecha:</label>
        <br>
        <input type="date" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" required readonly>
        <br><br>
        <input class="formlogininput" type="submit" value="REGISTRAR" onclick="return confirm('¿Estás seguro de que desea continuar?')">
        <input style="margin-left: 50px;" class="formlogininput2" type="reset" value="BORRAR" onclick="return confirm('¿Estás seguro de que desea BORRAR?')">
      </fieldset>
    </form>
    <br><br>
    <div class="lineanegra"></div>
    <br>
    <div class="tablausu">
      <table>
        <tr>
          <th>ID</th>
          <th>Vendedor</th>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Cliente</th>
          <th>Fecha</th>
        </tr>

        <?php
        $todosUsuarios = "SELECT * FROM ventaprod ORDER BY venta_id ASC";
        $resultado = mysqli_query($conectar, $todosUsuarios);
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
          <tr>
            <td><?php echo $row["venta_id"]; ?></td>
            <td><?php echo $row["vendedor"]; ?></td>
            <td><?php echo $row["producto"]; ?></td>
            <td>$<?php echo $row["precio"]; ?></td>
            <td><?php echo $row["cantidad"]; ?></td>
            <td>$<?php echo $row["total"]; ?></td>
            <td><?php echo $row["cliente"]; ?></td>
            <td><?php echo $row["fecha"]; ?></td>
          </tr>
        <?php
        }
        mysqli_free_result($resultado)
        ?>
      </table>
    </div>
  </div>
  <script>
    document.getElementById('producto').addEventListener('change', function() {
      var precioSeleccionado = this.value;
      document.getElementById('precio').value = precioSeleccionado;
      calcularTotal();
    });

    function calcularTotal() {
      var precio = parseFloat(document.getElementById('precio').value);
      var cantidad = parseFloat(document.getElementById('cantidad').value);
      var total = precio * cantidad;

      if (!isNaN(total)) {
        document.getElementById('total').value = total.toFixed(2);
      } else {
        document.getElementById('total').value = "";
      }
    }

    function validarCantidad() {
      var stockDisponible = parseFloat(document.getElementById('producto').options[document.getElementById('producto').selectedIndex].getAttribute('data-stock'));
      var cantidad = parseFloat(document.getElementById('cantidad').value);

      if (isNaN(cantidad) || cantidad <= 0 || cantidad > stockDisponible) {
        alert('La cantidad seleccionada superá el stock disponible.');
        return false;
      }

      return true;
    }
  </script>
  <br>
  <?php
  include "../finpagadmin.php";
  ?>
</body>

</html>