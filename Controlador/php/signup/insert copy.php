<?php

try {
    $conexion = new mysqli("localhost", "jonatan", "jonatan", "php_login_database");

    if($conexion ->connect_errno){
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    }
    
    $_username = $_REQUEST['username'];
    $_password = $_REQUEST['password'];
    $_email = $_REQUEST['email'];
    
    $_sql = "insert into php_login_database.accounts_us(username,password,email) values ( ? , ? , ?)";

    $_stmt = $conexion ->prepare($_sql);
    $_stmt->bind_param("sss",$_username, $_password , $_email );
    
    $_resul = $_stmt ->execute();
    echo var_dump($_resul);
    
    $_stmt ->close();

    
    header('Location: confirm copy.html');
    
} catch (Exception $e) {
    echo var_dump($e);
}


?>