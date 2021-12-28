<?php 
session_start();

include "banco.php";

$exibir_tarefa = false;

 if(isset($_GET['nome']) && isset($_GET['nome'])!= ''){
	$tarefa = array();
	$tarefa['id'] = $_GET['id'];
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
		$tarefa['concluida'] = '';
	}
	editar_tarefa($conexao, $tarefa);
	header('Location: tarefas.php');
	die();
 }
 $tarefa =  buscar_tarefa($conexao, $_GET['id']);

 include "template.php";
?>