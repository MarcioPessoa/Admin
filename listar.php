
<?php

$busca = "Select * from admin";

$sql = mysqli_query($conexao, $busca);

?>
<div class="container">
	<div class="nacbar-headr">
		<h3>Lista de Seleções</h3>
		<ol class="nav nav-justified">
			<li>Id</li>
			<li>Seção</li>
			<li>Ação</li>
		</ol>
		<?php while ($dados = mysqli_fetch_array($sql)): ?>
			<ol class="nav nav-justified">
				<li><?=$dados['id'];?></li>
				<li><?=$dados['titulo'];?></li>
				<li><a href="?pg=alterar&id=<?=$dados['id'];?>">Alterar</a></li>
			</ol>
		<?php endwhile; ?>
	</div>
</div>

