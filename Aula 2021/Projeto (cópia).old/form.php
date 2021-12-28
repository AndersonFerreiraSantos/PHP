<form>
		<fieldset >
			<legend>Nova tarefa</legend>
			<input type="text" name="ID" value="<?php echo $tarefa['ID'] ?>" />
			<label>Tarefa:
				<input type="text" name="nome" value="<?php echo $tarefa['nome'] ?>" />
			</label>
			<label>Descrição:
				<input type="text" name="descricao" value="<?php echo $tarefa['descricao'] ?>"/>
			</label>
			<label>Prazo:
				<input type="text" name="prazo" value="<?php echo $tarefa['prazo'] ?>" />
			</label>
			<fieldset>
				<legend>Prioridade:</legend>
				<label>
					<input type="radio" value="Baixa" name="prioridade"
						value="<?php echo ($tarefa['prioridade'] == 'Baixa')? 'checked' : '' ?>" />
						Baixa
					<input type="radio" value="Media" name="prioridade" />
						value="<?php echo ($tarefa['prioridade'] == 'Media')? 'checked' : '' ?>" />
						Media
					<input type="radio" value="Alta" name="prioridade" />
						value="<?php echo ($tarefa['prioridade'] == 'Alta')? 'checked' : '' ?>" />
						Alta
				</label>
			</fieldset>
			<label>Tarefa concluída:
				<input type="checkbox" name="concluida" value="sim"
				value="<?php echo ($tarefa['concluida'] == 'sim')? 'checked' : '' ?>" />
			</label>
			<input type="submit" name="ID" value="<?php echo ($tarefa['ID'] > 0)? 'atualizar' : 'cadastrar' ?>" />
		</fieldset>
	</form>