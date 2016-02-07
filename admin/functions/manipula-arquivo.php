<?php 
	function salvaProduto() {
		$nome = $_GET['nome'];
		$preco = $_GET['preco'];

		$registro = "$nome,$preco\n";

		$arquivo = fopen("arquivos.csv","a");
		fwrite($arquivo,$registro);
		fclose($arquivo);

		echo "Produto salvo com sucesso";
	}
 ?>