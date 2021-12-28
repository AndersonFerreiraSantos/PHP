<?php session_start();
 if(isset($_GET['tarefa']) && isset($_GET['tarefa'])!= ''){
    $tarefa = array();
	$tarefa['tarefas'] = $_GET['tarefas'];
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
	if(isset($_GET['nome'])){
		$terefa['nome'] = $_GET['nome'];
	}else{
		$terefa['nome']='';
	}
	if(isset($_GET['telefone'])){
		$tarefa['telefone']= $_GET['telefone'];	
	}else{
		$tarefa['telefone']='';
	}
	if(isset($_GET['mail'])){
		$tarefa['mail']= $_GET['mail'];
	}else{
		$tarefa['mail']= '';
	}

	$_SESSION['$lista_tarefas'][] =  $tarefa ;
 }
 if(isset($_SESSION['$lista_tarefas'])){
	$lista_tarefas =  $_SESSION['$lista_tarefas'];
 } else {
	  $lista_tarefas = array();
 }
include "template.php";
?>