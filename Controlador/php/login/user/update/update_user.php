<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_login_database";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $id = $_POST['id'];
    $nuevoValor = $_POST['nuevo_valor'];

    // Consulta para actualizar el registro
    $sql = "UPDATE accounts SET username='$nuevoValor' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil Usuario</title>
  <link rel="stylesheet" type="text/css" href="../../css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bgImage">

<h2>Modificar Registro</h2>
 
    <div class="login rounded mx-auto d-block" style="background-color: rgb(250, 250, 250, 0.8);">
        <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
             escribe tu id<br>
            <input type="text" name="id">
             <br>
             Nuevo nombre de usuario<br>
            <input type="text" name="nuevo_valor">
             <br><br>
             <input type="submit" value="Modificar">
            </form>
        <a href="../../perfil.php" class="btn btn-outline-secondary d-flex justify-content-center mt-3">Atras</a><br>
        </div>
    </div>

</body>
</html>
