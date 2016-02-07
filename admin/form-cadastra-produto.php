<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de produto</title>
</head>
<body>
	<form action="action/cadastra-produto.php">
		<div>
			<label for="nome">Nome</label>	
			<input type="text" id="nome" name="nome">
		</div>
		<div>
			<label for="preco">Preço</label>	
			<input type="number" id="preco" name="preco">
		</div>
		<div>
			<input type="submit" value="Cadastrar">
		</div>
	</form>
</body>
</html>