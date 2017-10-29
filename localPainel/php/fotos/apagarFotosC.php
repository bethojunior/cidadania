<html>
	<head>
		<meta charset="utf-8" />
		<script src="../../js/functions.js"></script>
		<link href="../../css/loader.css" rel="stylesheet">
	</head>
</html>

<?php 
	session_start();

	require_once("../conexao.php");
		$id = $_GET['id'];
	    //CONECTAR AO BANDO DE DADOS
		$conexao = mysqli_connect($host , $user , $pass , $banco) or die (mysql_error());

		$sql = mysqli_query ($conexao , "DELETE FROM imagemc WHERE ID = '$id' " );
		if ($sql == true){
			echo "<div class='loader'></div>";
			echo '<script>SucessFotosC()</script>';
			//echo "ok";
		} else {
			echo "<h1><center><strong>Desculpe, tente novamente...</strong></center></h1>";
			echo "<script>FailedFotosC()</script>";
		}

?>