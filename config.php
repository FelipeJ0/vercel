<?php

    $dbHost = 'Localhost';
    $bdUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$bdUsername,$dbPassword,$dbName);
/*
    if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexao efetuada com sucesso";
    }

*/
