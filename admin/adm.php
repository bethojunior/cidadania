
<!--
    DESENVOLVIDO POR FÁBRICA 704
    2017
    FORTALEZA - CE
    VERSÃO 1.0
-->


<?php
    session_start();
 ?>
<html>
	<head>
		<meta charset='utf-8' />
		<meta http-equiv="Cache-Control" content="no-store" />
        <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon" />
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>	
		<title>Painel de controle</title>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu" rel="stylesheet">
		<link href="css/style-2.css" rel="stylesheet" />
		<link href="frameWorks/Materialize/css/materialize.css" rel="stylesheet" />
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        
		<!-- SCRIPTS -->
		<script src="frameWorks/Materialize/js/jquery-3.2.1.js" type="text/javascript"></script>
		<script src="frameWorks/Materialize/js/materialize.js" type="text/javascript"></script>
		<script src="js/functions.js"></script>

	</head>

	<body>		
		<div class="col l12">

		<!--- MENU WEB -->

			<nav class="nav-1 menuWeb">
				<ul>
					<li>
						<a class="a1" href="noticias/alterar-noticias.php">Noticias</a> 
					</li>
					<li>
						<a class="a1" href="acoes/alterar-acoes.php">Ações</a>
					</li>
                	<li>
						<a class="a1" href="fotos/fotos.php">Fotos</a>
					</li>
					<li>
						<a href="fotos/fotoC.php">Fotos slide</a>
					</li>
					<li>
					    <a class="a1"  href="index.php">Sair</a>
					</li>
				</ul>
			</nav>

			<!--- MENU MOBILE -->
			<nav class="menuMobile">
				 <ul id="slide-out" class="side-nav">
				    <li>
				        <div class="user-view">
				    </div>
				    </li>
				    <li>
				    	<a href="#">Alterar informações</a>
				    </li>
				    <li>
				    	<div class="divider"></div>
				    </li>
				    <li>
				    	<a onclick="imagemNoticia()" class="" href="noticias/alterar-noticias.php">Noticias</a>
				    </li>
				    <li>
				    	<a class="" href="acoes/alterar-acoes.php">Ações</a>
				    </li>
				    <li>
				    	<a href="fotos/fotos.php">Fotos</a>
				    </li>	
				   	<li>
						<a href="fotos/fotoC.php">Fotos slide</a>
					</li>
				    <li>
				    	<a class="" href="index.php">Sair</a>
				    </li>
				  </ul>
				  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
				  				<div>
					<span class="span1">Painel de controle</span>
				</div>
			</nav>
			
		</div>
		<div>
		    <img class="logo" src= "imagens/logo.png" />
		</div>

	<script type="text/javascript">
        $(".button-collapse").sideNav();
    </script>
	</body>
</html>




