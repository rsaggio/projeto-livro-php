<?php 
	require "../autoload.php";

	use \MegaStore\Dao\CategoriaDao;

	$dao = new CategoriaDao();
	$categorias = $dao->listar();
	
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de produto</title>
</head>
<body>
	<?php 
		if(isset($_GET['msg'])) {
			$msg = $_GET['msg'];
			echo "<p>{$msg}</p>";
		}
	 ?>
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
			<label for="categoria">Categoria</label>
			<select name="categoria" id="categoria">
				<?php 
					foreach($categorias as $categoria) {
				 ?>
				 	<option value="<?= $categoria->getId(); ?>"><?= $categoria->getNome(); ?></option>
				 <?php 
				 	}
				  ?>
			</select>
		</div>
		<div>
			<label for="usado">Usado</label>
			<input type="checkbox" id="usado" name="usado">
		</div>
		<div>
			<input type="submit" value="Cadastrar">
		</div>
	</form>
</body>
</html>