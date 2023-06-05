<!DOCTYPE html>
<html>

<head>
  <title>Procesar datos</title>
</head>

<body>
  <?php

  if (isset($_GET['nombre']) && isset($_GET['apellido'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];

    echo "<h2>Datos enviados por enlace:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br><br>";
  }

  
  if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo "<h2>Datos enviados por formulario:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
  }
  ?>
</body>

</html>