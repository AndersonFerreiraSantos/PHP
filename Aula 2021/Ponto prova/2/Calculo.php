
<html>
    <head>
        <body>
            <?php

            $N1=$_GET['N1'];
            $raiz = 0;
    
             if($N1 > 0){
             $raiz = $N1 * $N1;
             echo "A raiz quadrada do número é: $raiz";
              }else{
                  echo "Número invalido";
              }
             ?>
</body>