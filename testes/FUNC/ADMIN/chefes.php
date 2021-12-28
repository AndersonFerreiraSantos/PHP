<?php
require_once("../conexao.php");
if($_SESSION['nivel_usuario'] != 'admin'){
    header('Location:../index.php');

$item1 = 'home';
$item2 = 'funcionarios';
$item3 = 'chefes';


}
?>
<html>
    <html lang="pt">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="../CSS/style_Admin.css">

        <title>DUTRAN - ADMIN</title>

    </head>
    <body>
        <div class="">
        <br><br>chefes<br><br><br><br><br><br>chefes
  
        </div>
        
    </body>
</html>

