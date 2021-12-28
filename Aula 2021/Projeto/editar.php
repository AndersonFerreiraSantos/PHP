<?php 
session_start();

include "banco.php";
$exibir_tarefa = false;

 if(isset($_GET['nome']) && isset($_GET['nome'])!= ''){
	$tarefa = array();
	$tarefa['ID'] = $_GET['ID'];
	$tarefa['nome'] = $_GET['nome'];
	$tarefa['prioridade'] = $_GET['prioridade'];
	
	if(isset($_GET['descricao'])){
		$tarefa['descricao'] = $_GET['descricao'];
	} else {
		$tarefa['descricao'] = '';
	}

	editar_tarefa($conexao, $tarefa);
 }

 	$tarefa =  buscar_tarefa($conexao, $_GET['ID']);

 include "template.php";
?>