<html>
    <head>
        <meta charset="uf-8" />
        <link href="../../css/loader.css" rel="stylesheet" >
        <script src="../../js/functions.js"></script>
    </head>
</html>    
  


<?php

	require_once("../conexao.php");

	$nome = "";
	$noticia = "";


	// CONEXÃO COM O BANCO DE DADOS

	$conexao = mysqli_connect($host, $user, $pass, $banco) or die (mysqli_error());

	//NOTICIA 

	if (isset($_POST['nome']) || isset($_POST['noticia'])){
		$nome = $_POST['nome'];
		$noticia = $_POST['noticia'];
	}


	if ($nome == "" || $noticia == ""){

		echo "<strong><h1><center>Você precisa preencher todos os campos. Por favor tentar novamente.</center></h1></strong>";
		echo "<script>FailedNoticias()</script>";
	} else {
		$sql = "INSERT INTO noticias (nome , noticia) VALUES ('$nome' , '$noticia')";

		$exc = mysqli_query ($conexao , $sql) or die (mysqli_error());
        
        echo "<div class='loader'></div>";
        //echo "<img src='../giff/loading.gif' style='margin: 35%'>";
		//echo "<strong><h1><center>Postada com sucesso! Por favor aguarde uns segundos.</center></h1></strong>";
		echo "<script>SucessNoticias()</script>";
	}
?>