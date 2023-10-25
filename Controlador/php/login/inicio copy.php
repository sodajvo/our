<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

  header('Location: index copy.html');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <title>inicio de sesión</title>
</head>

<body class="bgImage">

  <header class="header">
    <nav class="navbar navbar-expand-lg ">
      <a href="index.html"><img src="../../../Vista/img/our-coffe.png"></a>
      <div class="collapse navbar-collapse d-flex justify-content-end">
        <ul class="navbar-nav text">
          <li>
    </nav>

    <div class="container" style="background-color: rgb(250, 250, 250, 0.8);">
      <div class="container d-flex flex-column text-center">
        <div class="p-2">
          <h2>Página de Inicio</h2>
        </div>
        <div class="p-2">
          <p>Hola de nuevo,
            <?= $_SESSION['name'] ?> !!!
          </p>
        </div>

      </div>

      <div class="container">

        <nav class="container d-flex flex-column text-center ">
          <div>
            <a href="perfil copy.php" class="btn btn-outline-secondary m-3">Información de Usuario</a>
          </div>

          <div>
            <a href="logout copy.php" class="btn btn-outline-secondary mb-3">Cerrar Sesión</a>
          </div>
        </nav>
      </div>
    </div>


</body>

</html>