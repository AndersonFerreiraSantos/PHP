<?php 
session_start();

include "banco.php";

 if(isset($_GET['nome']) && isset($_GET['nome'])!= ''){
	$tarefa = array();
	$tarefa['nome'] = $_GET['nome'];
	$tarefa['prioridade'] = $_GET['prioridade'];
	
	if(isset($_GET['descricao'])){
		$tarefa['descricao'] = $_GET['descricao'];
	} else {
		$tarefa['descricao'] = '';
	}

	gravar_produtos($conexao, $tarefa);
 }

	$lista_tarefas =  buscar_produtos($conexao);

include "template.php";



?>