<?php 

	require_once("conexao.php");

//EXECUTAR A $QUERY

    $dados = mysqli_query($conexao, "SELECT nome , noticia FROM noticias order by id desc limit 6") or die (mysqli_error());

//TRANSFORMAR DADOS EM UM ARRAY
    
 //   $modificacoes = mysqli_fetch_array($dados);

//CALCUDA QUANTOS DADOS RETORNARAM

    $total = mysqli_num_rows ($dados);


    while ($noticias = mysqli_fetch_array($dados) ){
    
	echo "<h3 class='tituloNoticia'>".$noticias['nome']."</h3>";
    echo "<h4 class='textoNoticia'>".$noticias['noticia']."</h4><hr>";
       
    }

?>