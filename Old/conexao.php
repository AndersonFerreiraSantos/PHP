<?php

//Armazena o IP do banco de dados.
define('HOST','127.0.0.1');

//Armazena o usuário do banco de dados.
define('USUARIO','root');

//Armazena a senha do banco de dados.
define('SENHA','Santer@2' );

//Armazena o nome da base de dados.
define('DB', 'usuarios');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
?>



