
<?php 
	include("fotosCBdd.php");
	include("../php/conexao.php");
	$caminho = "img/";
	$busca = mysqli_query($conexao , "SELECT * FROM imagemc order by id desc");
	$imagem = mysqli_fetch_array($busca);
	
	while ($fotos = mysqli_fetch_array($dados)) {
		echo
		'<tr>
			<td>
				<img class="editImg" src="../uploadsC/'.$fotos['imagem'].'">
			</td>
			
			<td>
				<a class="blue". href="../php/fotos/apagarFotosC.php?id='.$fotos['id'].'"><i class="material-icons ">clear</i></a>
			</td>	
		</tr>';
									
	}
?>