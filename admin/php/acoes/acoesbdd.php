<?php 
	
	require_once("../php/conexao.php");

//EXECUTAR A $QUERY

    $dados = mysqli_query($conexao,"SELECT * FROM acoes") or die (mysqli_error());


//CALCUDA QUANTOS DADOS RETORNARAM

    $total = mysqli_num_rows ($dados);



?>