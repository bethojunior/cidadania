<?php

    $host = 'cidadaniaeamor.mysql.uhserver.com';
    $user =  '704cidadania';
    $pass = '@cdc53080b';
    $banco = 'cidadaniaeamor';

    $conexao = mysqli_connect($host , $user , $pass, $banco ) or die (mysqli_error());
    
?>