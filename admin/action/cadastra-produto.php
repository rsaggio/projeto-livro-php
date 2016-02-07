<?php 
	require "../../autoload.php";

	use \MegaStore\Models\Produto;
	use \MegaStore\Models\SalvadorProduto;

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	$produto = new Produto();
	$salvadorProduto = new SalvadorProduto();

	$produto->nome = $nome;
	$produto->preco = $preco;

	$salvadorProduto->salvaProduto($produto);
	
 ?>