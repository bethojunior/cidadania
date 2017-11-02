<html>
	<head>
		<meta charset="utf-8" />
		<!--<script src="../frameWorks/Materialize/js/jquery-3.2.1.js"></script>-->
		<script src="../js/functions.js"></script>
		<link href="../css/loader.css" rel="stylesheet" />
		<link href="../css/alterarNoticia.css" rel="stylesheet" />
		<link href="../frameWorks/Materialize/css/materialize.css" rel="stylesheet" />
	</head>
	<body onload="alterarNoticia()">

		<div id="modalalterarNoticia" class="modal modal-fixed-footer">
			<form method="POST" action="../php/editar-noticias.php">
				<div class="modal-content">
					
					<span class="span1">Insira aqui o titulo </span><br>
					<input class="titulo" required type="text" value="" id="nomeModal" maxlength="30" name="nomeModal">
					<span id="caracteres" class="span1Modal">Digite a noiticia</span><br>
					
					<span class="span3Modal">Máximo 250 caracteres: </span>
					<span  id="numeros"></span><br>
					<textarea required class="textareaModal" id="noticiaModal" maxlength="250" name="noticiaModal">
					</textarea><br>
						
					<input class="inputModal" type="submit" value="Enviar">
				</div>
			</form>
		</div>
	
<script src="../frameWorks/Materialize/js/jquery-3.2.1.js">
   $(".button-collapse").sideNav();
</script>
<script src="../frameWorks/Materialize/js/materialize.js"></script>
<script src="../js/functions.js" ></script>
	</body>
</html>
