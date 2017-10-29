<?php

    $host = 'localhost';
    $user =  'root';
    $pass = '';
    $banco = 'painel';

    $conexao = mysqli_connect($host , $user , $pass, $banco ) or die (mysqli_error());
    
?>