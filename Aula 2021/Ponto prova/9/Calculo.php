
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

            

            $x = max($N1, $N2, $N3, $N4, $N5, $N6, $N7, $N8, $N9, $N10, $N11, $N12, $N13, $N14, $N15);
            $n = min($N1, $N2, $N3, $N4, $N5, $N6, $N7, $N8, $N9, $N10, $N11, $N12, $N13, $N14, $N15);

             echo "A maior alutra é: $x <br>";
             echo "A menor alura é: $n ";
            ?>
</body>