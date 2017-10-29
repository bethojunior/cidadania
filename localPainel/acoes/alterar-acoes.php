<?php 
	session_start();
?> 
<html>
    <head>
		<meta charset='utf-8' />
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	    <meta http-equiv="Cache-Control" content="no-store" />
	    <meta http-equiv="Cache-Control" content="no-store" />	
		<title>Alterar Ações</title>
		
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu" rel="stylesheet">
		<link href="../css/style-4.css" rel="stylesheet" />

		<link href="../frameWorks/Materialize/css/materialize.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      
    </head>
    
    <body onload="imagemAcao()">
       <!--- MODAL-->
		<div id="modalAcao" class="modal modal-fixed-footer">
			<div class="modal-content">
		    	<p><h5>Suas alterações irá mudar essa parte de sua página</h5></p>
		    	<img class="imagemModal" src="../imagens/acoes.jpg">
		    </div>
		    <div class="modal-footer">
		    	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
		    </div>
		</div>
	<!--- FIM -->		

		<nav class="nav1 nav-extended">
		    <div class="nav-wrapper">
		      	<a href="#" class="brand-logo tituloCentro">Ações</a>
		    </div>
		   		<div class="nav-content">
		    	<ul class="tabs tabs-transparent">
		            <li class="tab"><a class="active" href="#test1">Ação</a></li>
		            <!--<li class="tab"><a onclick="fotosModal()" href="#test2">Fotos</a></li>-->
		            <li class="tab"><a href="#test3">Opções</a></li>
		            <li class="tab"><a onclick="sair()">Voltar</a></li>
		        </ul>
		    </div>
		    	<!--footer class="footer">
		<a href="../adm.php"><i class="small material-icons ">arrow_back</i></a>
	</footer-->
		</nav>
		<div id="test1" class="row">
			<form method="POST" action="../php/acoes/enviando-acoes.php" enctype="multipart/form-data">
				<div class="col s12 "><br>
					<span class="span1">Insira o titulo da Ação</span><br>
					<span  id="contagemAcao">20</span>
					<span >/20</span>
					<input class="titulo" autofocus="" type="text" maxlength="20" required="" id="nomeAcao" name="nomeAcao">
					
					<!-- CONTAGEM AÇÃO-->
					<span class="span1">&nbsp;Digite a ação</span><br>
					<span class="contagemNoticia" id="numeros">250</span>
					<span>/250</span><br>
					<textarea class="textarea1" maxlength="250" required="" id="acoes" name="acoes"></textarea><br />
					<input class="inputFile" type="file" name="file" style="display: none;" ><br>

					<input class="inputSubmit"  type="submit" name="enviar" value="Enviar">
			    </div>
			</form>
		</div>	 

		<!--- MODAL FOTOS-->
		<div id="modalFotos" class="modal ">
			<div class="modal-content">
		    	<p><h5>Suas alterações irá mudar essa parte de sua página</h5></p>
		    	<img class="imagemModal" src="../imagens/fotos.jpg">
		    </div>
		    <div class="modal-footer">
		    	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
		    </div>
		</div>
	<!--- FIM -->	

		<div>
			<!-- FORM OPÇÕES -->
			<form method="GET" action="../php/acoes/apagar-acoes.php">
				<div id="test3" class="marginTabela">
					<table class="striped ">
						<thead>
							<tr class="">
								<th>Nome</th>
								<th>Texto</th>
								<th>Opções</th>
							</tr>
						</thead>
						<tbody class="">
							<?php 
								require_once("../php/acoes/opcoes-acoes.php");
							?>	
						</tbody>
					</table>
				</div>
			</form>
		</div>

	<!--- MODAL OPÇÕES EDITAR-->
		<div id="modalOpcoes" class="modal modal-lg">
			<form method="POST" action="../php/acoes/editar-acoes.php">
				<div class="modal-content">
					<input class="titulo" id="idModalAcao" style="display: none;" name="idModalAcao">
					<span class="span1">Insira aqui o titulo da Ação</span><br>
					<span id="contagemModalAcao">&nbsp;20</span>
					<span>/20</span>
					<input class="titulo" type="text" maxlength="20" required="" id="nomeModalAcao" name="nomeModalAcao">
					
					<!-- CONTAGEM  NOTICIA-->
					<span class="ModalAcao">&nbsp;Digite a ação</span><br>
					<span id="numeros">250</span>
					<span>/250</span><br>
					<textarea class="textareaModal" maxlength="250" required="" id="acaoModalAcao" name="acaoModalAcao"></textarea><br />
					<input class="inputModal" type="submit" name="enviar" value="Enviar"><br>
			    </div>
			</form> 
		</div>
	<!--- FIM -->	

 <script src="../frameWorks/Materialize/js/jquery-3.2.1.js">
   $(".button-collapse").sideNav();
 </script>
 <script src="../frameWorks/Materialize/js/materialize.js"></script>
 <script src="../js/functions.js"></script>   

    </body>
</html>


