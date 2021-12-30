<?php 
session_start();
;


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
<containner><br>
    <form class="nav_impressoras" action="Config/config_cadastrar_impressora.php" method="POST">
        <div>
            <nav id="box_impressoras" class="navbar navbar-dark bg-dark">
            <button id="nav_impressoras" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="">Cadastrar</span>
            </button>
            <button id="nav_impressoras" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText2" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="">?</span>
            </button>
            <button id="nav_impressoras" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText3" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="">?</span>
            </button><br>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><br>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                </div>
                
                <select name="modelo" class="input_cadastro" aria-label="Default select example">
                    <?php foreach($lista_modelo_impressoras as $modelo_impressora): ?>
                        <option><?php echo $modelo_impressora['modelo']; ?></option>
                    <?php endforeach; ?>	
                </select>

                </div>
            </li>
            <li>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nome:</span>
                    </div>
                <input name="nome" type="text" class="form-control" aria-describedby="basic-addon1">
                </div>
            </li>
            <li>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Filial:</span>
                    </div>
                <input name="filial" type="text" class="form-control" aria-describedby="basic-addon1">
                </div>
            </li>
            

            <li>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Seção:</span>
                    </div>
                <input name="secao" type="text" class="form-control" aria-describedby="basic-addon1">
                </div>
            </li>

            <li>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">IP:</span>
                    </div>
                <input name="ip" type="text" class="form-control" aria-describedby="basic-addon1">
                </div>
            </li>

            <button class="form-control" type="submit"> CADASTRAR </button>


            </ul>
            <span class="navbar-text">
            </span>
        </div>
    </form>
    </div>

    <div>
     <?php
            if(isset($_SESSION['nome_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencer o campo "NOME".
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
            Necessário preencer o campo "FILIAL".
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
            Necessário preencer o campo "SEÇÃO".
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
            Necessário preencer o campo "IP".
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

<!-- <select name="modelo" class="input_cadastro" aria-label="Default select example">
                    <?php foreach($lista_modelo_impressoras as $modelo_impressora): ?>
                        <option><?php echo $modelo_impressora['modelo']; ?></option>
                    <?php endforeach; ?>	
                </select> -->

<impressoras > 
    <?php foreach($lista_impressoras as $impressora): ?>  
        <section class="display_impressoras">
            <div class="row_impressoras">
                <div class="card_impressoras uso_impressoras">
                    <h2><?php echo $impressora['filial']; ?></h2>
                    <p><?php echo $impressora['nome']; ?></p>
                    <p><?php echo $impressora['secao']; ?></p>
                    <p><?php echo $impressora['modelo']; ?></p>
                    <p href="<?php echo $impressora['ip']; ?>"><?php echo $impressora['ip']; ?></p>
                    <img class="image_impressoras" src="images/<?php echo $impressora['modelo']?>.jpg" alt="settings" />
                </div>
                
            </div>

        </section>
    <?php endforeach; ?>	
</impressoras>

</html>

