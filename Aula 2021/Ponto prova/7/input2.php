<html>
    <head>
        <meta charset="utf-8">
            <body>
                <Form name="f6" action="Calculo.php" method="Get">
                Digite 2 números: <br><br/>

                <input type="text" name="N1" size="10" maxlength="10"><br/><br/>
                <input type="text" name="N2" size="10" maxlength="10"><br/><br/>
                    
                <input type="submit"> 
            </body>  
    </heady>
</html>

<?php
$op=$_GET['operacao'];

$escolha=4;

if($op == 0){
    $escolha = 0;
}
if($op == 1){
    $escolha = 1;
}
if($op == 2){
    $escolha = 2;
}
if($op == 3){
    $escolha = 3;
}
echo "$op";



?>
