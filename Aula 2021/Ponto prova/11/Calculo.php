
            <?php
             $N1 = $_GET['N1'];
             $N2 = $_GET['N2'];
             $N3 = $_GET['N3'];
             $N4 = $_GET['N4'];
             $N5 = $_GET['N5'];

             $I1 = $_GET['I1'];
             $I2 = $_GET['I2'];
             $I3 = $_GET['I3'];
             $I4 = $_GET['I4'];
             $I5 = $_GET['I5'];

             $tabela = array($I1, $I2, $I3, $I4, $I5);

            rsort($tabela);

            $C1 = $tabela[0];
            $C2 = $tabela[1];
            $C3 = $tabela[2];
            $C4 = $tabela[3];
            $C5 = $tabela[4];

            if ($C1 == $I1){
                echo "Idade: $C1 |  Nome: $N1  ";
            }
            if($C1 == $I2){
                echo "Idade: $C1 |  Nome: $N2  ";  
            }
            if($C1 == $I3){
                echo "Idade: $C1 |  Nome: $N3  ";  
            }
            if($C1 == $I4){
                echo "Idade: $C1 |  Nome: $N4  ";   
            }
            if($C1 == $I5){
                echo "Idade: $C1 |  Nome: $N5  ";    
            }
            echo "<br>";
            //-----------------------------------
            if ($C2 == $I1){
                echo "Idade: $C2 |  Nome: $N1  ";
            }
            if($C2 == $I2){
                echo "Idade: $C2 |  Nome: $N2  ";  
            }
            if($C2 == $I3){
                echo "Idade: $C2 |  Nome: $N3  ";  
            }
            if($C2 == $I4){
                echo "Idade: $C2 |  Nome: $N4  ";   
            }
            if($C2 == $I5){
                echo "Idade: $C2 |  Nome: $N5  ";    
            }
            echo "<br>";
            //-----------------------------------
            if ($C3 == $I1){
                echo "Idade: $C3 |  Nome: $N1  ";
            }
            if($C3 == $I2){
                echo "Idade: $C3 |  Nome: $N2  ";  
            }
            if($C3 == $I3){
                echo "Idade: $C3 |  Nome: $N3  ";  
            }
            if($C3 == $I4){
                echo "Idade: $C3 |  Nome: $N4  ";   
            }
            if($C3 == $I5){
                echo "Idade: $C3 |  Nome: $N5  ";    
            }
            echo "<br>";
            //-----------------------------------
            if ($C4 == $I1){
                echo "Idade: $C4 |  Nome: $N1  ";
            }
            if($C4 == $I2){
                echo "Idade: $C4 |  Nome: $N2  ";  
            }
            if($C4 == $I3){
                echo "Idade: $C4 |  Nome: $N3  ";  
            }
            if($C4 == $I4){
                echo "Idade: $C4 |  Nome: $N4  ";   
            }
            if($C4 == $I5){
                echo "Idade: $C4 |  Nome: $N5  ";    
            }
            echo "<br>";
            //-----------------------------------
            if ($C5 == $I1){
                echo "Idade: $C5 |  Nome: $N1  ";
            }
            if($C5 == $I2){
                echo "Idade: $C5 |  Nome: $N2  ";  
            }
            if($C5 == $I3){
                echo "Idade: $C5 |  Nome: $N3  ";  
            }
            if($C5 == $I4){
                echo "Idade: $C5 |  Nome: $N4  ";   
            }
            if($C5 == $I5){
                echo "Idade: $C5 |  Nome: $N5  ";    
            }
            echo "<br>";

