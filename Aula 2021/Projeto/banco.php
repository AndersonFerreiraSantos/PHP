<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'projeto_aula';

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);

if (!$conexao){
	echo ("Erro" .mysqli_connect_error());
}	

function buscar_tarefas($conexao){
	$sqlBusca = 'SELECT * FROM produtos';
	$resultado = mysqli_query($conexao, $sqlBusca);
	
	$tarefas = array();

	
	while($tarefa = mysqli_fetch_assoc($resultado)){
		$tarefas[] = $tarefa;
	}
	return $tarefas;
}	
?>
<html>
<?php foreach ($lista_tarefas as $tarefa) : ?>
	<tr>
		<td><?php echo $tarefa['nome']; ?></td>
	<tr>
</html>

<?php
echo $tarefa['nome'];

$sqlBusca = 'SELECT * FROM produtos';
$resultado = mysqli_query($conexao, $sqlBusca);

$tarefas = array();

	echo $tarefas['nome'];

function gravar_tarefa($conexao, $tarefa){
	$sqlGrava = "
			INSERT INTO produtos (nome, descricao, concluida, prioridade)
				VALUES('{$tarefa['nome']}', 
						'{$tarefa['descricao']}',
						'{$tarefa['concluida']}',
						'{$tarefa['prioridade']}')";
	mysqli_query($conexao, $sqlGrava);
}
function buscar_tarefa($conexao, $ID){
	$sqlBusca = 'SELECT * FROM produtos WHERE ID ='. $ID;
	$resultado = mysqli_query($conexao, $sqlBusca);

	return mysqli_fetch_assoc($resultado);
}	

function editar_tarefa($conexao, $tarefa){
	$sqlGrava = "
			UPDATE produtos SET nome = '{$tarefa['nome']}', 
							   descricao = '{$tarefa['descricao']}' , 
						WHERE ID = {$tarefa['ID']} ";
	mysqli_query($conexao, $sqlGrava);
}
function remover_tarefa($conexao, $id){
	$sqlRemover = 'DELETE FROM produtos WHERE ID = '. $id;
	mysqli_query($conexao,$sqlRemover);
}			

?>


