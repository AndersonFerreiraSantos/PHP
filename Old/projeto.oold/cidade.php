<?php
session_start();
include('validacao_sessao.php');
?>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" type="text/CSS" href="CSS/style_City.css">
  </head>

  <body>

    <containner class="container">

      <figure class="city_Block0_Camada0" src="">

          <img class="Background" src="CSS/Imagens/ImagemCidade/Background/Background_1_v1.png">

          <img class="bandeira_giff1" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff2" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff3" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff4" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff5" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff6" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff7" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff8" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff9" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          
          <a href="logout.php" class="text_logout" aria-current="page" >SAIR</a>

          <a class="text_usuario">Governador: <?php echo $_SESSION['usuario'];?> <a>

          <a href="index.html">
            <img class="icon_armazem"  src="CSS/Imagens/ImagemCidade/Background/icon_armazem.png" hreff="index.html"></a>

      </figure>

      </div>

    </containner>
    
  </body>

</html>