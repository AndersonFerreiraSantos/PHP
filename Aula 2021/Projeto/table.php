<table>
		<tr>
			<th>Tarefas</th>
			<th>Descricao</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
		<tr>
		<?php foreach($lista_tarefas as $tarefa): ?>
			
			<tr>
				<td><?php echo $tarefa['nome']; ?></td>		
				<td><?php echo $tarefa['descricao']; ?></td>
				<td><?php echo $tarefa['prazo']; ?></td>
				<td><?php echo $tarefa['prioridade']; ?></td>
				<td><?php echo $tarefa['concluida']; ?></td>
				<td><?php echo $tarefa['prioridadealterada']; ?></td>
				<td>
					<a href="editar.php?ID=<?php echo $tarefa['ID']; ?>">Editar</a> | 
					<a href="remover.php?ID=<?php echo $tarefa['ID']; ?>">Remover</a>
				</td>
			</tr>
		<?php endforeach; ?>	
	<table>		