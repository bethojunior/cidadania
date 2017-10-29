<?php 

 require_once ("../php/conexao.php");

//CONECTAR BANCO DE DADOS 

    $conexao = mysqli_connect ($host , $user , $pass , $banco ) or die (mysqli_error());


//EXECUTAR A $QUERY

    $dados = mysqli_query($conexao,"SELECT * FROM imagem") or die (mysqli_error());


//CALCUDA QUANTOS DADOS RETORNARAM

    $total = mysqli_num_rows ($dados);



?>