<?php 
	require_once("noticiasbdd.php");
	while ($noticias = mysqli_fetch_array($dados)) {
		echo '<tr><td>'.$noticias['nome'].'</td><td>'.substr($noticias['noticia'], 0, 40).'(....)</td>
		<td>
			<a onclick="alterarNoticia(id = '.$noticias['id'].')"><i class="material-icons">create</i></a>
		
			&nbsp;<a href="../php/noticias/apagar-noticias.php?id='.$noticias['id'].'"><i class="material-icons">clear</i></a>
		</td>
		</tr>';
	}
?>	