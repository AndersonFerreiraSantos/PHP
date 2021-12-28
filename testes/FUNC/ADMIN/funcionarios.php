<?php

// require_once("../conexao.php");
// if($_SESSION['nivel_usuario'] != 'admin'){
//     header('Location:../index.php');

// $item1 = 'home';
// $item2 = 'funcionarios';
// $item3 = 'chefes';

$pagina = 'funcionario';


?>
<html>
    <html lang="pt">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="../CSS/style_Admin.css">

        <title>DUTRAN - ADMIN</title>

    </head>
    <body>
        <div class="button_main">
            <div>
                <a id="button_novo_funcionario" data-target="#modal"></a>
                <a class="button_funcionario_1" href="index.php?acao=<?php echo $pagina ?>&funcao=novo" type="button">NOVO FUNCIONÁRIO</a>
            </div>

        </div>

        <form method="POST" >
         <select id="" onChange="" class="" id="" name="itens_pagina">
             <?php if(isset($_POST['itens_pagina'])){
                 $item_pagina = $_POST['itens_pagina'];
             }
             ?>
             <option value="<?php echo @$itens_pagina ?>"><?php echo @$itens_pagina?> registro </option>

            </form>
        
    </body>
</html>

