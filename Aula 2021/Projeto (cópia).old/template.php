

<html>
<head>
	<meta charset="utf-8" />
	<title>Gerenciador de tarefas</title>
	<link rel="stylesheet" href="CSS/tarefas.css" type="text/css" />
</head>
<body>
	<h1>Gerenciador de tarefas</h1>
	<?php include('form.php'); ?>

	<?php if($exibir_tarefa) : ?>
			<?php include ('table.php') ?>
		<?php endif; ?>
</body>
</html>
