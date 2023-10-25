<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Eliminar registro de MySQL</title>
</head>
<body class="bgImage">

<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'php_login_database';

    // Conexión a la base de datos
    $conexion = new mysqli($hostname, $username, $password, $database);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    if (isset($_POST['eliminar'])) {
        $id = $_POST['id'];

        // Sentencia SQL para eliminar el registro
        $sql = "DELETE FROM accounts WHERE id = $id";

        if ($conexion->query($sql) === TRUE) {
            header('Location: ../../index.html');
            echo "Registro eliminado exitosamente.";
        } else {
            echo "Error al eliminar el registro: " . $conexion->error;
        }
    }

    // Cerrar la conexión
    $conexion->close();
?>
<div class="d-flex justify-content-center">
<h2>Eliminar registro</h2>
</div>
<div class="login rounded mx-auto d-block" style="background-color: rgb(250, 250, 250, 0.8);">
        <div class="container">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="id">escribe tu id para confirmar la eliminacion</label><br>
            <input type="text" name="id"><br><br>
            <input type="submit" name="eliminar" value="Eliminar registro">
          </form>
          <a href="../../perfil.php" class="btn btn-outline-secondary d-flex justify-content-center mt-3">Atras</a><br>
        </div>
    </div>

</body>
</html>