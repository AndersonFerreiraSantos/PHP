<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="CSS/style_nav.css"> 

    <title>DUNTRA</title>
  </head>



<body>
<header>
      <nav>

      <ul class="nav-list">
          <li><a href="index.php">Home</a></li>
      </ul>
        <a class="logo">Duntra</a>

        <ul class="nav-list">
          <li><a href="">Sobre</a></li>
          <li><a href="">Pach</a></li>
        </ul>

     </nav>
  </header>
    
<div class="login">
    <form action="RegistrarConexao.php" method="POST">
        <h1 class="logintext">Resgistrar</h1><br>

        <?php
          if(isset($_SESSION['cadastro_realizado'])):
        ?>
        <div>
            <h4 name="registrorealizado" class="registrorealizado"><center>CADASTRO REALIZADO
        </div>

        <?php
        endif;
        unset($_SESSION['cadastro_realizado']);
        ?>

        <?php
          if(isset($_SESSION['usuario_existe'])):
        ?>
        <div>
            <h4 name="registronegado" class="registronegado"><center>USUÁRIO JA CADASTRADO
        </div><br>
        <?php
        endif;
        unset($_SESSION['usuario_existe']);
        ?>

        <div>
            <input class="input" name="nome" type="text" placeholder="Nome"><br><br>
            <input class="input" name="usuario" type="text" placeholder="Usuário"><br><br>
            <input class="input" name="senha" type="password" placeholder="Senha"><br><br>
        <div>

        <button type="submit" class="button"> REGISTRAR</button><br><br>
        
    </form>
</div>

</body>
<html>