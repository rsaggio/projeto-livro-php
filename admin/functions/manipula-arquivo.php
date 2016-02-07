<?php 
	function salvaProduto(Produto $produto) {

		$registro = "$produto->nome,$produto->preco\n";

		$arquivo = fopen("arquivos.csv","a");
		fwrite($arquivo,$registro);
		fclose($arquivo);

		echo "Produto salvo com sucesso";

	}
 ?>