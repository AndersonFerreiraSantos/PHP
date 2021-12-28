<?php
	include "banco.php";
	remover_tarefa($conexao, $_GET['ID']);

	$teste=$_GET['ID'];
	echo $teste;
	// header('Location: tarefas.php');
?>