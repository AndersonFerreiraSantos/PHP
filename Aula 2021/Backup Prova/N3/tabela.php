<?php ?>
<table>
		<tr>
			<th>Produto</th>
			<th>Descricao</th>
			<th>Quantidade</th>
			<th>Preço</th>
			<th>Medida</th>
		<tr>
		<?php foreach($lista_produtos as $produto): ?>
			<tr>
				<td><?php echo $produto['nome']; ?></td>		
				<td><?php echo $produto['descricao']; ?></td>
				<td><?php echo $produto['quantidade']; ?></td>
				<td><?php echo $produto['preco']; ?></td>
				<td><?php echo $produto['medida']; ?></td>
				<td>
					<a href="editar.php?ID=<?php echo $produto['ID'] ?> ">Editar</a> | 
					<a href="remover.php?ID=<?php echo $produto['ID']; ?>">Remover</a>
				</td>
			</tr>
		<?php endforeach; ?>	
	<table>		

