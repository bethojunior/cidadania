<?php

    //$host = '179.185.44.137';
    //$user =  'root';
    //$pass = 'fi2108';
    //$banco = 'painel';

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$banco = 'painel';
    $conexao = mysqli_connect($host , $user , $pass, $banco ) or die (mysqli_error());

?>