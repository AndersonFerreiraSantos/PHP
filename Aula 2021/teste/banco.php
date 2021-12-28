<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'banco_n2';

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);

if(mysqli_connect_errno($conexao)){
	echo "Problemas para conectar no banco. Verifique os dados!";
	die();
}

function buscar_tarefas($conexao){
	$sqlBusca = 'SELECT * FROM tarefas';
	$resultado = mysqli_query($conexao, $sqlBusca);
	
	$tarefas = array();
	while($tarefa = mysqli_fetch_assoc($resultado)){
		$tarefas[] = $tarefa;
	}
	return $tarefas;
}	

function gravar_tarefa($conexao, $tarefa){
	$sqlGrava = "
			INSERT INTO produtos(nome, descricao, quantidade, preco_unitario, unidade_de_medida)
				VALUES('{$tarefa['nome']}', 
						'{$tarefa['descricao']}',
						'{$tarefa['quantidade']}',
						'{$tarefa['preco_unitario']}',
						'{$tarefa['uniade_de_medida']}')";
	mysqli_query($conexao, $sqlGrava);
}	

function buscar_tarefa($conexao, $id){
	$sqlBusca = 'SELECT * FROM produtos WHERE id = '. $id;
	$resultado = mysqli_query($conexao, $sqlBusca);
	return mysqli_fetch_assoc($resultado);
}	

function editar_tarefa($conexao, $tarefa){
	$sqlGrava = "
			UPDATE produtos SET nome = '{$tarefa['nome']}', 
						'{$tarefa['descricao']}',
						'{$tarefa['quantidade']}',
						'{$tarefa['preco_unitario']}',
						'{$tarefa['uniade_de_medida']}
						WHERE id = {$tarefa['id']} ";
	mysqli_query($conexao, $sqlGrava);
}	
function remover_tarefa($conexao, $id){
	$sqlRemover = 'DELETE FROM produtos WHERE id = '. $id;
	mysqli_query($conexao,$sqlRemover);
}	



	

?>


