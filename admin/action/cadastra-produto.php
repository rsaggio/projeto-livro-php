<?php 
	require "../../autoload.php";

	use \MegaStore\Models\Produto;
	use \MegaStore\Models\Categoria;
	use \MegaStore\Dao\ProdutoDao;

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$usado = isset($_GET['usado']);
	$id_categoria = $_GET['categoria'];

	$produto = new Produto($nome,$preco);
	$categoria = new Categoria();

	$categoria->setId($id_categoria);

	$produto->setCategoria($categoria);

	$produto->setUsado($usado);

	$dao = new ProdutoDao();

	$deuCerto = $dao->salvar($produto);
	
	if($deuCerto) {
		$msg = "Produto Cadastrado com sucesso";
	}else {
		$msg = "Erro ao cadastrar o produto";
	}

	header("Location: ../form-cadastra-produto.php?msg={$msg}");

 ?>