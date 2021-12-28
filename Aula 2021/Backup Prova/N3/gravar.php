<?php
include ('banco.php');

$ID = intval($_GET['ID']);

$produto = $_GET['nome'];
$descricao = $_GET['descricao'];
$quantidade= $_GET['quantidade'];
$preco = $_GET['preco'];
$medida = $_GET['medida'];

$sql_cliente = "SELECT * FROM produtos WHERE ID = '$ID'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$cliente = $query_cliente->fetch_assoc();

$sql_code="UPDATE produtos SET nome = '$produto',descricao = '$descricao',quantidade = '$quantidade',preco = '$preco',medida = '$medida' WHERE ID = '$ID'";

$query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);
if($deu_certo){
echo 'deu certo';}

header('Location:tarefas.php');

?>