<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'projeto_aula';

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
			INSERT INTO tarefas(nome, descricao, prioridade)
				VALUES('{$tarefa['nome']}', 
						'{$tarefa['descricao']}',
						'{$tarefa['prioridade']}')";
	mysqli_query($conexao, $sqlGrava);
}	

function buscar_tarefa($conexao, $id){
	$sqlBusca = 'SELECT * FROM tarefas WHERE id = '. $id;
	$resultado = mysqli_query($conexao, $sqlBusca);
	return mysqli_fetch_assoc($resultado);
}	

function editar_tarefa($conexao, $tarefa){
	$sqlGrava = "
			UPDATE tarefas SET nome = '{$tarefa['nome']}', 
							   descricao = '{$tarefa['descricao']}' , 
							   prioridade = {$tarefa['prioridade']}
						WHERE id = {$tarefa['id']} ";
	mysqli_query($conexao, $sqlGrava);
}	
function remover_tarefa($conexao, $id){
	$sqlRemover = 'DELETE FROM tarefas WHERE id = '. $id;
	mysqli_query($conexao,$sqlRemover);
}	

//teste
//teste

	

?>


