<?php 
	require "../../autoload.php";

	use \MegaStore\Models\Produto;
	use \MegaStore\Dao\ProdutoDao;

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	$produto = new Produto();
	$dao = new ProdutoDao();

	$produto->nome = $nome;
	$produto->preco = $preco;

	$deuCerto = $dao->salvar($produto);
	
	if($deuCerto) {
		echo "Produto Cadastrado com sucesso";
	}else {
		echo "Erro ao cadastrar o produto";
	}
 ?>