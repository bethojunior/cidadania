<?php 
	session_start();
?>
<html>
    <head>
		<meta charset='utf-8' />
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>	
		<title>Alterar Noticias</title>
		<link rel="shortcut icon" href="../imagens/logo.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu" rel="stylesheet">
		<link href="../css/style-4.css" rel="stylesheet" />
		<link href="../frameWorks/Materialize/css/materialize.css" rel="stylesheet" />
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        
    </head>
    
    <body onload="imagemNoticia()">

		<nav class="nav1 nav-extended">
		    <div class="nav-wrapper">
				<!--a class="" href="../adm.php"><i class="material-icons">tiny arrow_back</i></a-->
		      	<a href="#" class="brand-logo tituloCentro">Noticia</a>
		    </div>
		   		<div class="nav-content">
		    	<ul class="tabs tabs-transparent tabMargin">
		            <li class="tab"><a class="active" href="#test1">Noticia </a></li>
		            <!--<li class="tab"><a href="#test2">Fotos</a></li>-->
		            <li class="tab"><a href="#test3">Opções</a></li>
		            <li class="tab">
		            	<a onclick="sair()">Voltar
		            		<!--i class="material-icons">arrow_back</i-->
		            	</a>
		            </li>
		        </ul>
		    </div>
		</nav>
		<div class="row"  id="test1">
			<form method="POST" action="../php/noticias/enviando-noticias.php">
				<div class="col s12"><br>
					<!--CONTAGEM DE CARACTERES -->

					<span class="span1">Insira aqui o titulo </span><br>
					<span class="contagemTitulo" id="numerosTitulo">20</span>
					<span>/20</span>
					<input class="titulo" required type="text" id="nome" maxlength="20" name="nome"><br>

					<!-- contagem -->
					<span id="caracteres" class="span1">Digite a noiticia</span><br>
					<span class="contagemNoticia" id="numeros">250</span>
					<span>/250</span><br>
					<textarea required class="textarea1" id="noticia" maxlength="250" name="noticia"></textarea><br>
					<input class="inputSubmit" type="submit" name="enviar" value="Enviar">
			    </div>
			</form>
		</div>	

        <form method="GET">
			<div id="test3" class="marginTabela"><br>
				<table class="striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Texto</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<!-- NOTICIAS -->
						<?php
							require("../php/noticias/opcoes-noticias.php");
						?>	
					</tbody>
				</table>
			</div>
		</form>	
	<!--- MODAL ALTERAR NOTICIAS-->
		<div id="modalalterarNoticia" class="modal modal-lg">
			<form method="POST" action="../php/noticias/editar-noticias.php">
				<div class="modal-content">

					<input class="titulo" id="idModal" style="display: none;" name="idModal">

					<!-- CONTAGEM DE CARACTERES NOME -->
					<span>Insira aqui o titulo </span><br>
					<span id="numerosNomeModal">20</span>
					<span>/20</span>
					<input class="titulo" required type="text" value="" id="nomeModal" maxlength="20" name="nomeModal">
					
					<!-- CONTAGEM DE CARACTERES TEXTAREA -->
					<span id="caracteres" class="span1Modal">Digite a noiticia</span><br>
					<span class="span3Modal" id="numerosModal">250</span>
					<span>/250</span><br>
					<textarea required class="textareaModal" id="noticiaModal" maxlength="250" name="noticiaModal"></textarea>
						
					<input class="inputModal" type="submit" value="Enviar">
				</div>
			</form>
		</div>
	<!--FIM -->	

	<!--footer class="footer">
		<a href="../adm.php"><i class="small material-icons ">arrow_back</i></a>
	</footer-->


		<!-- MODAL NOTICIAS IMAGEM -->
		<div id="modalNoticia" class="modal modal-fixed">
			<div class="modal-content">
		    	<p><h5>Suas alterações irá mudar essa parte de sua página</h5></p>
		    	<img class="imagemModal" src="../imagens/noticias.jpg">
		    </div>
		    <div class="modal-footer">
		    	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
		    </div>
		</div>
		<!--- FIM <-->

		<!-- MODAL CONFIRMAÇÃO
		<div id="modalconfirmacao" class="modal bottom-sheet">
    		<div class="modal-content">
      			<h4>Modal Header</h4>
      			<p>A bunch of text</p>
    		</div>
    		<div class="modal-footer">
      				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    		</div>
  		</div> -->



 <script src="../frameWorks/Materialize/js/jquery-3.2.1.js">
   $(".button-collapse").sideNav();
 </script>
 <script src="../frameWorks/Materialize/js/materialize.js"></script>
 <script src="../js/functions.js" ></script>


    </body>
</html>