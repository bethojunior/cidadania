
<?php 
	require_once("acoesbdd.php");
	while ($acoes = mysqli_fetch_array($dados)) {
	echo '<tr><td>'.$acoes['nome'].'</td><td>'.substr($acoes['acoes'], 0, 100).'(....)</td>
	<td>
		<a onclick="modalAlterarAcoes('.$acoes['id'].')"><i class="material-icons">create</i></a>

		&nbsp;<a href="../php/acoes/apagar-acoes.php?id='.$acoes['id'].'"><i class="material-icons">clear</i></a>
	
	</tr>';
								
	}
?>