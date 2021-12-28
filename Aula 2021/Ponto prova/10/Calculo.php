
<html>
    <head>
        <body>
            <?php

            $N1=$_GET['N1'];
            $N2=$_GET['N2'];
            $N3=$_GET['N3'];
            $N4=$_GET['N4'];
            $N5=$_GET['N5'];
            $N6=$_GET['N6'];
            $N7=$_GET['N7'];
            $N8=$_GET['N8'];
            $N9=$_GET['N9'];
            $N10=$_GET['N10'];
            $N11=$_GET['N11'];
            $N12=$_GET['N12'];
            $N13=$_GET['N13'];
            $N14=$_GET['N14'];
            $N15=$_GET['N15'];

            $P=0;
            $I=0;

            if($N1 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N2 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N3 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N4 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N5 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N6 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N7 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N8 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N9 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N10 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N11 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N12 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N13 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N14 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

            if($N15 % 2 ==0){
                $P++;
            }else{
                $I++;
            }

           echo " Ao todo são $P números pares e $I ímpares.";
            ?>
</body>