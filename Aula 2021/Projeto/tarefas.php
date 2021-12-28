<?php 
session_start();

include "banco.php";
$exibir_tarefa = true;

 if(isset($_GET['nome']) && isset($_GET['nome'])!= ''){
	$tarefa = array();
	$tarefa['nome'] = $_GET['nome'];
	$tarefa['prioridade'] = $_GET['prioridade'];
	
	if(isset($_GET['descricao'])){
		$tarefa['descricao'] = $_GET['descricao'];
	} else {
		$tarefa['descricao'] = '';
	}
	if(isset($_GET['prazo'])){
		$tarefa['prazo'] = $_GET['prazo'];
	} else {
		$tarefa['prazo'] = '';
	}
	if(isset($_GET['concluida'])){
		$tarefa['concluida'] = $_GET['concluida'];
	} else {
		$tarefa['concluida'] = 'não';
	}
	gravar_tarefa($conexao, $tarefa);
 }

	$lista_tarefas =  buscar_tarefas($conexao, $_GET['ID']);

include "template.php";



?>