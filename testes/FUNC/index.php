<?php
require_once("conexao.php");

 $senha = '123';
 $senha_cript = md5($senha);
 $res_usuarios = $pdo ->query("SELECT * from usuarios");
 $dados_usuarios = $res_usuarios ->fetchAll(PDO::FETCH_ASSOC);
 $linhas_usuarios = count($dados_usuarios);

  if($linhas_usuarios == 0){
    $res_insert = $pdo ->query("INSERT into usuarios(nome, usuario, senha, senha_original, nivel)values('Administrador','administrador@gmail.com','$senha_cript','$senha', 'admin')");
  }

?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="CSS/style_Index.css">
    
    <title>DUTRAN</title>

  </head>

  <body>
    <img class="background" src="CSS/Imagens/Login/background_login_v1.png">

    <container class="container">  

    </container>
      
    <form action="autenticar.php" class="login"  method="POST">
        <h1 class="login_text">LOGIN</h1>
             <?php
            if(isset($_SESSION['login_invalido_colaborador'])):
            ?>
            <div>
            <a class="text_error_login">Usuário ou senha inválidos</a><br><br>
            <div>
            <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['login_invalido_colaborador']);
            ?>
           
        <input name="usuario" class="user_text"  type="email" placeholder="Usuario" require><br><br>
        <input name="senha" size="21" class="user_text" type="password" placeholder="Senha" require><br><br>
        <button type="submit">ENTRAR</button><br><br>
    </form>
  </body>
<html>