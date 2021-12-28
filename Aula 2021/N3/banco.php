<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'projeto_aula';

$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);



 function buscar_produtos($conexao){
 	$sqlBusca = 'SELECT * FROM produtos';
 	$resultado = mysqli_query($conexao, $sqlBusca);
	
 	$produtos = array();
 	while($produto = mysqli_fetch_assoc($resultado)){
 		$produtos[] = $produto;
 	}
 	return $produtos;
 }	

 function gravar_produto($conexao, $produto){
 	$sqlGrava = "
 			INSERT INTO produtos(nome, descricao, quantidade, preco, medida)
 				VALUES('{$produto['nome']}', 
 						'{$produto['descricao']}',
						 '{$produto['quantidade']}',
						 '{$produto['preco']}',
 						'{$produto['medida']}')";
 	mysqli_query($conexao, $sqlGrava);
}	
function buscar_produto($conexao){
	$sqlBusca = 'SELECT * FROM produtos WHERE ID ='.$ID;
	$resultado = mysqli_query($conexao, $sqlBusca);
	return mysqli_fetch_assoc($resultado);
}	

 ?>


