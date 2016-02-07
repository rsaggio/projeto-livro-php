<?php 
	function carregaClasse($classe) {

		$root = dirname(__FILE__);

		$separador = DIRECTORY_SEPARATOR;

		$caminhoArquivo = str_replace("\\",$separador,$classe).".php";

		$caminhoCompleto = "{$root}/{$caminhoArquivo}";

		if(file_exists($caminhoCompleto)) {
			require $caminhoCompleto;
		}

	}

	spl_autoload_register("carregaClasse");
