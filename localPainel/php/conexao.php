<?php

    $host = 'localhost';
    $user =  '704cidadania';
    $pass = '@cdc53080b';
    $banco = 'cidadaniaeamor';

    $conexao = mysqli_connect($host , $user , $pass, $banco ) or die (mysqli_error());
    
?>