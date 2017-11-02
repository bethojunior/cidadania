<meta charset="uf-8" />
<link href="../css/loader.css" rel="stylesheet">
<script src="../js/functions.js"></script>


<?php 
	require_once ("conexao.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = mysqli_query($conexao , "SELECT * FROM usuarios where login = '$login' and senha = '$senha'") or die (mysqli_error());
	$row = mysqli_num_rows($sql);
    //print_r($row);

	if ($row > 0 ){
		//session_start();
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['senha'] = $_POST['senha'];
		echo '<div class="loader"></div>';
		echo '<script>loginSucess()</script>';
	}
		else {
			echo "<h1><center><strong>Login e/ou senha inválidas</strong></center></h1>";
			echo "<script>loginFailed()</script>";
		}


?>