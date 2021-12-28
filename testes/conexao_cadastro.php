<?php

require_once("conexao.php");

$email = $_POST['email'];
$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$senha_cript = md5($_POST['senha']);
$senha_original = $_POST['senha'];

$res_insert = $pdo ->query("INSERT INTO players(email, nome, usuario, senha, senha_cript, data_cadastro)
 VALUES ('$email','$nome','$usuario','$senha_original','$senha_cript', NOW())");
  ?>