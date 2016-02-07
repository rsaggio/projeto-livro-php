<?php 

	require "functions/manipula-arquivo.php";

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	salvaEmArquivo($nome,$preco);


	
 ?>