<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'projeto_aula';

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);

if ($conexao->connect_errno){
	echo 'erro';
}else{
	echo 'ok';
}

?>


