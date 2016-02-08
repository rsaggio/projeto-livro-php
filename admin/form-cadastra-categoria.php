<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro Categoria</title>
</head>
<body>
	<?php 
		if(isset($_GET['msg'])) {
			$msg = $_GET['msg'];
			echo "<p>{$msg}</p>";
		}
	?>
	<form action="action/cadastra-categoria.php">
		<div>
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome">
		</div>
		<div>
			<input type="submit" value="Cadastrar">
		</div>
	</form>
</body>
</html>