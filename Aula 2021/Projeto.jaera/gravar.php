
<?php

include('banco.php');

$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$quantidade = $_GET['quantidade'];
$preco = $_GET['preco'];
$medida = $_GET['medida'];

echo $nome;

$result = mysqli_query($conexao, "INSERT INTO prdutos (nome,descricao,quantidade,preco,medida) VALUES ($nome, $descricao, $quantidade, $preco, $medida')");

if(!$sql){
    echo ('erroooo');
}else{
    echo ('ok');
}


