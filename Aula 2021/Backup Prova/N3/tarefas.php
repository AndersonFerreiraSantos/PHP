<?php 
session_start();

include "banco.php";
$exibir_tarefa = true;


 if(isset($_GET['nome']) && isset($_GET['nome'])!= ''){
	$produto = array();

	if(isset($_GET['nome'])){
		$produto['nome'] = $_GET['nome'];
	} else {
		$produto['nome'] = '';
	}
	
	if(isset($_GET['descricao'])){
		$produto['descricao'] = $_GET['descricao'];
	} else {
		$produto['descricao'] = '';
	}
	if(isset($_GET['quantidade'])){
		$produto['quantidade'] = $_GET['quantidade'];
	} else {
		$produto['quantidade'] = '';
	}

	if(isset($_GET['preco'])){
		$produto['preco'] = $_GET['preco'];
	} else {
		$produto['preco'] = '';
	}

	if(isset($_GET['medida'])){
		$produto['medida'] = $_GET['medida'];
	} else {
		$produto['medida'] = '';
	}
	gravar_produto($conexao, $produto);
 }

	$lista_produtos =  buscar_produtos($conexao);

include ('template.php');
?>