
<html>
    <head>
        <body>
            <?php
            $N2=$_GET['N2'];
            $N1=$_GET['sexo'];
            $ideal = 0;

            if($N1 == 0){
                $ideal = ($N2 * 72.7) - 58;
                echo "Seu peso ideal seria $ideal kg";
            }else {
                $ideal = ($N2 * 62.1) - 44.7;
                echo "Seu peso ideal seria $ideal kg";
            }

            ?>
        <body>
    <head>
<html>        