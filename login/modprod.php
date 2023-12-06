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
    <h2>Modificar Productos</h2>
    <div class="lineanegra"></div>
  </div>
  <div class="formlogin">
    <form action="" method="POST" enctype="multipart/form-data">
      <fieldset>
        <img src="../images/lenteslogo.png" alt="loginlogo" width="60">
        <br>
        <label for="marca">Marca:</label>
        <br>
        <input type="text" id="marca" name="marca" minlength="3" required>
        <br>
        <label for="modelo">Modelo:</label>
        <br>
        <input type="text" id="modelo" name="modelo" minlength="3" required>
        <br>
        <label for="descrip">Descripcion:</label>
        <br>
        <input type="text" id="descrip" name="descrip" minlength="3" placeholder="Tipo/Color/Talla" required>
        <br>
        <label for="precio">Precio:</label>
        <br>
        <input type="number" id="precio" name="precio" required>
        <br><br>
        <label for="foto">Imagen (jpeg, png, jpg):</label>
        <br>
        <input type="file" id="foto" name="foto" accept=".png, .jpeg, .jpg" required>
        <br><br>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado" required>
          <option value="disponible">Disponible</option>
          <option value="agotado">Agotado</option>
        </select>
        <br><br>
        <label for="stock">Stock:</label>
        <br>
        <input type="number" id="stock" name="stock" required>
        <br><br>
        <input class="formlogininput" type="submit" value="ACTUALIZAR" name="actualizar" >
      </fieldset>
    </form>
  </div>
  <br>

  <?php
  include "finpagadmin.php";
  ?>
</body>

</html>