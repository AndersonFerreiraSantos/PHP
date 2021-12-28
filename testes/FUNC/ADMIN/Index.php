<?php
require_once("../conexao.php");
if($_SESSION['nivel_usuario'] != 'admin'){
    header('Location:../index.php');
}

$item1 = 'chefes';
$item2 = 'funcionarios';
$item3 = 'home';

?>
<html>
    <html lang="pt">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="../CSS/style_Admin.css">

        <title>DUTRAN - ADMIN</title>

    </head>
    <body>
        <div class="nav_bar">
            <a class="text_session"><?php echo $_SESSION['nome_usuario'] ?></a>
            <a class="text_logout" href="#">SAIR</a>
            <a class="text_chefes" href="index.php?acao=<?php echo $item1 ?>">CHEFES</a>
            <a class="text_funcionarios" href="index.php?acao=<?php echo $item2 ?>">FUNCIONÁRIOS</a>
            <a class="text_home" href="index.php?acao=<?php echo $item3 ?>">HOME</a>
        </div>
        
    </body>
    <header>
        <div class="include_index">
            <?php
            if(@$_GET['acao'] == $item1){
                include_once($item1. ".php");
            }elseif(@$_GET['acao'] == $item2){
                include_once($item2. ".php");
            }elseif(@$_GET['acao'] == $item3){
                include_once($item3. ".php");
            }
                
            ?>
        </div>
    </header>
</html>