<?php 

	require_once ("../php/conexao.php");
//CONECTAR BANCO DE DADOS 

    $conexao = mysqli_connect ($host , $user , $pass , $banco ) or die (mysqli_error());


    $dados = mysqli_query($conexao, "SELECT * FROM noticias") or die (mysqli_error());


    $total = mysqli_num_rows ($dados);



?>