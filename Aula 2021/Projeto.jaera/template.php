
<html>
<head>
	<meta charset="utf-8" />
	<title>Gerenciador de tarefas</title>
	<link rel="stylesheet" href="CSS/tarefas.css" type="text/css" />
</head>
<body>
	<h1>Gerenciador de tarefas</h1>
	<div>
		<form action="gravar.php" method="GET">
			<legend>Nova tarefa</legend>
			<label>Produto:
				<input type="text" name="nome" />
			</label>
			<label>Descrição:
				<input type="text" name="descricao" />
			</label>
			<label>Quantidade:
				<input type="text" name="quantidade" />
			</label>
			<label>Preço unitario:
				<input type="text" name="preco" />
			</label><br>
			<label>Unidade de Medida:
				<input type="text" name="medida" />
			</label><br>
			<button type="submit"> CADASTRAR </button>
		</form>
	</div>

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
				<td action="editar.php">
					<a href="editar.php?ID=<?php echo $tarefa['ID']; ?>">Editar</a> | 
				</td>
			</tr>
		<?php endforeach; ?>	
	<table>		
</body>
</html>
