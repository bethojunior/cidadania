<?php

    //$host = '179.185.44.137';
    //$user =  'root';
    //$pass = 'fi2108';
    //$banco = 'painel';

    $host = 'cidadaniaeamor.mysql.uhserver.com';
    $user =  '704cidadania';
    $pass = '@cdc53080b';
    $banco = 'cidadaniaeamor';

    $conexao = mysqli_connect($host , $user , $pass, $banco ) or die (mysqli_error());
    

?>