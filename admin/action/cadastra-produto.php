<?php 

	require "../modelos/Produto.php";
	require "../functions/manipula-arquivo.php";

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	$produto = new Produto();
	$produto->nome = $nome;
	$produto->preco = $preco;

	salvaProduto($produto);


	
 ?>