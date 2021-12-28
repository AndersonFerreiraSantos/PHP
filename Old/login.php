<?php
session_start();
include ('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location:index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location:Cidade.php');
    exit();
}else{
    $_SESSION['login_invalido'] = true; 
    header('Location:index.php');
    exit();
}

$y = 5;
$x = 2;

$t = 2;
while($t < 5){
    $x+$y;
}