<?php
include('conexao.php');
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
          <li><a href="Cidade.php">Cidade</a></li>
          <li><a href="">Pach</a></li>
          <li><a href="">Sair</a></li>
          
     </nav>

</header>

  </img>        
    
      
  
    </City>

  </body>
</html>


<?php
$Start=0;
$Madeira = 0;
$Hora = date('H:i'); 
if($Start == 0){
    $Madeira = $Madeira + 1;
    
}
$y = 16296002620;

$x = $y - time();

$H = date("i");


echo $Start . "<br />";
echo $Hora . "<br />";
echo time() . "<br />";
echo $x;


?>
