<?php 

	require "../modelos/Produto.php";
	require "../modelos/SalvadorProduto.php";

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	$produto = new Produto();
	$salvadorProduto = new salvadorProduto();

	$produto->nome = $nome;
	$produto->preco = $preco;

	$salvadorProduto->salvaProduto($produto);


	
 ?>