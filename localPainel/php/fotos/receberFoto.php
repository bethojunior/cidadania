<?php 

	require_once ("../conexao.php");

//CONECTAR BANCO DE DADOS 
	$id = $_POST['id'];

    $dados = mysqli_query($conexao, "SELECT * FROM imagem WHERE id='$id'") or die (mysqli_error());

    $noticia = mysqli_fetch_array($dados);

    echo json_encode($titulo);



?>