<?php 

require("../conexao.php");

//CONECTAR BANCO DE DADOS 
	$id = $_POST['id'];
    $conexao = mysqli_connect ($host , $user , $pass , $banco ) or die (mysqli_error());


    $dados = mysqli_query($conexao, "SELECT * FROM acoes WHERE id='$id'") or die (mysqli_error());

    $acoes = mysqli_fetch_array($dados);

    echo json_encode($acoes);



?>