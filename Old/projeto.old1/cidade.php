<?php
session_start();
include('validacao_sessao.php');
?>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" type="text/CSS" href="CSS/style_City.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Mina.css">
  </head>

  <body onLoad="initTime();">

 
        

    <containner class="container">
   

      <figure class="city_Block0_Camada0">

          <img class="Background" src="CSS/Imagens/ImagemCidade/Background/Background_1_v1.png">

          <div class="menu_lateral">
            <ul>
              <li><a class="menu_lateral1" href="#">Eventos</a></li>
              <li><a class="menu_lateral2" href="#">Eventos</a></li>
              <li><a class="menu_lateral3" href="#">Eventos</a></li>
              <li><a class="menu_lateral4" href="#">Eventos</a></li>
              <li><a class="menu_lateral5" href="#">Eventos</a></li>
            </ul>
          </div>

          <div class="text_logout">
            <ul>
              <a href="logout.php" class="" aria-current="menu_lateral" >SAIR</a>
            </ul>
          </div>


          


          <img class="bandeira_giff1" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff2" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff3" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff4" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff5" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff6" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff7" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff8" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff9" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          
          

          <div name="text_laogout" class="horast" id="timer">b</div>
          
      

  

          <a class="text_usuario">Governador: <?php echo $_SESSION['usuario'];?> <a>

          <a href="index.html">
            <img class="icon_armazem"  src="CSS/Imagens/ImagemCidade/Background/icon_armazem.png"></a>
          <a href="#bg_mina">
            <img class="icon_mina"  src="CSS/Imagens/ImagemCidade/Background/icon_mina.png"></a>

          <div id="bg_mina"></div>
          <div class="box_mina">
            <img class="background_mina" src="CSS/Imagens/ImagemCidade/Background/background_mina_v1.png">
             <a href="cidade.html" class="close_mina"> X </a>
             
             <div>
              <button id="button_mina_temp" class="button_mina_temp" type="submit">TEMP FERRO +150</button>
            </div>
          </div>

          

          <script>
            function showTime(){
                var time = new Date();
                var hour = time.getHours();
                var minute = time.getMinutes();
                var second = time.getSeconds();

                if(hour<10) hour = "0"+hour;
                if(minute<10) minute = "0"+minute;
                if(second<10) second = "0"+second;

                var tempo = hour + ":"+ minute +":" + second;



                document.querySelector("#timer").innerHTML=tempo; 

            }
            function initTime(){
                setInterval(showTime);
                var tempo = document.querySelector("#timer")
            }
          </script>
      </figure>

    </containner>
  </body>
</html>


