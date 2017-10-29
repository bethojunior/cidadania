<?php
    session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon" />
		<meta http-equiv="Cache-Control" content="no-store" />
		
		<title>Login</title>
		
		<link href="frameWorks/Materialize/css/materialize.css" rel="stylesheet" />
		<link href="css/style-1.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>

	<body>
		<div class="row">
			<div class="col l4"><p></p></div>

			<div class="col l4 s12">
				<form class="form-1" method="post" action="php/autenticando.php">
					<input required class="inputUsuario" placeholder="Usuário" name="login">
					<input required class="inputSenha" placeholder="Senha" type="password" name="senha">
					<div class="divInput">
						<input class="inputButton" type="submit" value="Logar">
					</div>
				</form>
			</div>
			<!-- MODAL PRE LOAD -->
			<div id="modal1" class="modal bottom-sheet">
				
   	    	</div>
          

			<div class="col l4"><p></p></div>
		</div>	
	</body>
</html>