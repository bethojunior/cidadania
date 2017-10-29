<html>
	<head>
		<meta charset="utf-8" />
		<script src="../../frameWorks/Materialize/js/jquery-3.2.1.js"></script>
		<script src="../../js/functions.js"></script>
		<link href="../../css/loader.css" rel="stylesheet" />
	</head>
</html>

<?php 
	session_start();
	require_once("../conexao.php");

	$id = $_POST['idModal'];
	$nomeModal = $_POST['nomeModal'];
	$noticiaModal = $_POST['noticiaModal'];
	  	
	$conexao = mysqli_connect($host , $user , $pass , $banco) or die (mysqli_error());
	$sql = mysqli_query ($conexao , "UPDATE noticias SET nome = '$nomeModal' , noticia = '$noticiaModal' WHERE  ID = '$id' " );

	if($sql == true){
		//echo "<h1><center><strong>Modificado com sucesso!</strong></center></h1>";
		echo "<script>SucessAlterarNoticia()</script>";
		echo "<div class='loader'></div>";
		//echo "<img src='../giff/loading.gif' style='margin: 35%'>";
	} else {
		echo "Desculpe, houve um erro";
		echo "<script>FailedAlterarNoticias()</script>";
	}

mysqli_close($conexao);

?>
