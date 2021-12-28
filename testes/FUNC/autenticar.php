<?php
require_once("conexao.php");

//inclui tempo a uma seção, nesse caso 120 min.
@session_cache_expire(120);

//@ serve para não dar problema em alguns servidores.
@session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_cript = md5($_POST['senha']);


//empty avalia se o campo está vazio.
if(empty($usuario) || empty($senha)){
    echo "<script language='javascript'>window.location='index.php';
    </script>";

}else{
    $res = $pdo ->prepare("SELECT * FROM usuarios where usuario = :usuario and senha = :senha");
    $res ->bindValue(":usuario", $usuario);
    $res ->bindValue(":senha", $senha_cript);
    $res ->execute();

    $dados = $res ->fetchAll(PDO::FETCH_ASSOC);
    $linhas = count($dados);

    if($linhas > 0){
        echo "<script language='javascript'>window.location='admin';
        </script>";
        $_SESSION['nome_usuario'] = $dados [0]['nome'];
        $_SESSION['email_usuario'] = $dados [0]['usuario'];
        $_SESSION['nivel_usuario'] = $dados [0]['nivel'];

        if($_SESSION['nivel'] == 'admin'){
            header('location: ADMIN');
        }
    }else{
        $_SESSION['login_invalido_colaborador'] = true;
        header('Location:index.php');
    }



}

?>