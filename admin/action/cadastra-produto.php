<?php 

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	// o que vamos salvar
	$registro = "{$nome},{$preco}";

	// salvando em um arquivo

	$arquivo = fopen("arquivos.csv","a");
	fwrite($arquivo,$registro);
	fclose($arquivo);

	echo "Produto salvo com sucesso";
 ?>