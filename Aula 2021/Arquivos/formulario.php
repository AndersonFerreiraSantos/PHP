<form>
		<fieldset>
			<legend>Nova tarefa</legend>
			<input type="hidden" name="id" value="<?php echo $tarefa['id'] ?>" />
			<label>Tarefa:
				<input type="text" name="nome" value="<?php echo $tarefa['nome'] ?>" />
			</label>
			<label>Descrição (Opcional):
				<input type="text" name="descricao" value="<?php echo $tarefa['descricao'] ?>" />
			</label>
			<label>Prazo (Opcional):
				<input type="text" name="prazo" />
			</label>
			<fieldset>
				<legend>Prioridade:</legend>
				<label>
					<input type="radio" value="1" name="prioridade" 
							<?php echo ($tarefa['prioridade'] == 1)? 'checked' : ''  ?> />
						Baixa
					<input type="radio" value="2" name="prioridade" 
							<?php echo ($tarefa['prioridade'] == 2)? 'checked' : ''  ?> />
						Media
					<input type="radio" value="3" name="prioridade" 
						<?php echo ($tarefa['prioridade'] == 3)? 'checked' : ''  ?> />
						Alta
				</label>
			</fieldset>
			<label>Tarefa concluída:
				<input type="checkbox" name="concluida" value="sim" 
					value="<?php echo ($tarefa['concluida'] == 1)? 'checked' : ''  ?>" />
			</label>
			<input type="submit" value="<?php echo ($tarefa['prioridade'] > 0)? 'Atualizar' : 'Cadastrar'?>" />
		</fieldset>
	</form>