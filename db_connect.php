<?php

//Conexão como banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "semma";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Falha no engano: " .mysqli_connect_error();
endif;
?>