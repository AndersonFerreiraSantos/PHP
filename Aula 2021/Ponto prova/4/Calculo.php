
<html>
    <head>
        <body>
            <?php

            $nome=$_GET['nome'];
            $N1=$_GET['N1'];
            $N2=$_GET['N2'];
    
             if($N1 > 10 || $N1 < 0){

             echo "$nome, sua nota $N1 é invalida.";

              }else{
                  $ValidacaoN1 = 0;
              }

              if($N2 > 10 || $N2 < 0){

                    $ValidacaoN2 = 0;
   
                 }else{
                     $ValidacaoN2 = 1;
                 }

            if($ValidacaoN2 == 0){
                echo "$nome, sua nota $N2 é invalida";
            }else{
                $media = ($N1 + $N2) / 2;
                echo "$nome, sua média é $media.";
            }

            

            ?>
</body>