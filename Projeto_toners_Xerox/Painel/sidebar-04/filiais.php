<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  	<title>XEROX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>
<containner><br>
<impressoras > 
    <?php foreach($lista_filiais as $filial): ?>  
        <section class="display_impressoras">
            <div></div>

            <div class="row_impressoras">    
                </div>
                
                <div class="card_impressoras uso_impressoras">
                    <div> 
                        <form class="box_impressoras" action="Config/config_cadastrar_filial.php" method="POST">
                            
                        <a id="icon_config" class="fa fa-cog"  data-toggle="collapse" data-target="#navbar<?php echo $filial['ID'];?>"></a>
                            <div class="">
                                <box class="">
                                    <div class="collapse" id="navbar<?php echo $filial['ID']; ?>">

                                    <ul class="">
                                    <li>
                                        <div>
                                            <div>
                                                <h1>Teste
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                </box>
                                </nav>
                            </div>
                        </form>
                    </div>
                    <div>
                    <br><hr><h2><?php echo $filial['nome']; ?></h2><hr>
                    <p><?php echo $filial['responsavel']; ?></p>
                    <p><?php echo $filial['ramal']; ?></p>
                    <p><?php echo $filial['ID']; ?></p>
                    <p><?php echo $filial['celular']; ?></p><hr>
                    <br><br><br>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>	
</impressoras>



</containner>
    </div>
    <div><br>
    <?php
            if(isset($_SESSION['nome_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "NOME".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['nome_vazio']);
        ?>
    </div>
    <div>
    <?php
            if(isset($_SESSION['filial_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "FILIAL".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['filial_vazio']);
        ?>
    </div>

    <div>
    <?php
            if(isset($_SESSION['secao_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "SEÇÃO".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['secao_vazio']);
        ?>
    </div>

    <div>
    <?php
            if(isset($_SESSION['ip_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "IP".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['ip_vazio']);
        ?>
    </div>
    <div>
    <?php
            if(isset($_SESSION['impressora_cadastrada'])):
            ?>
        <div class="alert alert-success" role="alert">
            Impressora cadastrada com sucesso.
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['impressora_cadastrada']);
        ?>
    </div>
</containner>
</body>

</html>


