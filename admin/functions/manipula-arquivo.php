<?php 
	function salvaProduto($nome,$preco) {

		$registro = "$nome,$preco\n";

		$arquivo = fopen("arquivos.csv","a");
		fwrite($arquivo,$registro);
		fclose($arquivo);

		echo "Produto salvo com sucesso";
		
	}
 ?>