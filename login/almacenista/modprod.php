<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almacenista</title>
  <link rel="stylesheet" href="../../style.css?v=1">
</head>

<body>
  <?php
  require "../conexion.php";
  include "inipagadmin.php";

  if (isset($_GET['prod_id'])) {

    $prod_id = $_GET['prod_id'];

    $query = "SELECT * FROM productos WHERE prod_id = $prod_id";
    $resultado = mysqli_query($conectar, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
      $producto = mysqli_fetch_assoc($resultado);

      $prod_id = $producto['prod_id'];
      $marca = $producto['marca'];
      $modelo = $producto['modelo'];
      $descrip = $producto['descrip'];
      $precio = $producto['precio'];
      $foto = $producto['foto'];
      $estado = $producto['estado'];
      $stock = $producto['stock'];
    } else {
      echo "Producto no encontrado";
      exit;
    }
  } else {
    echo "No se proporcionaron parámetros en la URL";
    exit;
  }
  ?>
  <div class="divtitulo">
    <h2>Modificar Productos</h2>
    <div class="lineanegra"></div>
  </div>
  <div class="formlogin">

    <form action="actuprod.php?prod_id= <?= $prod_id ?>" method="POST" enctype="multipart/form-data">
      <fieldset>
        <img src="../../images/zaplogo.png" alt="loginlogo" width="60">
        <br><br>
        <label for="marca">Marca:</label>
        <br>
        <input type="text" id="marca" name="marca" value="<?= $marca ?>" required>
        <br>
        <label for="modelo">Modelo:</label>
        <br>
        <input type="text" id="modelo" name="modelo" value="<?= $modelo ?>" required>
        <br>
        <label for="descrip">Descripcion:</label>
        <br>
        <input type="text" id="descrip" name="descrip" value="<?= $descrip ?>" required placeholder="Tipo/Color/Talla">
        <br>
        <label for="precio">Precio:</label>
        <br>
        <input type="number" step="0.01" min=0 id="precio" name="precio" value="<?= $precio ?>" required>
        <br><br>
        <label for="foto">Imagen (jpeg, png, jpg):</label>
        <br>
        <input type="file" id="foto" name="foto" accept=".png, .jpeg, .jpg" required>
        <br><br>
        <label for="estado">Estado:</label>
        <br>
        <select name="estado" id="estado" required>
          <option value="Disponible">Disponible</option>
          <option value="Agotado">Agotado</option>
        </select>
        <br><br>
        <label for="stock">Stock:</label>
        <br>
        <input type="number" id="stock" name="stock" min=0 value="<?= $stock ?>" required>
      </fieldset>
      <br>
      <input class="formlogininput" type="submit" value="ACTUALIZAR" onclick="return confirm('¿Estás seguro de que desea continuar?')">
      <input style="margin-left: 50px;" class="formlogininput2" type="reset" value="RESTABLECER" onclick="return confirm('¿Estás seguro de que desea RESTABLECER?')">
    </form>
  </div>
  <br>

  <?php
  include "../finpagadmin.php";
  ?>
</body>

</html>