<?php

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}


$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'jonatan';
$DATABASE_PASS = 'jonatan';
$DATABASE_NAME = 'php_login_database';

// conexion a la base de datos

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

$stmt = $conexion->prepare('SELECT password, email FROM accounts WHERE id = ?');





$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bgImage">

    <div class="container mt-5" style="background-color: rgb(250, 250, 250, 0.8);">
        <div class="container d-flex flex-column text-center">
            
            <h2>Información del Usuario</h2>    
        
            <div class="d-flex justify-content-center mt-5 mb-5">
                <table>
                    <tr>
                        <td>id: </td>
                        <td> 
                            <?= $_SESSION['id'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Usuario: </td>
                        <td>
                            <?= $_SESSION['name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <?= $email ?>   
                        </td>
                    </tr>
                </table>
            </div>
            <div></div>
            
            <div class="container">

                <nav class="container d-flex flex-column text-center ">
                    <div>
                        <a href="inicio.php" class="btn btn-outline-secondary d-flex justify-content-center">Inicio</a><br>
                    </div>
                    <div>
                        <a href="user/update/menu.html" class="btn btn-outline-success d-flex justify-content-center">modificar</a><br>
                    </div>
                    <div>
                        <a href="user/delete/delete.php" class="btn btn-outline-danger d-flex justify-content-center">eliminar</a><br>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
</body>

</html>