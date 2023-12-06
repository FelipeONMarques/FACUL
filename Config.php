<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'banco_de_dados';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($conexao-> connect_errno)
    //{
    //   echo "ERRO";
    //}

    //else{
    //    echo "Conectado";
    //}

?>