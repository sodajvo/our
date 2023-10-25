<html>

<head>
  <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/new.css">
  </head>

<body class="bgImage">

  <!--nav-->
  <div class="container-fluid mb-5">
    <nav class="navbar navbar-expand-lg ">
      <a href="../../../vista/index.html"><img src="../../../vista/img/our-coffe.png"></a>
      <div class="collapse navbar-collapse d-flex justify-content-end">
        <ul class="navbar-nav text">
        </ul>
      </div>
    </nav>
  </div>

  <div class="signUp rounded mx-auto d-block" style="background-color: rgb(250, 250, 250, 0.8);">

    <h1>Resgistrate ahora!!</h1>
    <form action="insert copy.php" method="post">
      Ingrese nombre:
      <input type="text" name="username"><br>
      Ingrese Contraseña
      <input type="text" name="password"><br>
      Ingrese mail:
      <input type="text" name="email"><br>
      <br>
      <input class="btn btn-outline-danger ms-5" type="submit" value="Registrar">
      <a href="../login/index copy.html" class="btn btn-outline-secondary d-flex justify-content-center mt-3">Atras</a><br>
    </form>
  </div>

</body>

</html>