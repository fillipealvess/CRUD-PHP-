<?php
    $server = 'localhost';
    $user = 'root';
    $password = "";
    $dbname = 'sistema';

    $mysqli = new mysqli($server,$user,$password,$dbname);

    if ($mysqli->error) {
        die("Falha ao conectar o banco de dados: " . $mysqli->error);
    }
    
?>