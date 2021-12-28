<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'banco_n2';

function buscar_tarefa($conexao, $ID){
	$sqlBusca = 'SELECT * FROM tarefas WHERE ID ='. $ID;
	$resultado = mysqli_query($conexao, $sqlBusca);

	return mysqli_fetch_assoc($resultado);
}	

