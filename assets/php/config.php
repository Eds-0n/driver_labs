<?php

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'driver_labs';

    $conexao = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conexao->connect_error) {

        die("Erro na conexão: " . $conexao->connect_error);

    }

?>