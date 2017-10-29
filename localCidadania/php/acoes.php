<?php 

	require_once("conexao.php");

//EXECUTAR A $QUERY

    $dados = mysqli_query($conexao,"SELECT nome , acoes FROM acoes order by id desc limit 6") or die (mysqli_error());

//TRANSFORMAR DADOS EM UM ARRAY
    
 //   $modificacoes = mysqli_fetch_array($dados);

//CALCUDA QUANTOS DADOS RETORNARAM

    $total = mysqli_num_rows ($dados);


    while ($acoes = mysqli_fetch_array($dados) ){
    
	echo "<h3 class='nomeAcoes'>".$acoes['nome']."</h3><hr>";
    echo "<h4 class='textoAcoes'>".$acoes ['acoes']."</h4><br>";
       
    }

?>