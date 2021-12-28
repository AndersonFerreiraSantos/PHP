
<html>
    <head>
        <body>
            <?php

            $nome=$_GET['nome'];
            $N1=$_GET['N1'];
            $N2=$_GET['N2'];
            $N3=$_GET['N3'];
            $vailidacao1 = 0;
            $vailidacao2 = 0;

            

            $validacao1 = ($N1 / 100) * 20;
            $validacao2 = $N2 / $N3;

            if($validacao2 > $validacao1 ){
                echo "Empréstio não concedido.";
            }else echo "Emprestimo concedido"
            ?>
</body>

