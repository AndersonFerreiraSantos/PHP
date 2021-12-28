<?php
session_start();
include('autenticacao.php');
?>


<!doctype html>
<html lang="en">

  <head>

    <link rel="stylesheet" type="text/css" href="CSS/StyleCity.css">
    <link rel="stylesheet" type="text/css" href="CSS/style_nav.css"> 
    <title>DUNTRA</title>
  </head>

  <bory>
    <header>
      <nav>

        <ul class="nav-list"></ul>

        <ul class="nav-list">
          <li><a href="">Pach</a></li>
          <li><a href=""> Sair </a></li>
          
          
          
          <img class="Madeira" src="CSS/Imagens/ImagemCidade/Madeira.png" alt="cidade">
          <img class="Alimento" src="CSS/Imagens/ImagemCidade/Alimento.png" alt="cidade">
          <img class="Pedra" src="CSS/Imagens/ImagemCidade/Pedra.png" alt="cidade">
          <img class="Ouro" src="CSS/Imagens/ImagemCidade/Ouro.png" alt="cidade">
          <h3 class="nick"><?php echo $_SESSION['usuario']; ?></h3>
          

          <div><h2 class="OuroT" id="madera" name="OuroT">134<br><br></div>
          <div><h2 class="MadeiraT" name="MadeiraT">395<br><br></div>
          <div><h2 class="AlimentoT" name="AlimentoT">790<br><br></div>
          <div><h2 class="PedraT" name="PedraT">20<br><br></div>
          
          
        </ul>
      
        

     </nav>

     
     
         
          
     
     <a href="Casa.php">
      <img class="Casa" src="CSS/Imagens/ImagemCidade/Casa.png" alt="cidade">

      <a href="Casa.php">
      <img class="Oficina" src="CSS/Imagens/ImagemCidade/Oficina.png" alt="cidade">

      <a href="Quartel.html">
      <img class="Pesquisa" src="CSS/Imagens/ImagemCidade/Pesquisa.png" alt="cidade">

     <a href="No.php">
      <img class="No" src="CSS/Imagens/ImagemCidade/No.png" alt="cidade">

      <a href="Porto.php">
      <img class="Porto" src="CSS/Imagens/ImagemCidade/Porto.png" alt="cidade">

    

</header>

  </img>        
    
      
  
    </City>

  </body>
  <script>
    var madera = 0;
    var contadorm = document.querySelector("#madera")

  setInterval(function(){

      madera++;
      contadorm.textContent=madera;
    
  },1*1000)
  </script>
</html>