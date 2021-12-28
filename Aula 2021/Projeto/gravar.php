<?php
include('banco.php');

function gravar_tarefa($conexao, $tarefa){
	$sqlGrava = "
			INSERT INTO produtos (nome, descricao, quantidade, preco, medida)
				VALUES('{$tarefa['nome']}', 
						'{$tarefa['descricao']}',
						'{$tarefa['concluida']}',
						'{$tarefa['prioridade']}')";
	mysqli_query($conexao, $sqlGrava);
}

gravar_tarefa($conexao, $tarefa);
?>