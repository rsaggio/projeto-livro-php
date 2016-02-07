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
		$msg = "Produto Cadastrado com sucesso";
	}else {
		$msg = "Erro ao cadastrar o produto";
	}

	header("Location: ../form-cadastra-produto.php?msg={$msg}");

 ?>