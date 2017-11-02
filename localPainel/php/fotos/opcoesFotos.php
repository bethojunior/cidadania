
<?php 
	include("fotosBdd.php");
	include("../php/conexao.php");
	$caminho = "img/";
	$busca = mysqli_query($conexao , "SELECT * FROM imagem order by id desc limit 5 ");
	$imagem = mysqli_fetch_array($busca);
	
	while ($fotos = mysqli_fetch_array($dados)) {
		echo
		'<tr>
			<td>
				<img class="editImg" src="../uploads/'.$fotos['imagem'].'">
			</td>
			
			<td>
				'.$fotos['titulo'].'</td><td>'.substr($fotos['texto'], 0, 30).'(....)
			</td>
			
			<td>
				<a class="blue". href="../php/fotos/apagar-fotos.php?id='.$fotos['id'].'"><i class="material-icons ">clear</i></a>
			</td>	
		</tr>';
									
	}
?>