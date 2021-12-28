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
    
          <li><a href="Registrar.php">Registrar</a></li>
      </ul>
        <a class="logo">Duntra</a>

        <ul class="nav-list">
          <li><a href="">Sobre</a></li>
          <li><a href="">Pach</a></li>
        </ul>

     </nav>
  </header>

    
<div class="login">
    <form action="login.php" method="POST">
        <h1 class="logintext"><center>Login</h1><br>

        <?php
          if(isset($_SESSION['login_invalido'])):
        ?>
        <div>
            <h4 name="registronegado" class="registronegado"><center>CONTA INVALIDA
        </div><br>
        <?php
        endif;
        unset($_SESSION['login_invalido']);
        ?>

        <div>
         <input class="input" name="usuario" type="text" placeholder="Nome"><br><br>
          <input class="input" name="senha" type="password" placeholder="Senha"><br><br>
         <button type="submit" class="button"> ENTRAR</button><br><br>
        </div>
    </form>
</div>

</body>
<html>