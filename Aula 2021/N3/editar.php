
<?php 
session_start();
include "banco.php";

$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if($mysqli->connect_errno){
 	die("Falha");
}

$ID = intval($_GET['ID']);

$sql_cliente = "SELECT * FROM produtos WHERE ID = '$ID'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$cliente = $query_cliente->fetch_assoc();

?>

<form action="gravar.php">
		<fieldset >
			<legend>Alterar produto:  <?php echo $cliente['nome'] ?>  </legend>
			ID: <input type="text" name="ID" value="<?php echo $ID ?>" /><br><hr>
			<label>Produto:
				<input type="text" name="nome" value="<?php echo $cliente['nome'] ?>"  /><br><hr>
			</label>
			<label>Descrição:
				<input type="text" name="descricao" value="<?php echo $cliente['descricao'] ?>" /><br><hr>
			</label>
			<label>Qauntidade:
				<input type="number" name="quantidade" value="<?php echo $cliente['quantidade'] ?>" /><br><hr>
			</label>
			<label>Preço:
				<input type="number" name="preco" value="<?php echo $cliente['preco'] ?>"/><br><hr>
			</label>
			<label>Medida:
				<input type="text" name="medida" value="<?php echo $cliente['medida'] ?>"/><br><hr>
			</label><hr>
			<input type="submit" value="EDITAR" />
		</fieldset>
	</form>

<?php 

?>