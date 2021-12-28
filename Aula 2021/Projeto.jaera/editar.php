<?php include('banco.php'); ?>

<form>
		<fieldset >
			<legend>Nova tarefa</legend>
			<label>Tarefa:
				<input type="text" name="nome" value="<?php echo $tarefas['nome'] ?>" />
			</label>
			<label>Descrição:
				<input type="text" name="descricao" />
			</label>
			<label>Prazo:
				<input type="text" name="prazo" />
			</label>
			<fieldset>
				<legend>Prioridade:</legend>
				<label>
					<input type="radio" value="Baixa" name="prioridade" checked="checked" />
						Baixa
					<input type="radio" value="Media" name="prioridade" />
						Media
					<input type="radio" value="Alta" name="prioridade" />
						Alta
				</label>
			</fieldset>
			<label>Tarefa concluída:
				<input type="checkbox" name="concluida" value="sim" />
			</label>
			<button type="submit" >CADASTRAR</button><br><br>
		</fieldset>
	</form>

<?php


	$sqlGrava = "
			UPDATE tarefas SET nome = '{$tarefa['nome']}', 
							   descricao = '{$tarefa['descricao']}' , 
							   prioridade = {$tarefa['prioridade']}
						WHERE id = {$tarefa['id']} ";
	mysqli_query($conexao, $sqlGrava);


?>